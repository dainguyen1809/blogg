<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() // Assuming you're passing the user ID through a route
    {

        return view('components.profile.index');
    }

    public function profile($id)
    {
        $profile = User::find($id);

        return view('components.profile.profile', [
            'profile' => $profile,
        ]);
    }


    public function eidtProfile($id)
    {
        $user = User::find($id);
        return view('components.profile.edit', [
            'user' => $user,
        ]);
    }

    public function updateProfile(Request $req, $id)
    {
        // Validate
        $req->validate([
            'name' => 'required|max:100',
            'email' => 'required|max:255',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Get the user by ID
        $user = User::find($id);
        if (!$user) {
            return redirect()->back()->with('message', 'User not found.');
        }

        // Handle avatar upload
        if ($req->hasFile('avatar')) {
            $avatar = $req->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension(); // Generate unique avatar name

            $avatar->move(public_path('assets/images/users/'), $avatarName); // Move the uploaded file

            // Update user's avatar path in the database
            $user->avatar = $avatarName;
            $user->save();
        }

        return redirect()->route('user.profile', $user->id);
    }


}
