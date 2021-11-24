<?php

namespace App\Console\Commands;

use App\Models\Permission;
use App\Services\Users\UsersService;
use Illuminate\Console\Command;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class GivePermission extends Command
{

    protected $signature = 'users:give_permissions
                            {user : The ID of user}
                            {permit : Slug name for permission}
                            {--N|--notify : notify to slack channel, if everything is ok}';

    protected $description = 'give user permit';

    private function getUsersService(): UsersService
    {
        return app(UsersService::class);
    }

    public function handle()
    {
        $id = $this->argument('user'); //id
        $user = $this->getUsersService()->findUser($id);
        if (!$user) {
            $this->error("User $id not found");
            return false;
        }

        $permitSlug = $this->argument('permit'); //id;
        if (!($permitSlug)) {
            $this->error("Permission $permitSlug not found");
            return false;
        }

        if ($this->confirm("Do you want add permission '$permitSlug' to user $user->email?")) {
            try {
                $this->getUsersService()->handle($user, [$permitSlug]);
            } catch (QueryException $e) {
                $this->error($e->getMessage());
                return false;
            }

            $notify = $this->option('notify');
            if ($notify) {
                Log::channel("slack")->info("Add permission '$permitSlug' to user: $user->email");
            }
            $this->info("Success!");
            return true;
        }
        $this->line("Aborting");
        return false;
    }
}
