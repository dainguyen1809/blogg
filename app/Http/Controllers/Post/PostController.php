<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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

    public function detail($id)
    {

        $data = Post::find($id);

        //User - Author
        $user = User::find($data->user_id);

        //Popular post
        $popularPost = Post::take(3)->orderBy('id', 'desc')->get();

        //Join table categories

        $categories = DB::table('categories')
            ->join('posts', 'posts.category', '=', 'categories.name')
            ->select('categories.name', 'categories.id', DB::raw('COUNT(posts.category) as total'))
            ->groupBy('posts.category')
            ->get();


        //Comments
        $cmtPost = Comment::where('post_id', $id)->get();


        //More Blog Post
        $others = Post::take(4)
            ->orderBy('id', 'desc')
            ->where('id', '!=', $id)
            ->get();

        $numberCmt = $cmtPost->count();


        return view('components.posts.detail', [
            'data' => $data,
            'user' => $user,
            'popularPost' => $popularPost,
            'categories' => $categories,
            'cmtPost' => $cmtPost,
            'numberCmt' => $numberCmt,
            'others' => $others,
        ]);
    }


    public function storeComment(Request $req)
    {
        if (!Auth::check()) {

            // Session::put('intended_url', url()->current());
            return redirect()->route('login')->with('message', 'You must login to use this feature!!!');

            // return redirect()->route('login')->with('message', 'You must log in to use this feature');
        }

        $comment = Comment::insert([
            'comment' => $req->comment,
            'user_id' => Auth::user()->id,
            'user_name' => Auth::user()->name,
            'post_id' => $req->post_id,
        ]);


        return redirect()->route('posts.detail', $req->post_id);


    }

}
