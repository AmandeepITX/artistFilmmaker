<?php

namespace App\Http\Livewire\Company;

use Livewire\Component;
use App\Models\CompanyDeals;
use App\Models\Categories;

use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;


use Livewire\WithFileUploads;

class CompanyData extends Component
{
    use WithPagination;
    use WithFileUploads;


    public $searchTerm;
    public $deleteId = '';

    public function render()
    {
        $deals = CompanyDeals::with(['user' => function ($q) {
            $q->where('user_type', '=', 'company');
            $q->where('status', '=', 'approved');
        }])->orderBy('id', 'desc')->paginate(10);


        $searchTerm = '%' . $this->searchTerm . '%';

        $categories = Categories::get();
        $company_datas = CompanyDeals::with('category')->where('user_id', Auth::user()->id)->where(function ($query) use ($searchTerm) {
            $query->where('discount', 'like', '%' .  $searchTerm  . '%');
            $query->orWhere('deal_type', 'like', '%' .  $searchTerm . '%');
            $query->orWhere('description', 'like', '%' .  $searchTerm . '%');
            $query->orWhere('deal_type', 'like', '%' .  $searchTerm . '%');
        })->orderBy('id', 'desc')->paginate(10);
        return view('livewire.company.company-data', \compact('company_datas', 'categories'));
    }

    private function clearForm()
    {
        $this->discount = '';
        $this->description = '';
        $this->deal_type = '';
        $this->logo = '';
        $this->img = '';
        $this->category_id = '';
    }

  

    public function edit($id)
    {
        $user = CompanyDeals::where('id', $id)->first();

        $this->is_update = true;
        $this->user_id = $id;
        $this->discount = $user->discount;
        $this->description = $user->description;
        $this->deal_type = $user->deal_type;
        $this->category_id = $user->category_id;
        $this->logo = $user->logo;
    }

    public function cancel()
    {
        $this->clearForm();
    }


    public function deleteId($id)
    {
       
        $this->deleteId = $id;
    }

    public function delete()
    {
        
        CompanyDeals::find($this->deleteId)->delete();

        session()->flash('message', 'Deal Deleted Successfully.');
    }
}
