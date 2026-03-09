<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Services\SearchService;

class SearchController extends ResourceController
{
    private $searchService;

    public function __construct()
    {
        $this->searchService = new SearchService();
    }

    public function index()
    {
        $requestData = $this->request->getGet() ?? [];

        try {
            $results = $this->searchService->searchTenders($requestData);
            return $this->response->setJSON($results);
        } catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'error' => $e->getMessage()
            ]);
        }
    }
}
