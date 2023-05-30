<?php

namespace App\Http\Livewire;
use App\Models\Member;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;
use Livewire\Component;

class ChamberMember extends Component
{
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $chamber_member;
    public $list, $post, $user, $validate, $deleteId = '';
    public $is_update = false;
    public $searchTerm;
    public $memberList;
    public function resetInputFields()
    {
        $this->chamber_member = '';
    }

    public function store()
    {
        $this->validate([
            'chamber_member' => 'required',
        ]);
        $list = new Member;
        $list->chamber_member = $this->chamber_member;
        $list->save();
        $this->resetInputFields();
        $this->alert('success', 'Data created successfully!');
    }



     public function edit($id)
    {
        $post = Member::where('id', $id)->first();
        $this->member_id = $id;
        $this->chamber_member = $post->chamber_member;
        $this->is_update = true;
    }

    public function update()
    {
        $this->validate([
            'chamber_member' => 'required',
        ]);
        $user = Member::find($this->member_id);
        $user->update([
            'chamber_member' => $this->chamber_member,
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
        Member::find($this->deleteId)->delete();
    }
    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';

        $memberList = Member::where(function ($query) use ($searchTerm) {
            $query->where('chamber_member', 'like', '%' .  $searchTerm  . '%');
        })->orderBy('id', 'desc')->paginate(5);
        //dd($industryList );
        return view('livewire.chamber-member', ['memberLists' => $memberList]);
    }
}

