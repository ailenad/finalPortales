<?php

namespace App\Http\Controllers\guest;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guestUsers = User::where('role', 'guest')->with('contractedServices')->get();
        return view('admin.client-list', ['guestUsers' => $guestUsers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('guest.register');
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
            'role' => 'guest',
        ]);
        Auth::login($user);
        return redirect()->route('guest-profiles.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function showAccess(){
        return view ('guest.access-guest');
    }
    public function loginGuest (Request $request){
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);
            $user = User::where('email', $request->input('email'))
            ->where('role', 'guest')
        ->first();
        if ($user) {
            if(Hash::check($request->input('password'), $user -> password)){
                Auth::login($user);
                return redirect()->route('home-guest');  
                }
        }else{
            return view ('guest.register');
        }
    }
}
