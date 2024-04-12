<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function login()
    {
        $title = $this->dynamicTitle(request()->getPathInfo());

        return view('admin.components.account.login', [
            'title' => $title,
        ]);
    }
    public function checkLogin(Request $req)
    {

        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        $remember_me = $req->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $req->input("email"), 'password' => $req->input("password")], $remember_me)) {

            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with(['error' => 'Unknow email or password']);
    }

    public function index()
    {

        if (!Auth::guard('admin')->user()) {
            return redirect()->route('admin.login')->with('error', 'Please Log in !!');
        }

        $title = $this->dynamicTitle(request()->getPathInfo());

        $posts = Post::all();
        $postCount = $posts->count();

        $categories = Category::all();
        $categoryCount = $categories->count();

        $users = User::all();
        $userCount = $users->count();

        $admins = Admin::all();
        $adminCount = $admins->count();

        return view('admin.components.home.index', [
            'title' => $title,
            'postCount' => $postCount,
            'categoryCount' => $categoryCount,
            'userCount' => $userCount,
            'adminCount' => $adminCount,
        ]);
    }


    public function posts()
    {
        $posts = Post::paginate(4);
        $title = $this->dynamicTitle(request()->getPathInfo());

        return view('admin.components.posts.index', [
            'title' => $title,
            'posts' => $posts,
        ]);
    }

    public function categories()
    {
        $categories = Category::all();
        $title = $this->dynamicTitle(request()->getPathInfo());

        return view('admin.components.categories.index', [
            'title' => $title,
            'categories' => $categories,
        ]);
    }

    public function users()
    {
        $title = $this->dynamicTitle(request()->getPathInfo());
        $users = User::all();

        return view('admin.components.users.index', [
            'title' => $title,
            'users' => $users,
        ]);
    }

    public function admins()
    {
        $title = $this->dynamicTitle(request()->getPathInfo());
        $admins = Admin::all();
        // dd($admins);

        return view('admin.components.admins.index', [
            'title' => $title,
            'admins' => $admins,
        ]);
    }

    public function createAdmin()
    {
        $title = $this->dynamicTitle(request()->getPathInfo());
        $admins = Admin::all();

        return view('admin.components.admins.create-admin', [
            'title' => $title,
            'admins' => $admins,
        ]);
    }

    public function adminStore(Request $req)
    {
        $req->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|max:255',
            'role' => 'required|numeric|max:10',
            'avatar' => 'required|max:2048',
            'position' => 'required|max:2048',
        ]);


        $path = 'backend/images/users/';
        $avatar = $req->avatar->getClientOriginalName();
        $req->avatar->move(public_path($path), $avatar);


        $createAdmin = Admin::create([
            'name' => $req->name,
            'email' => $req->email,
            'avatar' => $avatar,
            'position' => $req->position,
            'role' => $req->role,
            'password' => Hash::make($req->password),
            'created_at' => now(),
        ]);

        return redirect()->route('admin.list');
    }

}
