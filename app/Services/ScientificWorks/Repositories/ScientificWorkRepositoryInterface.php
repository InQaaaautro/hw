<?php

namespace App\Services\ScientificWorks\Repositories;

use App\Models\ScientificWorks;

interface ScientificWorkRepositoryInterface
{
    public function find(int $id);

    public function seatch(array $filters = []);

    public function createFromArray(array $data): ScientificWork;

    public function updateFromArray(ScientificWork $scientificWork, array $data): ScientificWork;

}
