<?php

namespace App\Http\Livewire\Deals;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CompanyDeals;
use App\Models\Genre;
use App\Models\Industry;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;
use App\Models\UserProfile;

class DealsIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $searchTerm;
    public $searchGenre;
    public $searchUserType;
    public $searchIndustry;
    public $list;
    public $showList;
    public $sortBy;
    public $search = '';
    public $industryId, $zip_code, $city;
    public $user_type;


    public function mount()
    {
        $this->sortBy = "default";
    }


    public function render()
    {
        $genreTypes = Genre::all();


        $showList = User::query();

        if($this->searchGenre){
            $genre = $this->searchGenre;

            $showList = $showList->whereHas('userProfile', function ($query) use ($genre) {
                $query->whereRaw("JSON_CONTAINS(genres_id, ?)", ['"' . $genre . '"']);
            });
        }

        if($this->searchUserType){
            $search =$this->searchUserType;
            $showList = $showList->where(function ($query) use ($search) {
                $query->where('user_type', 'like', '%' . $search . '%');

            });
        }

        if ($this->searchTerm) {
            $search = $this->searchTerm;
            $showList = $showList->where(function ($query) use ($search) {
                $query->where('first_name', 'like', '%' . $search . '%')
                    ->orWhere('user_type', 'like', '%' . $search . '%')
                    ->orWhereHas('userProfile', function ($query) use ($search) {
                        $query->where('city', 'like', '%' . $search . '%')
                            ->orWhere('zip_code', 'like', '%' . $search . '%');
                    });
            });
        }

        $showList = $showList->whereNot('user_type', 'admin')
            ->latest()
            ->paginate(8);

        return view('livewire.deals.deals-index', ['users' => $showList, 'genreTypes' => $genreTypes]);
    }

    /**
     * Write code on Method
     *
     * @return response()
    //  */
}
