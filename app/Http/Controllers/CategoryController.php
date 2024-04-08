<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function category($name)
    {
        $data = Post::take(5)
            ->where('category', $name)
            ->orderBy('created_at', 'desc')
            ->get();

        //Popular post
        $popularPost = Post::take(3)->orderBy('id', 'desc')->get();

        $categories = DB::table('categories')
            ->join('posts', 'posts.category', '=', 'categories.name')
            ->select('categories.name', 'categories.id', DB::raw('COUNT(posts.category) as total'))
            ->groupBy('posts.category')
            ->get();


        return view('components.categories.categories', [
            'name' => $name,
            'data' => $data,
            'popularPost' => $popularPost,
            'categories' => $categories,
        ]);
    }
}
