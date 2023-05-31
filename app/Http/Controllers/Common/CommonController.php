<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Auth;
use App\Models\ContactUs;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\SettingsModel;
use App\Models\CompanyDeals;
use App\Models\Industry;
use App\Models\User;


class CommonController extends Controller
{

    public function contactStore(Request $request)
    {
        // $banned = array("Whore", "Hoe", "Slut", "Bitch", "Retarded", "Prostitut", "Wetback", "Nigga", "Nigger", "Niger", "Nigg", "Blackface", "Coon", "Fuk", "Fuck", "Democrat", "Republican", "Pussy", "Dick", "Vagina", "Penis", "Lesbian", "Gay", "Sex", "Gender", "Dumb", "Stupid");
        $request->validate(
            [
                'f_name' => 'required|max:100',
                'l_name' => 'required|max:100',
                'b_name' => 'required',
                'business_website' => 'required',
                'business_location' => 'required',
                'industryname' => 'required',
                'biggest' => 'required',

            ],
            [
                'f_name.required' => 'The first name field is required.',
                'l_name.required' => 'The last name field is required.',
                'b_name.required' => 'The business name field is required.',
                'business_website.required' => 'The business website field is required.',
                'business_location.required' => 'The business location field is required.',
                'industryname.required' => 'The industry field is required.',
                'biggest.required' => 'The biggest field is required.',
            ]
        );

        $contact = new ContactUs;
        $contact->f_name = $request->f_name;
        $contact->l_name = $request->l_name;
        $contact->b_name = $request->b_name;
        $contact->business_website = $request->business_website;
        $contact->business_location = $request->business_location;
        $contact->industry = @implode(',', $request->industryname);
        $contact->biggest = @implode(',', $request->biggest);
        $contact->save();

        $adminMail= env('ADMIN_MAIL');
        \Mail::to($adminMail)->send(new ContactMessage($contact));

        Alert::success('Success', 'Your Response Send Successfully');
        return back();
        // info@theahap.com

    }

    // public function home()
    // {
    //     $settings = SettingsModel::first();
    //     // $showList = CompanyDeals::whereHas('user', function($q){
    //     //     $q->where('status', 'approved');
    //     // })->limit(10)->orderBy('id', 'DESC')->get();
    //     $users = User::where('status', 'approved')
    //         ->where('user_type', 'company')
    //         ->limit(10)
    //         ->orderBy('id', 'DESC')
    //         ->get();;
    //     return view('pages.common.home', ['settings'=>$settings, 'users'=> $users]);
    // }
    public function home()
    {
        return view('auth.login');
    }


    public function disFreSerView()
    {
        // if(Auth::check()){
        //     $settings = SettingsModel::first();
        //     return view('pages.common.dis-fre-ser', \compact('settings'));
        // }
        // else
        // {
        //    return redirect()->route('login');
        // }
        return view('pages.common.dis-fre-ser');
    }

    public function contactView()
    {
    //   $settings = SettingsModel::first();
    //   $industryName =Industry::all();
    //     return view('pages.common.contact-us', \compact('settings','industryName'));

        return view('pages.common.contact-us');
    }

    public function aboutView()
    {
      $settings = SettingsModel::first();
        return view('pages.common.about-ahap', \compact('settings'));
    }

    public function legalView()
    {
        $settings = SettingsModel::first();
        return view('pages.common.legal', \compact('settings'));
    }
    public function privacyPolicyView()
    {
         $settings = SettingsModel::first();
        return view('pages.common.privacy_policy', \compact('settings'));
    }
    public function profilePage(){
        return view ('pages.common.profilePage');
    }
}
