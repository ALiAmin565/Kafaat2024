<?php

use App\Models\User;
use App\Models\Company;
use App\Models\Question;
use App\Models\JopSearch;
use App\Models\SectionPdf;
use App\Models\Section_one;
use App\Models\Section_two;
use App\Models\Logo_company;
use App\Models\User_company;
use App\Models\Qualification;
use App\Models\Section_three;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\SpecialistRoleController;
use App\Http\Controllers\QualificationSpecializationController;

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
// Home route

Route::get('/', [FrontController::class, 'index'])->name('home_page');



Route::middleware(['auth'])->group(function () {
    Route::view('ahmed', 'singleUser');
    Route::post('user_show/{id}', [FrontController::class, 'user_show'])->name('user_show');
    Route::post('user_update', [FrontController::class, 'user_update'])->name('user_update');
});

Route::view('ahmed2', 'img');

Route::get('/applicants', function () {
    $files = SectionPdf::get();
    return view('applicants', ['files' => $files]);
})->name('applicants');

Route::get('/single', function () {
    return view('singleComp');
});
Route::get('/error', function () {
    return view('errorpage');
});

Route::view('Register_Compony', 'Front.Login.company');
Route::get('/Jop_Search', function () {
    $qualifications = Qualification::all();
    return view('Front.Login.Jop_Search', compact('qualifications'));
});
Route::view('Vistore', 'Front.Login.vistore');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/co', function () {
    return view('Dashboardsinglecompany');
});


Route::get('/jo', function () {
    return view('Dashboardsinglejob');
});





//  Route::resource('get_company',CompanyController::class);
Route::get('get_company/{id}', [CompanyController::class, 'show'])
    ->name('get_company.show');
Route::middleware(['auth'])->group(function () {
    Route::post('get_company_update', [CompanyController::class, 'update'])
        ->name('get_company_update');
    Route::post('get_company_delete', [CompanyController::class, 'delete'])
        ->name('get_company_delete');
});
// foooter
Route::get('footer', [FrontController::class, 'footer'])
    ->name('footer');
// foooter
// Route::get('i/{id}', [CompanyController::class, 'dashboard'])->name('dashboardCompany');

Route::post("UpdateCompany/{id}", [CompanyController::class, 'NewUpdate'])->name('NewUpdate');
// Route::get("/search",[CompanyController::class,'search']);
Route::get('/i', function () {
    $id = Auth::user()->id;
    $company = User::find($id);
    $specialists = $company->specialistRoles; 
    $company = Company::where('user_id', $id)->first();
    $User_companys = User_company::where('company_id', $company->id)->get();

    return view('i', compact('company', 'User_companys', 'specialists'));
})->name('dashboardCompany');

Route::get('search', [CompanyController::class, 'search']);


Route::get("UpdateDash/{id}", [CompanyController::class, 'UpdateDash'])->name('UpdateDash');

Route::get('/specializations-for-qualification/{qualificationId}', [QualificationSpecializationController::class, 'getSpecializationsForQualification']);

Route::post('/store-specialist-roles/{id}', [SpecialistRoleController::class, 'store'])->name('store_specialist_roles');

// Update the specified specialist by ID
Route::put('/specialists/{specialistId}', [SpecialistRoleController::class, 'update'])->name('specialist.update');

// Delete the specified specialist by ID
Route::delete('/specialists/{specialistId}', [SpecialistRoleController::class, 'destroy'])->name('specialist.destroy');