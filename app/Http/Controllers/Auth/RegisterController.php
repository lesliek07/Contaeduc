<?php

namespace Contaeduc\Http\Controllers\Auth;

use Contaeduc\Http\Controllers\Controller;
use Contaeduc\User;
use Contaeduc\Role;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/home';

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
            'name'          => 'required|string|max:255',
            'rut'           => 'required|string|max:15|unique:users',
            'especialidad'  => 'required|string|max:255',
            'curso'         => 'required|string|max:10',
            'email'         => 'required|string|email|max:255|unique:users',
            'password'      => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Contaeduc\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name'          => $data['name'],
            'rut'           => $data['rut'],
            'especialidad'  => $data['especialidad'],
            'curso'         => $data['curso'],
            'email'         => $data['email'],
            'password'      => bcrypt($data['password']),
        ]);

        $user
            ->roles()
            ->attach(Role::where('name', 'alumno')->first());
        return $user;
    }
}
