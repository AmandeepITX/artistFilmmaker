<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use App\Mail\statusMail;

class CompanyIndex extends Component
{
    use WithPagination;

    public $searchTerm;
    public $user_id, $first_name, $website, $bio_info, $city, $state;

    public $view_page = false;

    public function approvedStatus($id)
    {

        $user = User::find($id);
        $user->update([
            'status' => 'approved',
        ]);

        \Mail::to($user->email)->send(new statusMail($user));
        return redirect()->route('company-index');
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
        return redirect()->route('company-index');
    }


    public function view($id)
    {
        $this->view_page = true;
        $user = User::where('id', $id)->first();

        $this->user_id = $id;
        $this->first_name = $user->first_name;
        $this->website = $user->website;
        $this->bio_info = $user->userProfile->bio_info;
        $this->city = $user->userProfile->city;
        $this->state = $user->userProfile->state;

        // $this->username = $user->username;
        // $this->email = $user->email;
        // $this->b_name = $user->b_name;
        // $this->city = $user->city;
        // $this->state = $user->state;
        // $this->zip_code = $user->zip_code;
        // $this->address = $user->address;
        // $this->phone = $user->phone;
        // $this->f_name = $user->f_name;
        // $this->l_name = $user->l_name;

    }


    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $artists = User::where('user_type', 'artist')->where(function ($query) use ($searchTerm) {
            $query->where('first_name', 'like', '%' .  $searchTerm  . '%');
            $query->orWhere('email', 'like', '%' .  $searchTerm . '%');
        })->orderBy('id', 'desc')->paginate(10);

        return view('livewire.admin.company-index', compact('artists'));
    }
}
