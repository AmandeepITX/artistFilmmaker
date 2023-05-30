<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\state;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class Statelisting extends Component
{
   
    
   
        use WithPagination;
        
        use LivewireAlert;
        protected $paginationTheme = 'bootstrap';
        public $list, $state_name, $post, $user, $validate, $deleteId = '';
        public $is_update = false;
        public $searchTerm;
        public $stateList;
    
    
    
        public function resetInputFields()
        {
            $this->state_name = '';
        }
        public function store()
        {
            
            $this->validate([
                'state_name' => 'required',
            ]);
            $list = new state;
            $list->state_name = $this->state_name;
            $list->save();
            $this->resetInputFields();
            $this->alert('success', 'Data created successfully!');
        }
    
    
        public function edit($id)
        {
            $post = state::where('id', $id)->first();
            $this->industry_id = $id;
            $this->state_name = $post->state_name;
            $this->is_update = true;
        }
    
        public function update()
        {
            $this->validate([
                'state_name' => 'required',
            ]);
            $user = state::find($this->industry_id);
            $user->update([
                'state_name' => $this->state_name,
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
            state::find($this->deleteId)->delete();
        }
        public function render()
        {
            $searchTerm = '%' . $this->searchTerm . '%';
    
            $stateList = state::where(function ($query) use ($searchTerm) {
                $query->where('state_name', 'like', '%' .  $searchTerm  . '%');
            })->orderBy('id', 'desc')->paginate(5);
            //dd($industryList );
            return view('livewire.statelisting', ['stateLists' => $stateList]);
        }
         
}
