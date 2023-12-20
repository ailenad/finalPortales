<?php

namespace App\Http\Controllers\Guest;
use App\Models\Service;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContractedServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtén el usuario actual
        $user = auth()->user();

    // Obtén los servicios contratados por el usuario
         $services = $user->contractedServices;
         return view('guest.services-contracted', ['services' => $services]);
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
    public function store(Request $request, Service $service)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            // Otras reglas de validación si las hay
        ]);
        // Obtén el usuario actual
        $user = $request->user();

        // Agrega el servicio al usuario
        $user->contractedServices()->attach($request->service_id);


        // Redirige al usuario a la página de inicio
        return redirect()->route('contract_service.index');
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
    public function destroy()
    {
   
    }
}
