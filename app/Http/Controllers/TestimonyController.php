<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use App\Http\Requests\StoreTestimonyRequest;
use App\Http\Requests\UpdateTestimonyRequest;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
//use Illuminate\Support\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimony = Testimony::where('status', '=', true)->get();

        return view('pages.testimonies.index', compact('testimony'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.testimonies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $testimony = new Testimony();

        try {
            if ($request->hasFile('imagen1')) {
                $file = $request->file('imagen1');
                $routeImg = 'storage/images/imagen/';
                $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
                $this->saveImg($file, $routeImg, $nombreImagen);
                $testimony->url_image_antes = $routeImg . $nombreImagen;
            }

            if ($request->hasFile('imagen2')) {
                $file = $request->file('imagen2');
                $routeImg = 'storage/images/imagen/';
                $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
                $this->saveImg($file, $routeImg, $nombreImagen);
                $testimony->url_image_posterior = $routeImg . $nombreImagen;
            }

            $testimony->name = $request->name;
            $testimony->ocupation = $request->ocupation;
            $testimony->testimonie = $request->testimonie;
            $testimony->status = 1;
            $testimony->visible = 1;

            $testimony->save();

            return redirect()->route('testimonios.index')->with('success', 'Testimonio creado');
        } catch (\Throwable $th) {
            return response()->json(['messge' => 'Verifique sus datos ' . $th], 400);
        }
    }

    public function saveImg($file, $route, $nombreImagen)
    {
        $manager = new ImageManager(new Driver());
        $img = $manager->read($file);
        if (!file_exists($route)) {
            mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
        }
        $img->save($route . $nombreImagen);
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimony $testimony)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimony $testimony, $id)
    {
        $testimony = Testimony::findOrfail($id);

        return view('pages.testimonies.edit', compact('testimony'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $testimony = Testimony::findOrfail($id);

        $testimony->name = $request->name;
        /*  $testimony->email = $request->email; */
        $testimony->ocupation = $request->ocupation;
        $testimony->testimonie = $request->testimonie;
        /* $testimony->ocupation = $request->ocupation; */
        /* $testimony->status = $request->status; */

        try {
            if ($request->hasFile('imagen1')) {
                $file = $request->file('imagen1');
                $routeImg = 'storage/images/imagen/';
                $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

                $this->saveImg($file, $routeImg, $nombreImagen);

                $testimony->url_image_antes = $routeImg . $nombreImagen;
            }

            if ($request->hasFile('imagen2')) {
                $file = $request->file('imagen2');
                $routeImg = 'storage/images/imagen/';
                $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

                $this->saveImg($file, $routeImg, $nombreImagen);

                $testimony->url_image_posterior = $routeImg . $nombreImagen;
            }

            $testimony->name = $request->name;
            /*  $testimony->email = $request->email; */
            $testimony->ocupation = $request->ocupation;
            $testimony->testimonie = $request->testimonie;

            $testimony->save();
            return redirect()->route('testimonios.index')->with('success', 'Testimonio actualizado exitosamente.');

        } catch (\Throwable $th) {
            return response()->json(['messge' => 'Verifique sus datos ' . $th], 400);
    
        }

        $testimony->update($request->all());

        $testimony->save();

        return redirect()->route('testimonios.index')->with('success', 'Testimonio modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimony $testimony)
    {
        //
    }

    public function deleteTestimony(Request $request)
    {
        $id = $request->id;
        //Busco el servicio con id como parametro
        $testimony = Testimony::findOrfail($id);
        //Modifico el status a false
        $testimony->status = false;
        //Guardo
        $testimony->save();

        // Devuelvo una respuesta JSON u otra respuesta según necesites
        return response()->json(['message' => 'Testimonio eliminado.']);
    }

    public function updateVisible(Request $request)
    {
        
        // Lógica para manejar la solicitud AJAX
        //return response()->json(['mensaje' => 'Solicitud AJAX manejada con éxito']);
        $id = $request->id;

        $field = $request->field;

        $status = $request->status;

        $testimony = Testimony::findOrFail($id);

        $testimony->visible = $status;


        $testimony->save();

        return response()->json(['message' => 'Estado modificado.']);
    }
}