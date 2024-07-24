<?php

namespace App\Http\Controllers;

use App\Models\crud;
use App\Http\Requests\StorecrudRequest;
use App\Http\Requests\UpdatecrudRequest;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cruds = crud::latest()->paginate(5);

        return view('cruds.index', compact('cruds'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cruds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        crud::create($request->all());

        return redirect()->route('cruds.index')->with('success', 'crud created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(crud $crud)
    {
        return view('cruds.show',compact('crud'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(crud $crud)
    {
        return view('cruds.edit',compact('crud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, crud $crud)
    {
        // $crud->update($request->validate());

        // return redirect()->route('cruds.index')
        //                 ->with('success','crud updated successfully');

        $crudr = $request->validate([
            'Position'=>'required|max:225',
            'Salary'=>'required'
        ]);

        $crud -> update($crudr);

        return redirect()->route('cruds.index')
                        ->with('success','crud updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(crud $crud)
    {
        $crud->delete();

        return redirect()->route('cruds.index')
                        ->with('success','crud deleted successfully');
    }
}
