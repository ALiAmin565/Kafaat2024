<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComController;
use App\Http\Controllers\Admin\Company_Event;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\SectionOneController;
use App\Http\Controllers\Admin\SectionPdfController;
use App\Http\Controllers\Admin\SectionTwoController;
use App\Http\Controllers\Admin\LogoCompanyController;
use App\Http\Controllers\Admin\SectionThreeController;
use App\Http\Controllers\Admin\User_vistoreController;
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
Route::middleware(['auth', 'Super_Admin'])->group(function () {
    
    // for jopserch login/////////////////////////////////
    Route::get('user_serach',[LoginController::class,'index'])->name('user_serach');
     Route::get('user_serach_edit/{id}',[LoginController::class,'edit'])->name('user_serach_edit');
     Route::get('user_serach_show/{id}',[LoginController::class,'show'])->name('user_serach_show');
    Route::post('user_serach_update/{id}',[LoginController::class,'update'])->name('user_serach_update');
    Route::post('user_serach_delete/{id}',[LoginController::class,'destroy'])->name('user_serach_delete');

// /////////////////////////////////////////for vistore login 
    Route::get('user_vistore',[User_vistoreController::class,'index'])->name('user_vistore');
      Route::get('user_vistore_show/{id}',[User_vistoreController::class,'show'])->name('user_vistore_show');
    Route::get('user_vistore_edit/{id}',[User_vistoreController::class,'edit'])->name('user_vistore_edit');
    Route::post('user_vistore_update/{id}',[User_vistoreController::class,'update'])->name('user_vistore_update');
    Route::post('user_vistore_delete/{id}',[User_vistoreController::class,'destroy'])->name('user_vistore_delete');

    
    
    
    
    



Route::get('/', function () {
    return view('Dashbord.index');
})->name('Admin_Home');



Route::get('table', function () {
    return view('Dashbord.Event.index');
});


Route::get('company_event',[Company_Event::class,'index'])->name('company_event');


Route::post('geet',[Company_Event::class,'geet'])->name('geet');


 /////////////////هات كل الشركات اللي ف الافينت//////////////////////
 Route::get('subscrip_event/{id}',[Company_Event::class,'subscrip_event'])->name('subscrip_event');

 Route::post('delete_subscrip',[Company_Event::class,'delete_subscrip'])->name('delete_subscrip');
/////////////////هات كل الشركات اللي ف الافينت//////////////////////



Route::resource('Company',CompanyController::class);
Route::resource('event',EventController::class);
Route::resource('user',UserController::class);
Route::resource('email',EmailController::class);
 
Route::resource('sectionone',SectionOneController::class);
Route::resource('sectiontwo',SectionTwoController::class);
Route::resource('sectionthree',SectionThreeController::class);
Route::resource('logo',LogoCompanyController::class);
Route::resource('setting',QuestionController::class);
Route::resource('pdf',SectionPdfController::class);
Route::get('pdfdownload/{file}',[SectionPdfController::class,'download'])->name('pdfdownload');
Route::get('pdfview/{id}',[SectionPdfController::class,'preview'])->name('pdfview');





Route::get('Company_abrove',[ComController::class,'abrove']);
Route::get('Company_abrove_show/{id}',[ComController::class,'abrove_show'])
->name('abrove_show');
Route::post('abrove_update/{id}',[ComController::class,'abrove_update'])
->name('abrove_update');
Route::post('abrove_destroy/{id}',[ComController::class,'abrove_destroy'])
->name('abrove_destroy');

Route::post('ahmed/{id}',[ComController::class,'ahmed'])->name('ahmed');


Route::get('update_subscrip/{id}',[ComController::class,'update_subscrip'])->name('update_subscrip');

Route::post('edite_subscrip/{id}',[ComController::class,'edite_subscrip'])->name('edite_subscrip');


Route::get('/create', [QualificationSpecializationController::class, 'create']);
Route::post('/store', [QualificationSpecializationController::class, 'store']);
Route::get('/show', [QualificationSpecializationController::class, 'show'])->name('qualifications.index');
Route::delete('/qualifications/{qualification}', [QualificationSpecializationController::class, 'destroy'])->name('qualifications.destroy');
Route::put('/qualifications/{qualification}', [QualificationSpecializationController::class, 'update'])->name('qualifications.update');


});