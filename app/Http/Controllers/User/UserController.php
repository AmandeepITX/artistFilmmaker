<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Models\SettingsModel;


class UserController extends Controller
{

    public function profilePage(){
        return view('ad');
    }
    public function userProfile()
    {
        $user = User::find(Auth::user()->id);
        $settings=SettingsModel::first();
        return view('pages.user.user_profile', \compact('user','settings'));
    }

    public function changePassView()
    {
        $user = User::where('id', Auth::user()->id);
        $settings=SettingsModel::first();
        return view('pages.user.password_change', \compact('user','settings'));
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
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => [
                    'required', 'string', 'email', 'max:255'
                ],
                'website' => ['required', 'url'],
                'media_url' => ['required', 'url'],
            ],
            [

                'name.required' => 'First name is Required',
                'website.required' => 'Website is Required',
                'media_url.required' => 'Media URl is Required',

            ]
        );

        $user = User::where('id', Auth::user()->id)->first();

        if ($request->hasfile('image')) {

            $file = $request->file('image');

            $path = 'uploads/artist/';

            if (!is_dir($path)) {
                mkdir($path, 0775, true);
                chown($path, exec('whoami'));
            }

            $new_file = auth()->user()->id . uniqid(time()) . '.' . $file->getClientOriginalExtension();
            $file->move($path, $new_file);



            $user->image = $new_file;
        }

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




        if (@$request->profileCroplogo && !empty($request->profileCroplogo)) {
            // dd('new');
            $folderPath = "uploads/filmmaker/";
            $base64Image = explode(";base64,", $request->profileCroplogo);
            $explodeImage = explode("image/", $base64Image[0]);
            $imageType = $explodeImage[1];
            $image_base64 = base64_decode($base64Image[1]);
            $file = $folderPath . uniqid() . '.' . $imageType;
            $success = file_put_contents($file, $image_base64);
            // $companyDeals->profile_image = $file;
        }


        $user->name = $request->name;
        $user->email = $request->email;
        $user->website = $request->website;
        $user->media_url = $request->media_url;
        $user->bio_info = $request->bio_info;

        $user->save();


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
       $settings=SettingsModel::first();
        $users = User::find(Auth::user()->id);
        return view('pages.user.hero_card', \compact('users','settings'));
    }
}
