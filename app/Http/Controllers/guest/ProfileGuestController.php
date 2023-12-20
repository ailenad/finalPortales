<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileGuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view ('guest.profile');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
           ]);
        $path = '';
        if($request->hasFile('avatar')){
            $path = 'img/'.time() . '.' . $request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('img'), $path);
        }    
        Profile::Create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'avatar' =>$path,
            'user_id' => $user->id,
        ]);
        return redirect()->route('home-guest');
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
    public function edit(Profile $guest_profile)
    {
        return view('guest.edit-profile', compact('guest_profile'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $profile = Profile::findOrFail($id);
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
        //Actualizo los valores desde el form
        $profile -> first_name = $request->input('first_name');
        $profile -> last_name = $request->input('last_name');
        $profile->user_id = $user->id;
        //Imagen
        if ($request->hasFile('avatar')) {

            $path = 'img/' . time() . '.' . $request->avatar->getClientOriginalExtension();
            $request->avatar->move(public_path('img'), $path);
            if ($profile->avatar) {
                $existingAvatar = public_path($profile->avatar);
                if (file_exists($existingAvatar)) {
                    unlink($existingAvatar);
                }
            }
    
     
            $profile->avatar = $path;
        }
    
        $profile->save();

        return redirect()->route('home-guest');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function showProfileGuest() {

        $user = auth()->user();

        $profile = $user->profile;
    
        return view('guest.home-guest', ['profile' => $profile]);

    }
 
}
