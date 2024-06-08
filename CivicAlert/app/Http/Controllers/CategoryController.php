<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categs=Category::all();
        return view('categories.index',compact('categs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            
        ]);
        $categ=new Category();
        $categ->name=$request->name;
        $categ->save();
        return redirect()->route('categories.index')->with('success', 'Category created successfully!');;


       
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
        $category=Category::findOrFail($id);
        return view('categories.edit',compact('category'));





        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            
        ]);
        $categ=Category::findOrFail($id);
        $categ->name=$request->name;
        $categ->save();
        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categ=Category::findOrFail($id);
        $categ->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
}
