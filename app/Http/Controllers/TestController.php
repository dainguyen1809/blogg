<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function test(Post $id)
    {

        $data = Post::find($id);

        //User - Author
        // $user = User::find($data->user_id);

        //Popular post
        $popularPost = Post::take(3)->orderBy('id', 'desc')->get();

        //Join table categories

        $categories = DB::table('categories')
            ->join('posts', 'posts.category', '=', 'categories.name')
            ->select('categories.name', 'categories.id', DB::raw('COUNT(posts.category) as total'))
            ->groupBy('posts.category')
            ->get();


        // print_r($categories);

        // dd($categories);


        //Comments
        $cmtPost = Comment::where('post_id', $id)->get();

        $others = Post::where('category', $data->category)
            ->where('id', '!=', $id)
            ->take(4)
            ->get();

        print_r($others);

    }
}
