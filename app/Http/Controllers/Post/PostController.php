<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class PostController extends Controller
{
    public function index()
    {

        $Lposts = Post::orderBy('created_at', 'desc')->take(2)->get();
        $Mposts = Post::take(1)->orderBy('id', 'desc')->get();
        $Rposts = Post::take(2)->orderBy('title', 'desc')->get();

        //Business
        $businessPost = Post::where('category', 'Business')->take(2)->get();
        $sideBus = Post::where('category', 'Business')
            ->take(3)
            ->orderBy('title', 'desc')
            ->get();

        //Random Posts
        $randPost = Post::take(4)->orderBy('category', 'desc')->get();

        //Culture
        $culturePost = Post::where('category', 'Culture')->take(2)->get();
        $sideCulture = Post::where('category', 'Culture')
            ->take(3)
            ->orderBy('title', 'desc')
            ->get();

        //Travel
        $travelPost = Post::where('category', 'Travel')
            ->take(1)
            ->orderBy('title', 'desc')
            ->get();
        $travelPost_cover = Post::where('category', 'Travel')
            ->take(1)
            ->orderBy('id', 'desc')
            ->get();

        $travelPost_under = Post::where('category', 'Travel')
            ->take(2)
            ->orderBy('description', 'desc')
            ->get();


        return view('components.posts.index', [
            'Lposts' => $Lposts,
            'Mposts' => $Mposts,
            'Rposts' => $Rposts,
            'businessPost' => $businessPost,
            'sideBus' => $sideBus,
            'randPost' => $randPost,
            'culturePost' => $culturePost,
            'sideCulture' => $sideCulture,
            'travelPost' => $travelPost,
            'travelPost_cover' => $travelPost_cover,
            'travelPost_under' => $travelPost_under,
        ]);
    }

}
