<?php

namespace Includes\Controllers;

use Includes\Data\DB;

class MotorbikeController
{
    protected $db;

    public function __construct()
    {
        $this->db = new DB();
    }
    public function create()
    {
        include_once BASE_MOTORBIKE_DIR_PATH . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'create-motorbike.phtml';
    }

    public function store()
    {
        try {
            $_POST['created_at'] = date('Y-m-d H:i:s');
            $this->db->insert('motorbikes', $_POST);
            echo "store new motorbike success";
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

        $motors = $this->db->getAll('motorbikes', $page, $limit, $sortBy, $sortType);
        include_once BASE_MOTORBIKE_DIR_PATH . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'list-motorbike.phtml';
    }

    public function show()
    {
        $motor = $this->db->getById('motorbikes', $_GET['id']);
        include_once BASE_MOTORBIKE_DIR_PATH . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'show-motorbike.phtml';
    }
}