<?php
namespace App\Services;

use App\Services\Search\SearchQueryBuilder;

class SearchService
{
    private $queryBuilder;

    public function __construct()
    {
        $this->queryBuilder = new SearchQueryBuilder();
    }

    public function searchTenders(array $requestData)
    {
        $allowedFilters = ['country', 'sector', 'min_budget', 'max_budget', 'published_after', 'search', 'sort'];
        $filters = array_intersect_key($requestData, array_flip($allowedFilters));
        return $this->queryBuilder->build($filters);
    }
}
