<?php

namespace Includes\Controllers;

use Includes\Data\DB;
use Includes\Helpers;

class MotorbikeController
{
    protected $db;

    public function __construct()
    {
        $this->db = new DB();
    }
    public function create()
    {
        Helpers::renderPartial('create-motorbike.phtml');
    }

    public function store()
    {
        try {
            $_POST['created_at'] = date('Y-m-d H:i:s');
            $this->db->insert('motorbikes', $_POST);
            Helpers::redirect('/motorbike/list');
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function list()
    {
        $page = $_GET['page'] ?? 1;
        $limit = $_GET['limit'] ?? 5;
        $sortBy = $_GET['sort_by'] ?? 'created_at';
        $sortType = $_GET['sort_type'] ?? 'ASC';
        $filters = $_GET['filters'] ?? [];

        $motors = $this->db->getAll('motorbikes', $page, $limit, $sortBy, $sortType, $filters);
        Helpers::renderPartial('list-motorbike.phtml', ['motors' => $motors]);
    }

    public function show()
    {
        $motor = $this->db->getById('motorbikes', $_GET['id']);
        Helpers::renderPartial('show-motorbike.phtml', ['motor' => $motor]);
    }
}