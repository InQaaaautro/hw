<?php

namespace App\Services\ScientificWorks\Jobs;

use App\Models\ScientificWork;
use App\Notifications\SlackFailedJob;
use App\Services\ScientificWorks\Handlers\CreateScientificWorkHandler;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Throwable;

class CreateScientificWorkJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels, Notifiable ;

    private array $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    private function getCreateScientificWorkHandler(): createScientificWorkHandler
    {
        return app(CreateScientificWorkHandler::class);
    }

    public function handle(): void
    {
        $this->getCreateScientificWorkHandler()->handle($this->data);
        Log::channel("slack")->info("djasl;dkfj");
    }
}
