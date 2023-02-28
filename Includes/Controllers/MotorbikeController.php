<?php

namespace Includes\Controllers;

use Includes\Data\DB;

class MotorbikeController
{
    protected $db;

    public function __construct()
    {
        $this->db = (new DB())->setTable('companies');
    }
    public function create()
    {
        $companies = $this->db->getAll();
        include_once BASE_MOTORBIKE_DIR_PATH . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'create-motorbike.phtml';
    }

    public function store()
    {
        try {
            $this->db->setTable('motorbikes')->insert($_POST);
            echo "store new motorbike success";
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }
}