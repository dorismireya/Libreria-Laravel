<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Usuario;
use App\Http\Requests\StoreUsuario;

class UsuarioController extends Controller
{
    
    public function __construct(){

        $this->middleware('autentificado', ['except'=>['login', 'logear']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valores = $request->all();
        Usuario::create($valores);
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.view', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->fill($request->all());
        $usuario->save();
        return redirect()->route('usuarios.show', ['id' => $usuario->id_usuario]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }

    public function login(){
        return view('usuarios.login');
    }

    public function logear(Request $request){
        $credenciales = $request->only(['username', 'password']);
        if(auth()->attempt($credenciales))
            return redirect()->route('index');
        
        else return redirect()->route('usuarios.login')->withErrors(['login' => 'Usuario o contraseña incorrectos'])
                ->withInput(['username' => $request->input('username'),]); 
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('index');
    }
}
