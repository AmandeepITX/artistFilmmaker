<?php

namespace App\Http\Livewire\Profile;
use App\Models\CompanyDeals;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Genre;

class ProfilePage extends Component
{
    public $profilePage, $post;
    public function render()
    {
        $profilePage = User::findOrFail(request()->id);
        $selectedGenres = json_decode($profilePage->userProfile['genres_id']);
        $genres = Genre::whereIn('id', $selectedGenres)->get(['id', 'title']);
        return view('livewire.profile.profile-page',['profilePages' => $profilePage, 'genres' => $genres]);
    }
}
