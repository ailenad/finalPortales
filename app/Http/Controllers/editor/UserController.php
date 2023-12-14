<?php

namespace App\Http\Controllers\editor;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mensajesError = [
            'required' => 'El campo :attribute es obligatorio.',
            'email' => 'El campo :attribute debe ser una dirección de correo válida.',
            'password' => 'El password debe tener minimo 8 caracteres',
        ];
    
        $request->validate([
            'nombre' => 'required|string|max:50',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:8|max:255',
        ],$mensajesError);
    
        $user = User::create([
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            //defino el rol 
            'role' => 'editor',
        ]);
        Auth::login($user);
        return redirect()->route('profiles.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }   
    public function showLogin()
    {
        return view ('admin.login');
    }
    public function login(Request $request)
    {
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);
            $user = User::where('email', $request->input('email'))
            ->where('role', 'editor')
        ->first();
        if ($user) {
            if(Hash::check($request->input('password'), $user -> password)){
                Auth::login($user);
                return redirect()->route('articles.index');  
                }
        }else{
            return view ('admin.create');
        }
    }
}
