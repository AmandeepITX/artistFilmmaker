<?php

namespace App\Http\Livewire\Deals;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CompanyDeals;
use App\Models\Industry;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class DealsIndex extends Component
{

    use WithPagination;
    public $searchTerm;
    public $searchIndustry;
    public $list;
    public $showList;
    public $sortBy;
    public $search = '';
    public $industryId;

    public function mount()
    {
        $this->sortBy = "default";
    }


    public function render()
    {

        $showList = User::query();

        if ($this->searchTerm) {
            $search = $this->searchTerm;
            $showList = $showList->where(function ($query) use ($search) {
                $query->where('first_name', 'like', '%' . $search . '%');
                $query->orWhere('website', 'like', '%' . $search . '%');
            });
        }


        $showList = $showList->whereNot('user_type', 'admin')
            ->orderBy('id', 'desc')
            ->get();

        // dd($showList);

        return view('livewire.deals.deals-index', ['users' => $showList]);
    }

    /**
     * Write code on Method
     *
     * @return response()
    //  */
}
