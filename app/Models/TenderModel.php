<?php
namespace App\Models;

use CodeIgniter\Model;

class TenderModel extends Model
{
    protected $table = 'tenders';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'country', 'sector', 'budget', 'published_date'];
    protected $returnType = 'array';
}
