<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Rules\PhoneNumber;

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
        return Validator::make($data, [
            'nickname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'login' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', new PhoneNumber],
            'picture' => ['nullable', 'image'],
            'admin' => 'nullable|in:'.env('ADMIN_PASS'),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $userData = [
            'nickname' => $data['nickname'],
            'email' => $data['email'],
            'login' => $data['login'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'role' => $data['admin'] === env('ADMIN_PASS') ? 'admin' : 'user'
        ];
        if(array_key_exists("picture", $data)) {
            $newPicName = 'user-' . time() . "." . $data["picture"]->extension();
            $data["picture"]->move(public_path('images/users'), $newPicName);
            $pictureArray = ['picture' => "/images/users/$newPicName"];
        }
        // dd($userData);
        return User::create(array_merge(
            $userData,
            $pictureArray ?? ['picture' => "/images/user-default.png"]
        ));
    }
}
