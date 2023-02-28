<?php

namespace Includes\Controllers;

class MotorbikeController
{
    public function create()
    {
        $companies = [
            ['id' => 1, 'name' => 'yamaha', 'website' => ''],
            ['id' => 2, 'name' => 'suzuki', 'website' => ''],
            ['id' => 3, 'name' => 'bentli', 'website' => ''],
            ['id' => 4, 'name' => 'honda' , 'website' => ''],
        ];

        include_once BASE_MOTORBIKE_DIR_PATH . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'create-motorbike.phtml';
    }
}