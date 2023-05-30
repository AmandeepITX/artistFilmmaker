<?php

namespace App\Http\Livewire\Profile;
use App\Models\CompanyDeals;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfilePage extends Component
{
    public $profilePage, $post;
    public function render()
    {
        $profilePage = User::findOrFail(request()->id);
        return view('livewire.profile.profile-page',['profilePages'=>$profilePage]);
    }
}
