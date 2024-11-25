<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = DB::table('usuarios')->get();
        return view('admin.user-list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(registerRequest $request)
    {
        DB::table('usuarios')->insert
        ([
            'nombre' => $request->input('txtNombreAdd'),
            'email' => $request->input('txtEmailAdd'),
            'password' => Hash::make($request->input('txtPasswordAdd')),
            'ciudad' => $request->input('txtCiudadAdd'),
            'rol' => $request->input('txtRolAdd'),
            'estado' => 'activo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        session()->flash('message', 'Usuario: '.$request->input('txtNombreAdd').' añadido exitosamente');
        return to_route('usersList');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $userInfo = DB::table('usuarios')->where('id', $id)->first();
        return view('admin.admin-user-profile', compact('userInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(registerRequest $request, string $id)
    {
        DB::table('usuarios')->where('id', $id)->update
        ([
            'nombre' => $request->input('txtNombreEdit'),
            'email' => $request->input('txtEmailEdit'),
            'ciudad' => $request->input('txtCiudadEdit'),
            'rol' => $request->input('txtRolEdit'),
            'estado' => $request->input('txtEstadoEdit'),
            'cooldown' => $request->input('txtCooldownEdit'),
            'updated_at' => Carbon::now()
        ]);
        session()->flash('message', 'Usuario: '.$request->input('txtNombreEdit').' editado exitosamente');
        return to_route('usersList');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('usuarios')->where('id', $id)->delete();
        session()->flash('message', 'Usuario eliminado exitosamente');
        return to_route('usersList');
    }
}
