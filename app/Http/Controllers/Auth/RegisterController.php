<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Company;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {


        if ($data['hidden'] == "1") {
            return Validator::make($data, [
                'name' => ['required', 'string', 'min:3'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'img' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
                'png' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
                'representive' => ['required', 'string', 'min:3'],
                'brief' => ['required', 'string', 'min:5'],
                // 'pdfFile'=>['file', 'max:2048']

            ]);
        } elseif ($data['hidden'] == "3") {
            return Validator::make($data, [
                'name' => ['required', 'string', 'min:3'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'educational_specialization' => ['required', 'numeric', 'min:8'],
                'phone' => ['required', 'numeric', 'min:8'],
                'education' => ['required', 'string', 'min:3'],

            ]);
        } else {
            return Validator::make($data, [
                'name' => ['required', 'string', 'min:3'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'educational_specialization' => ['required', 'numeric', 'min:8'],
                'phone' => ['required', 'numeric', 'min:8'],
                'education' => ['required', 'string', 'min:3'],
                'img' => ['file', 'mimes:pdf,jpeg,png,jpg,gif,svg', 'max:2048'],
            ]);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $qr_code = time() . rand();
        $Spli = str_split($qr_code, 4);
        $qe_code_finsh = $Spli[2];


        if ($data['hidden'] == "1") {
            $status = "company";
        } elseif ($data['hidden'] == "3") {
            $status = "vistore";
        } else {

            $status = "Jop_serach";
        }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'qr_code' => $qe_code_finsh,
            'password' => Hash::make($data['password']),
            'status' => $status,
        ]);
    }
    public function showRegistrationForm(Request $request)
    {

        if ($request->id == 1) {

            return view('company');
        } elseif ($request->id == 2) {

            return view('registerjob');
        }
    }
}
