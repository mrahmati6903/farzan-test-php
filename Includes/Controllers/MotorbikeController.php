<?php

namespace Includes\Controllers;

use Includes\Data\DB;

class MotorbikeController
{
    public function create()
    {
        $companies = (new DB())->setTable('companies')->getAll();
        include_once BASE_MOTORBIKE_DIR_PATH . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'create-motorbike.phtml';
    }
}