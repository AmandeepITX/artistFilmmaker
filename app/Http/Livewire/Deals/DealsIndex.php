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
    public $search='';
    public $industryId;

    public function mount()
    {
        $this->sortBy = "default";
    }


    // public function filmMakerProfile()
    // {
    //     $filmMakerDetails = User::where('user_type', 'filmMaker')
    //     ->orderBy('id', 'desc')
    //     ->get();
    //     return $filmMakerDetails;
    // }



    public function render()
    {
        // $filmMakers= $this->filmMakerProfile();



        // if(@request()->search && !empty(request()->search)) {
        //     $this->searchTerm = request()->search;
        // }
        // if(@request()->city && !empty(request()->city)) {
        //     $this->searchTerm = request()->city;
        // }

        // if(@request()->industry && !empty(request()->industry)) {
        //     $this->searchIndustry = request()->industry;
        // }


        // $list = Industry::all();

        $showList = User::query();

        if($this->searchTerm){
            $search = $this->searchTerm;
            $showList = $showList->where(function ($query) use ($search) {
				$query->where('name', 'like', '%' . $search . '%');
                $query->orWhere('website', 'like', '%' . $search . '%');
			});
        }

        // if($this->searchIndustry){
        //     $search = $this->searchIndustry;
        //     $showList = $showList->whereHas('industries.industries', function ($query) use ($search) {
		// 		$query->where('industry_name', 'like', '%' . $search . '%');
		// 	});
        // }

        // $industryId = $this->industryId;
        // if ($industryId) {

		// 	$showList = $showList->whereHas('industries', function ($query) use ($industryId) {
		// 		$query->where('industries_id', $industryId);
		// 	});
		// }
        $showList = $showList->where('user_type', 'filmMaker')
                    ->orderBy('id', 'desc')
                    ->get();

// dd($showList);
        // ....................
        // $showList = $showList->with('user')
        // ->whereHas('user', function($q){
        //     $q->where('status', 'approved');
        // })
        // ->get();
            //dd($showList);





        // $showList = CompanyDeals::query();

        // //--------serach filter--------//
        // if($this->searchTerm){
        //     $search = $this->searchTerm;
        //     $showList->whereHas('user', function ($query) use ($search) {
        //         $query->where('city', 'like', '%' . $search . '%')
        //         ->orWhere('f_name', 'like', '%' . $search . '%')
        //         ->orWhere('l_name', 'like', '%' . $search . '%')
        //         ->orWhere('b_name', 'like', '%' . $search . '%')
        //         ->orWhere('username', 'like', '%' . $search . '%');
        //         $query->orWhere('industry', 'like', '%' . $search . '%');

        //     });
        // }

        // //-----------search by dropdown--------//
        // if($this->industryId){
        //     $industryId = $this->industryId;
        //     $showList = $showList->where(function($q) use ($industryId){
        //         $q->where('industry', 'like', '%' . $industryId . '%');
        //     });
        // }

        // // ----------sort filter------------//
        // if ($this->sortBy == 'latest') {
        //     $showList = $showList->orderBy('id', 'desc');
        // } else if ($this->sortBy == 'oldest') {
        //     $showList = $showList->orderBy('id', 'asc');
        // }

        // $showList = $showList->with('user')
        // ->whereHas('user', function($q){
        //     $q->where('status', 'approved');
        // })
        // ->get();
        // return view('livewire.deals.deals-index',['users'=>$list,'lists'=>$showList]);
        return view('livewire.deals.deals-index',['filmMakers' => $showList]);
    }

     /**
     * Write code on Method
     *
     * @return response()
    //  */

}
