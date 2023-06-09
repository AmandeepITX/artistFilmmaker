<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use App\Mail\statusMail;

class FilmmakerIndex extends Component
{
    use WithPagination;

    public $searchTerm;
    public $user_id, $first_name, $website, $bio_info, $city, $state, $zip_code;

    public $view_page = false;

    public function approvedStatus($id)
    {

        $user = User::find($id);
        $user->update([
            'status' => 'approved',
        ]);

        \Mail::to($user->email)->send(new statusMail($user));
        return redirect()->route('filmaker-index');
    }

    /**
     *  Livewire Lifecycle Hook
     */


    public function unapprovedStatus($id)
    {

        $user = User::find($id);
        $user->update([
            'status' => 'unapproved',
        ]);

        \Mail::to($user->email)->send(new statusMail($user));
        return redirect()->route('filmaker-index');
    }


    public function view($id)
    {
        $this->view_page = true;
        $user = User::where('id', $id)->first();

        $this->user_id = $id;
        $this->first_name = $user->first_name;
        $this->website = $user->website;
        $this->city = isset($user->userProfile->city) ? $user->userProfile->city : '';
        $this->state = isset($user->userProfile->state) ? $user->userProfile->state : '';
        $this->bio_info = isset($user->userProfile->bio_info) ? $user->userProfile->bio_info : '';
        $this->zip_code = isset($user->userProfile->zip_code) ? $user->userProfile->zip_code : '';

    }


    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $filmmakers = User::where('user_type', 'filmmaker')->where(function ($query) use ($searchTerm) {
            $query->where('first_name', 'like', '%' .  $searchTerm  . '%');
            $query->orWhere('email', 'like', '%' .  $searchTerm . '%');
        })->orderBy('id', 'desc')->paginate(10);

        return view('livewire.admin.filmmaker-index', compact('filmmakers'));
    }
}
