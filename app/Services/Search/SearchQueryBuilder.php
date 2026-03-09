<?php
namespace App\Services\Search;

use App\Models\TenderModel;

class SearchQueryBuilder
{
    private $model;

    public function __construct()
    {
        $this->model = new TenderModel();
    }

    public function build(array $filters)
    {
        $builder = $this->model->builder();

        if (isset($filters['country'])) {
            $this->applyInFilter($builder, 'country', $filters['country']);
        }

        if (isset($filters['sector'])) {
            $this->applyInFilter($builder, 'sector', $filters['sector']);
        }

        if (isset($filters['min_budget'])) {
            $builder->where('budget >=', (int)$filters['min_budget']);
        }

        if (isset($filters['max_budget'])) {
            $builder->where('budget <=', (int)$filters['max_budget']);
        }

        if (isset($filters['published_after'])) {
            $builder->where('published_date >=', $filters['published_after']);
        }

        if (isset($filters['search'])) {
            $builder->like('title', $filters['search']);
        }

        if (isset($filters['sort'])) {
            $this->applySorting($builder, $filters['sort']);
        }

        return $builder->get()->getResultArray();
    }

    private function applyInFilter($builder, $column, $value)
    {
        if (strpos($value, ',') !== false) {
            $values = array_map('trim', explode(',', $value));
            $builder->whereIn($column, $values);
        } else {
            $builder->where($column, trim($value));
        }
    }

    private function applySorting($builder, $sortOption)
    {
        switch ($sortOption) {
            case 'budget_asc':
                $builder->orderBy('budget', 'ASC');
                break;
            case 'budget_desc':
                $builder->orderBy('budget', 'DESC');
                break;
            case 'newest':
                $builder->orderBy('published_date', 'DESC');
                break;
        }
    }
}
