<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Industry;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class IndustryListing extends Component
{
    use WithPagination;

    use LivewireAlert;
    protected $paginationTheme = 'bootstrap';
    public $list, $industry_name, $post, $user, $validate, $deleteId = '';
    public $is_update = false;
    public $searchTerm;
    public $industryList, $industry_id;



    public function resetInputFields()
    {
        $this->industry_name = '';
    }
    public function store()
    {
        $this->validate([
            'industry_name' => 'required',
        ]);
        $list = new Industry;
        $list->industry_name = $this->industry_name;
        $list->save();
        $this->resetInputFields();
        $this->alert('success', 'Data created successfully!');
    }


    public function edit($id)
    {
        $post = Industry::where('id', $id)->first();
        $this->industry_id = $id;
        $this->industry_name = $post->industry_name;
        $this->is_update = true;
    }

    public function update()
    {
        $this->validate([
            'industry_name' => 'required',
        ]);
        $user = Industry::find($this->industry_id);
        $user->update([
            'industry_name' => $this->industry_name,
        ]);
        $this->is_update = false;
        $this->resetInputFields();
    }

    public function cancel()
    {
        $this->is_update = false;
        $this->resetInputFields();
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        Industry::find($this->deleteId)->delete();
    }
    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';

        $industryList = Industry::where(function ($query) use ($searchTerm) {
            $query->where('industry_name', 'like', '%' .  $searchTerm  . '%');
        })->orderBy('id', 'desc')->paginate(5);
        //dd($industryList );
        return view('livewire.admin.industry-listing', ['industryLists' => $industryList]);
    }
}
