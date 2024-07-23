<?php

namespace App\Http\Controllers;

use App\Models\postapi;
use App\Http\Requests\StorepostapiRequest;
use App\Http\Requests\UpdatepostapiRequest;
use Illuminate\Http\Request;

class PostapiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return postapi::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'neme'=>'require|max:225',
        //     'gender'=>'require',
        // ]);
        // return 'Okay venkhai';

        $postapi_variable = $request->validate([
            'name'=>'required|max:225',
            'gender'=>'required'
        ]);

        $postapi = postapi::create($postapi_variable);

        return $postapi;        // return ['postapi' => $postapi];
    }

    /**
     * Display the specified resource.
     */
    public function show(postapi $postapi)
    {
        return $postapi;        // return ['postapi' => $postapi];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, postapi $postapi)
    {
        $postapi_variable = $request->validate([
            'name'=>'required|max:225',
            'gender'=>'required'
        ]);

        $postapi -> update($postapi_variable);

        return $postapi;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(postapi $postapi)
    {
        $postapi->delete();

        return ['message'=>'Data delete'];
    }
}
