<?php

namespace App\Services\ScientificWorks\Handlers;

use App\Models\ScientificWork;
use App\Services\ScientificWorks\Repositories\ScientificWorksRepository;

class CreateScientificWorkHandler
{

    private $scientificWorksRepository;

    public function __construct(
        ScientificWorksRepository $scientificWorksRepository
    )
    {
        $this->scientificWorksRepository = $scientificWorksRepository;
    }

    public function handle(array $data): ScientificWork
    {
        return $this->scientificWorksRepository->create($data);
    }

}
