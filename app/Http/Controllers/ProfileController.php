<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming User model is used for authentication
use Auth;
class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user(); // Retrieve authenticated user
        return view('profile.show', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user(); // Retrieve authenticated user
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request,)
    {
        $user = Auth::user(); // Retrieve authenticated user
        $user->update($request->all());
        

        return redirect()->route('profile.show', $user->id)->with('success', 'Profile updated successfully!');
    }
    

}
