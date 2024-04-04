<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function test(Request $req)
    {

        $path = 'assets/images/';
        $imagePost = $req->images->getClientOriginalName();
        $req->images->move(public_path($path), $imagePost);
        $imageUrl = asset('assets/images/' . $imagePost);
        dd($imageUrl);
    }
}
