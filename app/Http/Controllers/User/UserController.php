<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Models\SettingsModel;
use App\Models\state;
use App\Models\UserProfile;

class UserController extends Controller
{

    public function profilePage()
    {
        return view('ad');
    }
    public function userProfile()
    {
        $user = User::find(Auth::user()->id);
        $genres = Genre::get();
        $state = State::all();
        $selectedGenres = isset($user->userProfile['genres_id']) ? json_decode($user->userProfile['genres_id']) : [];

        return view('pages.user.user_profile', \compact('user', 'state','genres', 'selectedGenres'));
    }

    public function changePassView()
    {
        $user = User::where('id', Auth::user()->id);
        return view('pages.user.password_change', \compact('user'));
    }

    public function changePassUpdate(Request $request)
    {
        $request->validate([
            'current_password' => 'required|min:8',
            'password' => 'required|min:8',

        ]);

        $hashedPassword = Auth::user()->password;
        if (\Hash::check($request->current_password, $hashedPassword)) {

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


    public function userProfileUpdate(Request $request)
    {
        // dd($request);
        $request->validate(
            [
                'first_name' => 'required|max:100',
                'last_name' => 'required|max:100',
                'website' => 'required|url',
                'facebook_link' => 'nullable|url',
                'youtube_link' => 'nullable|url',
                'instagram_link' => 'nullable|url',
                'twitter_link' => 'nullable|url',
                'city' => 'required',
                'zip_code' => 'required',
                // 'state' => 'required',
            ],
            [
                'first_name.required' => 'The first name field is required.',
                'last_name.required' => 'The last name field is required.',
            ]
        );


        $user = Auth::user();
        $user_id = $user->id;
        $user = User::find($user_id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->website = $request->website;
        $user->save();

        $userProfile = UserProfile::where(['user_id' => $user->id])->first();
        if ($userProfile) {
            $userProfile->city = $request->city;
            $userProfile->state = $request->state;
            $userProfile->zip_code = $request->zip_code;
            $userProfile->bio_info = $request->bio_info;
            $userProfile->seekin_filmmaker = $request->seekin_filmmaker;
            $userProfile->facebook_link = $request->facebook_link;
            $userProfile->twitter_link = $request->twitter_link;
            $userProfile->instagram_link = $request->instagram_link;
            $userProfile->youtube_link = $request->youtube_link;
            $userProfile['genres_id'] = json_encode($request->genres_id);

            if ($request->hasfile('image')) {

                    $file = $request->file('image');

                    $path = 'uploads/artist/';

                    if (!is_dir($path)) {
                        mkdir($path, 0775, true);
                        chown($path, exec('whoami'));
                    }

                    $new_file = auth()->user()->id . uniqid(time()) . '.' . $file->getClientOriginalExtension();
                    $file->move($path, $new_file);



                    $userProfile->image = $new_file;
                }


            $userProfile->save();
        } else {

            $userProfile = new UserProfile;
            $userProfile->user_id = $user->id;
            $userProfile->city = $request->city;
            $userProfile->state = $request->state;
            $userProfile->zip_code = $request->zip_code;
            $userProfile->bio_info = $request->bio_info;
            $userProfile->seekin_filmmaker = $request->seekin_filmmaker;
            $userProfile->facebook_link = $request->facebook_link;
            $userProfile->twitter_link = $request->twitter_link;
            $userProfile->instagram_link = $request->instagram_link;
            $userProfile->youtube_link = $request->youtube_link;
            $userProfile['genres_id'] = json_encode($request->genres_id);

            if ($request->hasfile('image')) {

                $file = $request->file('image');

                $path = 'uploads/artist/';

                if (!is_dir($path)) {
                    mkdir($path, 0775, true);
                    chown($path, exec('whoami'));
                }

                $new_file = auth()->user()->id . uniqid(time()) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $new_file);



                $userProfile->image = $new_file;
            }

            $userProfile->save();
        }


        // $user = User::where('id', Auth::user()->id)->first();

        // if ($request->hasfile('image')) {

        //     $file = $request->file('image');

        //     $path = 'uploads/artist/';

        //     if (!is_dir($path)) {
        //         mkdir($path, 0775, true);
        //         chown($path, exec('whoami'));
        //     }

        //     $new_file = auth()->user()->id . uniqid(time()) . '.' . $file->getClientOriginalExtension();
        //     $file->move($path, $new_file);



        //     $user->image = $new_file;
        // }

        // if ($request->hasfile('headshot_card')) {

        //     $file = $request->file('headshot_card');

        //     $path = 'uploads/user/headshot_card/';
        //     if (!is_dir($path)) {
        //         mkdir($path, 0775, true);
        //         chown($path, exec('whoami'));
        //     }

        //     $new_file = auth()->user()->id . uniqid(time()) . '.' . $file->getClientOriginalExtension();
        //     $file->move($path, $new_file);

        //     $user->headshot_card = $new_file;
        // }

        //  if ($request->service_from == null && $request->service_to == null) {
        //     $user->service_status = "active";
        // } else {
        //     $user->service_status = "inactive";
        //     $user->service_from = $request->service_from;
        //     $user->service_to = $request->service_to;
        // }


        // $user->f_name = $request->f_name;
        // $user->l_name = $request->l_name;
        // $user->email = $request->email;
        // $user->phone = $request->phone;
        // $user->city = $request->city;
        // $user->state = $request->state;
        // $user->zip_code = $request->zip_code;
        // $user->service = $request->service;
        // $user->personalization = $request->personalization;




        // if (@$request->profileCroplogo && !empty($request->profileCroplogo)) {
        //     // dd('new');
        //     $folderPath = "uploads/filmmaker/";
        //     $base64Image = explode(";base64,", $request->profileCroplogo);
        //     $explodeImage = explode("image/", $base64Image[0]);
        //     $imageType = $explodeImage[1];
        //     $image_base64 = base64_decode($base64Image[1]);
        //     $file = $folderPath . uniqid() . '.' . $imageType;
        //     $success = file_put_contents($file, $image_base64);
        //     // $companyDeals->profile_image = $file;
        // }


        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->website = $request->website;
        // $user->media_url = $request->media_url;
        // $user->bio_info = $request->bio_info;

        // $user->save();


        if ($user) {
            Alert::success('Success', 'Profile updated successfully');
            return back();
        } else {
            Alert::error('Failed', 'Profile updated failed');
            return back();
        }
    }

    public function heroCard()
    {
        $users = User::find(Auth::user()->id);
        return view('pages.user.hero_card', \compact('users'));
    }
}
