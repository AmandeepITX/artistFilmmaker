<?php

namespace App\Http\Livewire\Admin\Genre;

use Livewire\Component;
use App\Models\Genre;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class GerneList extends Component
{
    use LivewireAlert;
    public $title, $genreEdit, $userId;
    public $updateMode = false;
    protected $listeners = ['delete'];


    public function addGenreTypes()
    {
        $validateData = $this->validate([
            'title' => 'required',
        ]);
        $types = new Genre;
        $types->title = $this->title;
        $types->save();

        $this->alert('success', 'Data save successfully');
        return redirect()->route('genre-index');
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $genreEdit = Genre::find($id);
        $this->userId = $genreEdit->id;
        $this->title = $genreEdit->title;
    }

    public function updateGenreTypes()
    {
        $validateData = $this->validate([
            'title' => 'required',
        ]);


        if ($this->userId) {
            $user = Genre::find($this->userId);
            $user->title = $this->title;
            $user->save();

            $this->updateMode = false;
        }
        $this->alert('success', 'Updated successfully');
    }



    public function deleteConfirm($id)
    {
        $this->userId = $id;

        $this->alert('', 'Are you sure do want to delete?', [
			'toast' => false,
			'position' => 'center',
			'showCancelButton' => true,
			'cancelButtonText' => 'No',
			'showConfirmButton' => true,
			'confirmButtonText' => 'Yes',
			'onConfirmed' => 'delete',
            'onDismissed' => 'cancelled',
			'timer' => null
		]);

        // $this->emit('refreshComponent');
    }

    public function delete()
    {
        if ($this->userId) {
            Genre::find($this->userId)->delete();
        }
        $this->alert('success', 'Deleted successfully');
    }

    public function render()
    {

        $genreTypes = Genre::get();
        return view('livewire.admin.genre.gerne-list', compact('genreTypes'))->extends('pages.admin.layouts.includes.app');
    }
}
