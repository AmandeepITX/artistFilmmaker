<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\SubCategories;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CompanyDeals;
use App\Models\UsersIndustry;
use App\Models\DealSubCategories;
use App\Models\DealCategories;
use App\Models\state;
use App\Models\Industry;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Response;
use App\Models\SettingsModel;
use App\Models\UserProfile;
use NunoMaduro\Collision\Adapters\Phpunit\State as PhpunitState;;

use App\Models\Genre;

class CompanyController extends Controller
{
    public function profilePage()
    {
        return view('pages.admin.pages.profilePage.blade.php.businessProfile');
    }
    public function companyProfile()
    {
        $user_id = Auth::user()->id;
        $user = User::where('id', $user_id)->first();
        $selectedGenres = isset($user->userProfile['genres_id']) ? json_decode($user->userProfile['genres_id']) : [];

        $genres = Genre::all();
        $state = State::all();
        return view('pages.company.company_profile', \compact('user', 'state', 'genres', 'selectedGenres'));
    }

    public function changePassView()
    {
        return view('pages.company.password_change');
    }

    public function changePassUpdate(Request $request)
    {
        $request->validate([
            'current_password' => 'required|min:8',
            'password' => 'required|min:8',

        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->current_password, $hashedPassword)) {

            $password = Hash::make($request->password);
            User::updateOrCreate(['id' => Auth::user()->id], [

                'password' =>  $password
            ]);
            Alert::success('Success', 'password updated successfully');
            return back();
        } else {
            Alert::error('Failed', 'current password doesnt matched');
            return back();
        }
    }
    public function addDeal(Request $request)
    {
        // dd($request);
        $request->validate(
            [
                'first_name' => 'required|max:100',
                'last_name' => 'required|max:100',
                // 'website' => 'required|url',
                'facebook_link' => 'nullable',
                'youtube_link' => 'nullable',
                'instagram_link' => 'nullable',
                'twitter_link' => 'nullable',
                'city' => 'required',
                'zip_code' => 'required',
                'available_to_film' => 'required',
                'genres_id' => 'required',
                'state' => 'required',
            ],
            [
                'first_name.required' => 'The first name field is required.',
                'last_name.required' => 'The last name field is required.',
            ]
        );

        $file = null;


        // $user->image = $file;

        $user = Auth::user();
        $user_id = $user->id;
        $user = User::find($user_id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->website = $request->website;
        $user->save();

        $userProfile = UserProfile::where(['user_id' => $user->id])->first();
        if ($userProfile) {
            $userProfile['genres_id'] = json_encode($request->genres_id);
            $userProfile->city = $request->city;
            $userProfile->state = $request->state;
            $userProfile->zip_code = $request->zip_code;
            $userProfile->bio_info = $request->bio_info;
            $userProfile->available_to_film = $request->available_to_film;
            $userProfile->facebook_link = $request->facebook_link;
            $userProfile->twitter_link = $request->twitter_link;
            $userProfile->instagram_link = $request->instagram_link;
            $userProfile->youtube_link = $request->youtube_link;

            if (@$request->profileCroplogo && !empty($request->profileCroplogo)) {
                $folderPath = "uploads/filmmaker/";
                $base64Image = explode(";base64,", $request->profileCroplogo);
                $explodeImage = explode("image/", $base64Image[0]);
                $imageType = $explodeImage[1];
                $image_base64 = base64_decode($base64Image[1]);
                $filename = uniqid() . '.' . $imageType;

                $file = $filename;
                $filePath = $folderPath . $file;
                $success = file_put_contents($filePath, $image_base64);
                $userProfile->image = $file;
            } else {
                // No new image provided, retain the previous image
                $userProfile->image = $user->userProfile->image;
            }



            $userProfile->save();
        } else {

            $userProfile = new UserProfile;
            $userProfile->user_id = $user->id;
            $userProfile['genres_id'] = json_encode($request->genres_id);
            $userProfile->city = $request->city;
            $userProfile->state = $request->state;
            $userProfile->zip_code = $request->zip_code;
            $userProfile->bio_info = $request->bio_info;
            $userProfile->available_to_film = $request->available_to_film;
            $userProfile->facebook_link = $request->facebook_link;
            $userProfile->twitter_link = $request->twitter_link;
            $userProfile->instagram_link = $request->instagram_link;
            $userProfile->youtube_link = $request->youtube_link;

            if (@$request->profileCroplogo && !empty($request->profileCroplogo)) {
                $folderPath = "uploads/filmmaker/";
                $base64Image = explode(";base64,", $request->profileCroplogo);
                $explodeImage = explode("image/", $base64Image[0]);
                $imageType = $explodeImage[1];
                $image_base64 = base64_decode($base64Image[1]);
                $filename = uniqid() . '.' . $imageType;

                $file = $filename;
                $filePath = $folderPath . $file;
                $success = file_put_contents($filePath, $image_base64);
            }
            $userProfile->image = $file;

            $userProfile->save();
        }

        //

        // $companyDeals = new CompanyDeals;
        // $profile = CompanyDeals::where(['user_id' => $user->id])->first();
        // if ($profile) {
        //     $companyDeals->id = $profile->id;
        //     $companyDeals->exists = true;
        // }

        // // ....

        // if (@$request->croplogo && !empty(@$request->croplogo)) {
        //     // dd('not used now');
        //     $folderPath = "uploads/filmmaker/";
        //     $base64Image = explode(";base64,", @$request->croplogo);
        //     $explodeImage = explode("image/", $base64Image[0]);
        //     $imageType = $explodeImage[1];
        //     $image_base64 = base64_decode($base64Image[1]);

        //     // Generate a unique filename with the original extension
        //     $filename = uniqid() . '.' . $imageType;

        //     $file = $folderPath . $filename;
        //     $success = file_put_contents($file, $image_base64);
        //     $companyDeals->logo = $file;
        // }
        // // .....



        // $companyDeals->user_id = $user->id;
        // // $companyDeals->description = $request->description;
        // // $companyDeals->industry = @implode(',', $request->industryname);
        // $companyDeals->website_address = $request->website_address;
        // $companyDeals->facebook_link = $request->facebook_link;
        // $companyDeals->twitter_link = $request->twitter_link;
        // $companyDeals->linkedin_link = $request->linkedin_link;
        // $companyDeals->instagram_link = $request->instagram_link;

        // $companyDeals->save();

        // if ($request->industryname) {

        //     $industoryArray = [];
        //     foreach ($request->industryname as $industory) {
        //         array_push($industoryArray, $industory);
        //         $store = new UsersIndustry;
        //         $checkUserIndustry = UsersIndustry::where('users_id', $user->id)->where('industries_id', $industory)->first();
        //         if ($checkUserIndustry) {
        //             $store->id = $checkUserIndustry->id;
        //             $store->exists = true;
        //         }
        //         $store->users_id = $user->id;
        //         $store->industries_id = $industory;
        //         $store->save();
        //     }
        //     $deleteIds = UsersIndustry::where('users_id', $user->id)
        //         ->whereNotIn('industries_id', $industoryArray)
        //         ->get();
        //     if (count($deleteIds) > 0) {
        //         foreach ($deleteIds as $ids) {
        //             $ids->delete();
        //         }
        //     }
        // }
        Alert::success('Success', 'Profile Updated Successfully.');
        return back();
    }
}
