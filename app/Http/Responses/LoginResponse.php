<?php

namespace App\Http\Responses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract {

    public function toResponse($request) {

		$user = auth()->user();

		if($user->user_type == 'artist'){

			return redirect()->route('user-profile');
		}

		elseif($user->user_type == 'filmMaker')
		{
            // dd('loginrespkjkhj');
			return redirect()->route('company-profile');
		}

		elseif($user->user_type == 'admin')
		{
			return redirect()->route('admin-dashboard');
		}

		else{

		Auth::logout();
		return redirect()->route('/login')->with('message', 'Your account is deactivated by administrator, please contact support.');
		}

    }
}
