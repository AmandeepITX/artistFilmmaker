<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\CompanyDeals;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\DealSubCategories;
use App\Models\DealCategories;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use App\Mail\NewRegisterMailToAdmin;
use App\Mail\SignUpMail;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Storage;
use NunoMaduro\Collision\Adapters\Phpunit\State;
use Illuminate\Http\Request;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */

    public function create(array $input)
    {

        $this->validationCheck($input);
        if ($input["user_type"] == "filmMaker") {
            if ($input['croplogo'] && !empty($input['croplogo'])) {
                $folderPath = "uploads/filmmaker/";
                $base64Image = explode(";base64,", $input['croplogo']);
                $explodeImage = explode("image/", $base64Image[0]);
                $imageType = $explodeImage[1];
                $image_base64 = base64_decode($base64Image[1]);

                // Generate a unique filename with the original extension
                $filename = uniqid() . '.' . $imageType;

                $file = $filename;
                $filePath = $folderPath . $file;
                $success = file_put_contents($filePath, $image_base64);
                // $companyDeals->logo = $file;
            }
        } else {
            if ($input['croplogo'] && !empty($input['croplogo'])) {
                $folderPath = "uploads/artist/";
                $base64Image = explode(";base64,", $input['croplogo']);
                $explodeImage = explode("image/", $base64Image[0]);
                $imageType = $explodeImage[1];
                $image_base64 = base64_decode($base64Image[1]);

               // Generate a unique filename with the original extension
               $filename = uniqid() . '.' . $imageType;

               $file = $filename;
               $filePath = $folderPath . $file;
               $success = file_put_contents($filePath, $image_base64);
                // $companyDeals->profile_image = $file;

            }
        }

        $user = User::create([
            'user_type' => $input['user_type'],
            'image' => $file,
            'name' => $input['name'],
            'media_url' => $input['media_url'],
            'website' => $input['website'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'bio_info' => $input['bio_info'],

        ]);

        \Mail::to('example@gmail.com')->send(new NewRegisterMailToAdmin($user));

        return $user;
    }
    //     if ($input["user_type"] == "filmMaker") {

    //         // $this->details($input);

    //         // if (@$request->croplogo && !empty($request->croplogo)) {
    //         //     $folderPath = "uploads/filmmaker/image/";
    //         //     $base64Image = explode(";base64,", $request->croplogo);
    //         //     $explodeImage = explode("image/", $base64Image[0]);
    //         //     $imageType = $explodeImage[1];
    //         //     $image_base64 = base64_decode($base64Image[1]);
    //         //     $file = $folderPath . uniqid() . '.' . $imageType;
    //         //     $success = file_put_contents($file, $image_base64);
    //         //     $companyDeals->logo = $file;
    //         // }

    //         $user = User::create([
    //             'user_type' => $input['user_type'],
    //             'image' => $input['image'],
    //             'name' => $input['name'],
    //             'media_url' => $input['media_url'],
    //             'website' => $input['website'],
    //             'email' => $input['email'],
    //             'password' => Hash::make($input['password']),
    //             'bio_info' => $input['bio_info'],

    //         ]);
    //         // \Mail::to('example@gmail.com')->send(new NewRegisterMailToAdmin($user));

    //         return $user;
    //     } else {

    //         $user = User::create([
    //             'user_type' => $input['user_type'],
    //             'image' => $input['image'],
    //             'name' => $input['name'],
    //             'media_url' => $input['media_url'],
    //             'website' => $input['website'],
    //             'email' => $input['email'],
    //             'password' => Hash::make($input['password']),
    //             'bio_info' => $input['bio_info'],

    //         ]);

    //         \Mail::to('example@gmail.com')->send(new NewRegisterMailToAdmin($user));

    //         return $user;
    //     }
    // }

    public function validationCheck(array $input)
    {
        Validator::make(
            $input,
            [
                'name' => ['required', 'max:255'],
                'media_url' => ['required', 'url'],
                'website' => ['required'],
                'image' => ['required'],
                'user_type' => ['required'],
                'email' => [
                    'required', 'string', 'email', 'max:255', Rule::unique(User::class)
                ],
                'password' => 'required',
                'confirm_password' => 'required|same:password',

            ],
            [
                'name.required' => 'Name is Required',
                'media_url.required' => 'Media url is Required',
                'website.required' => 'Website is Required',
                'confirm_password.required' => 'Confirm password required',
                'confirm_password.same' => 'Password and Confirm password must be same',
            ]

        )->validate();
    }


    //    public function generateUniqueCode()
    // {
    //     do {
    //         $code = random_int(1000000, 9999999);
    //     } while (User::where("member_id", "=", $code)->first());

    //     return $code;
    // }


    // public  function sendMail($user)
    // {
    //     return  \Mail::to(env('ADMIN_MAIL'))->send(new NewRegisterMailToAdmin($user));
    // }
}
