<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;
use App\Mail\statusMail;


class UserIndex extends Component
{

    use WithPagination;
    public $searchTerm;

    public $view_page = false;

    public function approvedStatus($id)
    {

        $user = User::find($id);
        $user->update([
            'status' => 'approved',
        ]);
        // dd($user->email);
        \Mail::to($user->email)->send(new statusMail($user));
    }

    public function unapprovedStatus($id)
    {

        $user = User::find($id);
        $user->update([
            'status' => 'unapproved',
        ]);

        \Mail::to($user->email)->send(new statusMail($user));
    }


    public function view($id)
    {
      $this->view_page = true;
        $user = User::where('id', $id)->first();
        $this->headshot_card=$user->headshot_card;
        $this->username=$user->username;
        $this->email = $user->email;
        $this->city = $user->city;
        $this->state = $user->state;
        $this->zip_code = $user->zip_code;
        $this->phone = $user->phone;
        $this->f_name = $user->f_name;
        $this->l_name = $user->l_name;
        $this->service = $user->service;
        $this->personalization = $user->personalization;
        $this->users= $user;
    }


    public function render()
    {

        $searchTerm = '%' . $this->searchTerm . '%';

        $users = User::where('user_type', 'user')->where(function ($query) use ($searchTerm) {
            $query->where('username', 'like', '%' .  $searchTerm  . '%');
            $query->orWhere('email', 'like', '%' .  $searchTerm . '%');
        })->orderBy('id', 'desc')->paginate(10);


        return view('livewire.admin.user-index', compact('users'));
    }
}
