<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Member;
use App\Models\state;
use App\Models\SubCategories;
use App\Models\SettingsModel;

class AuthController extends Controller
{
    public function companySignUp(){
        // $catSubCat = Categories::with('subcategories')->get();
        // $categories = Categories::get();
        // $settings=SettingsModel::first();
        $categories = Member::all();
        $state = State::all();
        // dd($state );
        return view('auth.register.company', \compact('categories','state'));
    }

    public function geSubCategory(Request $request){

        if(!empty($request->category_id) ){
            $subcategories = SubCategories::whereIn('category_id', $request->category_id)->get();
        }else{
            $subcategories = SubCategories::all();    
        }
        // $subcategories = SubCategories::where(['category_id' => $request->category_id])->get();
         
        return response()->json(['data' => $subcategories]);
    }

    public function userSignUp(){
       $settings = SettingsModel::first();
       return view('auth.register.user', \compact('settings'));
    }
}
