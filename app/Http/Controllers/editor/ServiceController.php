<?php

namespace App\Http\Controllers\editor;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        $services = Service::all();
        
       
       return view('admin.services', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.create_services");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mensajesError = [
            'title' => 'Debe ingresar un titulo para su articulo.',
            'description' => 'EL contenido del articulo no puede quedar vacio.',
        ];
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ] ,$mensajesError);
        $service = Service::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),   
        ]);
        $service->save();
        return redirect()->route('services.index');
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
    public function edit(Service $service)
    {
        return view('admin.edit_service', compact(('service')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('services.edit', $service->id)
                ->withErrors($validator)
                ->withInput();
        }
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->save();
    
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index');
        
    }
}
