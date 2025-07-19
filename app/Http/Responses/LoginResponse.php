<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {


        if (Auth::check() && Auth::user()->role_id == 2) {
            $authAddress = Auth::user()->address;
            $pendingCount = Post::where('upazila', $authAddress) // or user_id if that’s your column
                ->where('status', 'Pending')
                ->count();

            if ($pendingCount > 0) {
                Session::flash('login_success', "Welcome back, " . Auth::user()->name . "! You have $pendingCount pending rescue assignment(s).");
            }
        }

        return redirect()->intended(config('fortify.home'));
    }
}
