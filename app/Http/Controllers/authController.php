<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerRequest;
use App\Http\Requests\accessRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class authController extends Controller
{
    // AUTH VIEWS --------------------------------------------------------
    public function login()
    {
        if (session('login'))
        {
            if (session('usuario')->rol=='administrador')
            {
                return to_route('adminHome');
            }
            else
            {
                return to_route('userHome');
            }
        }
        else
        {
            return view('auth.login');
        }
    }

    public function register()
    {
        if (session('login'))
        {
            if (session('usuario')->rol=='administrador')
            {
                return to_route('adminHome');
            }
            else
            {
                return to_route('userHome');
            }
        }
        else
        {
            return view('auth.register');
        }
    }

    public function logout()
    {
        session()->forget(['login', 'usuario']);
        return to_route('login');
    }

    // AUTH QUERIES ------------------------------------------------------
    public function access(accessRequest $request)
    {
        $usuario = DB::table('usuarios')
        ->where('email', $request->input('txtEmail'))
        ->first();

        if ($usuario && Hash::check($request->input('txtPassword'), $usuario->password))
        {
            if ($usuario->rol=='administrador')
            {
                session()->put('usuario', $usuario);
                session()->put('login', true);
                return to_route('adminHome');
            }
            else
            {
                session()->put('usuario', $usuario);
                session()->put('login', true);
                return to_route('userHome');
            }
        }
        else
        {
            session()->flash('error', 'Credenciales incorrectas. Inténtalo de nuevo.');
            return to_route('login');
        }
    }

    public function registerUser(registerRequest $request)
    {
        DB::table('usuarios')->insert
        ([
            'nombre' => $request->input('txtNombre'),
            'email' => $request->input('txtEmail'),
            'password' => Hash::make($request->input('txtPassword')),
            'ciudad' => $request->input('txtCiudad'),
            'rol' => 'usuario',
            'estado' => 'activo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        session()->flash('message', 'Cuenta creada exitosamente. ¡Inicia sesión para continuar!');
        return to_route('login');
    }
}
