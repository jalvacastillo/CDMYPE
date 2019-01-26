<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\Consultores\Consultor;
use App\Models\Alumnos\Alumno;
use App\Models\Empresas\Empresa;
use App\Models\Empresas\Empresario;
use App\Models\Empresas\EmpresaEmpresario;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/cuenta';

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
            'name' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'tipo' => $data['tipo'],
            'password' => bcrypt($data['password'])
        ]);

        if ($data['tipo'] == 'Consultor') {
            Consultor::create(['nombre'=>$data['name'], 'correo' => $data['email'], 'usuario_id' => $user->id]);
        }
        if ($data['tipo'] == 'Estudiante') {
            Alumno::create(['nombre'=>$data['name'], 'correo' => $data['email'], 'usuario_id' => $user->id]);
        }
        if ($data['tipo'] == 'Empresario') {
            $empresario = new Empresario;
            $empresario->usuario_id = $user->id;
            $empresario->nombre = $user->name;
            $empresario->correo = $user->email;
            $empresario->save();
        }

        return $user;
    }
}
