<?php

namespace App\Services\ScientificWorks\Repositories;

use App\Models\ScientificWork;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class ScientificWorksRepository
{
    const ITEM_PAGINATE_FOR_SW = 10;

    public function getAllScientificWorks(/*array $filters, int $limit, int $offset = 0*/): LengthAwarePaginator
    {
        $scientificWork = ScientificWork::paginate(self::ITEM_PAGINATE_FOR_SW);
        $scientificWork->load('user', 'files');
        return $scientificWork;
    }

    public function getUserScientificWorks(int $userID): LengthAwarePaginator
    {
        $scientificWork = ScientificWork::whereUserId($userID)->paginate(self::ITEM_PAGINATE_FOR_SW);
        $scientificWork->load('user', 'files');
        return $scientificWork;
    }

    public function create(array $data): ScientificWork
    {
        return ScientificWork::create($data);
    }

    public function update(ScientificWork $scientific_work, array $data): ScientificWork
    {
        #dd($data);
        $scientific_work->update($data);
        return $scientific_work;
    }

    private function applyFilters(Builder $qb, array $filters): void
    {
        if (empty($filters['name'])) {
            $qb->where('name', 'LIKE', $filters['name']);
        }
    }
}
