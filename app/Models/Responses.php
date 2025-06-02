<?php

namespace App\Models;

use CodeIgniter\Model;

class Responses extends Model
{
    protected $table            = 'responses';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'full_name',
        'email_address',
        'phone_number',
        'gender',
        'highest_education',
        'primary_occupation',
        'organization_category',
        'organization_name',
        'primary_usage',
        'type_of_service_used',
        'facilities_used',
        'has_complaint_history',
        'created_at',
        'status',
    ];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getResponsesById($id)
    {
        return $this->where('id', $id)->first();
    }

    public function getAllResponses()
    {
        return $this->findAll();
    }

    public function createResponse(array $data)
    {
        return $this->insert($data);
    }
}
