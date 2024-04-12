<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function test()
    {

        // dd($req->getPathInfo());
        // $title = request()->getPathInfo();
        // $handlePath = explode('/', $title);
        // array_shift($handlePath);
        // $path = ucfirst(implode($handlePath));
        // ucfirst($path);
        // print_r($handlePath);
        // var_dump($path);

        // dd($path);

        
        // $title = request()->getPathInfo();
        // $handlePath = explode('/', $title);
        // array_shift($handlePath);
        // $path = ucfirst(implode($handlePath));


        $title = $this->dynamicTitle(request()->getPathInfo());

        return view('test', [
            'path' => $title,
        ]);
    }
}
