<?php

namespace App\Services\ScientificWorks;

use App\Models\ScientificWork;
use App\Services\ScientificWorks\Jobs\CreateScientificWorkJob;
use App\Services\ScientificWorks\Handlers\CreateScientificWorkHandler;
use App\Services\ScientificWorks\Handlers\UpdateScientificWorkHandler;
use App\Services\ScientificWorks\Repositories\ScientificWorksRepository;
use Illuminate\Pagination\LengthAwarePaginator;

class ScientificWorksService
{
    private $scientificWorksRepository;
    private $createScientificWorkHandler;
    private $updateScientificWorkHandler;

    public function __construct(
        ScientificWorksRepository $scientificWorksRepository,
        CreateScientificWorkHandler $createScientificWorkHandler,
        UpdateScientificWorkHandler $updateScientificWorkHandler
    ){
        $this->scientificWorksRepository = $scientificWorksRepository;
        $this->createScientificWorkHandler = $createScientificWorkHandler;
        $this->updateScientificWorkHandler = $updateScientificWorkHandler;
    }

    public function getAllScientificWorks(): LengthAwarePaginator
    {
        return $this->scientificWorksRepository->getAllScientificWorks();
    }

    public function getUserScientificWorks($user): LengthAwarePaginator
    {
        return $this->scientificWorksRepository->getUserScientificWorks($user);
    }

    public function createScientificWorks(array $data): void
    {
        //TODO return $this->createScientificWorkHandler->handle($data);

        CreateScientificWorkJob::dispatch($data)
            #->delay(11)
        ;
        #return $this->createScientificWorkHandler->handle($data);
    }


    public function updateScientificWorks(ScientificWork $scientific_work, array $data): ScientificWork
    {
        return $this->updateScientificWorkHandler->handle($scientific_work, $data);
    }
}
