<?php

namespace App\Http\Responses;
use App\Models\CountryCode;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract {
// public $countryCodes;
    public function toResponse($request)
     {

		$user = auth()->user();

		if($user->user_type == 'artist'){

			return redirect()->route('user-profile');
		}

		elseif($user->user_type == 'filmmaker')
		{
            // dd('loginrespkjkhj');
			return redirect()->route('company-profile');
		}

		elseif($user->user_type == 'admin')
		{
			return redirect()->route('admin-dashboard');
		}
    }
}
