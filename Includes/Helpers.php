<?php

namespace Includes;

class Helpers
{
    public static function dd($arg)
    {
        echo '<pre>';
        var_dump($arg);
        echo '<pre>';
        die;
    }

    public static function renderPartial($partial, $data = [])
    {
        include_once BASE_MOTORBIKE_DIR_PATH . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . $partial;
    }

    public static function redirect($address)
    {
        header('Location: ' . $address);
        die();
    }
}