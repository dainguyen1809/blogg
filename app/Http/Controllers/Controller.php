<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    protected function dynamicTitle($path)
    {
        $handlePath = explode('/', $path);
        array_shift($handlePath);
        $title = ucfirst(end($handlePath));
        return $title;
    }

}
