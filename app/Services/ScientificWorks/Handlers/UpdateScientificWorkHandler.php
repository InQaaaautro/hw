<?php

namespace App\Services\ScientificWorks\Handlers;

use App\Models\ScientificWork;
use App\Services\ScientificWorks\Repositories\ScientificWorksRepository;


class UpdateScientificWorkHandler
{

    private $scientificWorkRepository;

    public function __construct(
        ScientificWorksRepository $scientificWorkRepository
    )
    {
        $this->scientificWorkRepository = $scientificWorkRepository;
    }

    public function handle(ScientificWork $scientificWork, array $data): ScientificWork
    {
        return $this->scientificWorkRepository->update($scientificWork, $data);
    }

}
