<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Common\CommonController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Livewire\Admin\Genre\GerneList;
use App\Http\Controllers\Profile;
use App\Models\SettingsModel;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     $settings = SettingsModel::first();
//     return view('auth.login', compact('settings'));
// });

//logout
Route::get('/logout', function () {
    auth()->logout();
    return redirect()->route('login');
});

Route::get('/', [CommonController::class, 'home'])->name('home');
Route::get('/member-directory', [CommonController::class, 'disFreSerView'])->name('discounts-free-services');
Route::get('/profilePage',[CommonController::class, 'profilePage'])->name('profilePage');
Route::get('/contact-us', [CommonController::class, 'contactView'])->name('contact-us');
Route::post('/contact-store', [CommonController::class, 'contactStore'])->name('contact-store');
Route::get('/about-ahap', [CommonController::class, 'aboutView'])->name('about-ahap');
Route::get('/legal', [CommonController::class, 'legalView'])->name('legal');
Route::get('/privacy-policy', [CommonController::class, 'privacyPolicyView'])->name('privacy-policy');

Route::get('/signup', [AuthController::class, 'companySignUp'])->name('business-signup');
Route::post('/get-sub-category', [AuthController::class, 'geSubCategory'])->name('get-sub-category');
Route::get('/user-signup', [AuthController::class, 'userSignUp'])->name('user-signup');

Route::middleware(['auth', 'verified'])->group(function () {
    // Admin Panel
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('admin-dashboard');
        Route::get('/user-index', [AdminController::class, 'userListing'])->name('user-index');
        Route::get('/users', [AdminController::class, 'companyListing'])->name('company-index');
        Route::get('/filmmaker', [AdminController::class, 'filmmakerListing'])->name('filmaker-index');
        Route::get('/category-index', [AdminController::class, 'categoryListing'])->name('category-index');
        Route::get('/subcategory-index/{id}', [AdminController::class, 'subcategoryListing'])->name('subcategory-index');
        Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
        Route::get('/genre-index',GerneList::class)->name('genre-index');

        Route::get('/industries', function(){
            return view('pages.admin.pages.industry.index');
        })->name('admin.industry.index');
        Route::get('/chamber-members', function(){
            return view('pages.admin.pages.member.chamberMember');
        })->name('admin.member.index');
        Route::get('/states', function () {
            return view('pages.admin.pages.states.index');
        })->name('admin.states.index');
    });

    // User Panel artist
    Route::group(['middleware' => ['role:artist']], function () {
        Route::get('/artist-profile', [UserController::class, 'userProfile'])->name('user-profile');
        Route::post('/artist-profile-update', [UserController::class, 'userProfileUpdate'])->name('user-profile-update');
        Route::get('/change-user-password', [UserController::class, 'changePassView'])->name('change-user-password');
        Route::post('/update-user-password', [UserController::class, 'changePassUpdate'])->name('update-user-password');
        Route::get('/hero-card', [UserController::class, 'heroCard'])->name('hero-card');
    });


    // Company Panel
    Route::group(['middleware' =>  ['role:filmmaker']], function () {
        Route::get('/filmmaker-profile', [CompanyController::class, 'companyProfile'])->name('company-profile');
        Route::post('/company-profile-update', [CompanyController::class, 'companyProfileUpdate'])->name('company-profile-update');
        Route::get('/change-company-password', [CompanyController::class, 'changePassView'])->name('change-company-password');
        Route::post('/update-company-password', [CompanyController::class, 'changePassUpdate'])->name('update-company-password');
        // Add deals
        Route::post('/add_deal', [CompanyController::class, 'addDeal'])->name('add_deal');
        Route::get('edit-deal/{id}', [CompanyController::class, 'editDeal']);
        Route::post('/update-deal/{id}', [CompanyController::class, 'updateDeal'])->name('update-deal');
        Route::get('/delete_deal/{id}', [CompanyController::class, 'deleteDeal'])->name('delete_deal');
    });


});
