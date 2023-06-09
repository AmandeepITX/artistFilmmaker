<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Industry;

class AdminController extends Controller
{

    public function adminDashboard()
    {
        $total_registrations = User::count() - 1;
        // $total_companies =  User::where('user_type', 'company')->count();
        $total_users =  User::where('user_type', 'artist')->count();
        $total_filmmaker = User::where('user_type','filmmaker')->count();
        $total_genre = Genre::get()->count();
        // $category =  Categories::count();
        // $industry =  Industry::count();
        return view('pages.admin.pages.dashboard.dashboard', \compact('total_registrations','total_users','total_filmmaker','total_genre'));
    }

    public function userListing()
    {
        return view('pages.admin.pages.user.index');
    }
    public function companyListing()
    {

        return view('pages.admin.pages.company.index');
    }

    public function categoryListing()
    {
        return view('pages.admin.pages.category.index');
    }

    public function filmmakerListing()
    {
        return view('pages.admin.pages.filmmaker.index');
    }

    public function subcategoryListing($id)
    {
        return view('pages.admin.pages.category.subcategory', compact('id'));
    }

     public function settings()
    {
        return view('pages.admin.pages.settings.index');
    }

    public function industryListing(){
        return view('pages.admin.pages.industry.industry');
    }
    public function chamberMember(){
        return view('pages.admin.pages.member.chamberMember');
    }
    public function stateListing(){
        return view('pages.admin.pages.states.index');
    }
    // public function genreIndex()
    // {
    //     return view('pages.admin.pages.category.genre-index');
    // }
}
