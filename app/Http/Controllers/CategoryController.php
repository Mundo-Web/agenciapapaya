<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::where("status", "=", true)->get();

        return view('pages.categories.index', compact('category'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category(); 

        $category->name = $request->name;
        $category->description = $request->description;
        $category->status = 1;
        $category->visible = 1;

        $category->save();
       
        return redirect()->route('categorias.index')->with('success', 'Categoria creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category, $id)
    {
        $category = Category::findOrfail($id);

        return view('pages.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrfail($id); 

        $category->update($request->all());

        $category->save();

        return redirect()->route('categorias.index')->with('success', 'Categoria modificada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }


    public function deleteCategory(Request $request)
    {
        $id = $request->id;
       
        $category = Category::findOrfail($id); 
       
        $category->status = false;
       
        $category->save();

        return response()->json(['message' => 'Categoría eliminada']);
    }


    
    public function updateVisible(Request $request)
    {
        // Lógica para manejar la solicitud AJAX
       
        $id = $request->id;

        $field = $request->field;

        $status = $request->status;

        $category = Category::findOrFail($id);
        
        $category->$field = $status;

        $category->save();

         return response()->json(['message' => 'Categoría modificada']);
    
    }
}
