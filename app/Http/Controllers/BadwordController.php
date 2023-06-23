<?php

namespace App\Http\Controllers;

use App\Models\Badword;
use Illuminate\Http\Request;

class BadwordController extends Controller
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
        return view('createWord');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'name'=>'required'
        ]);
        $word=$request->input('name');
        if(strlen($word)>3)
            for ($i=1;$i<strlen($word)-1;$i++)
                $word[$i]='*';
        else
            for ($i=1;$i<strlen($word);$i++)
                $word[$i]='*';

        Badword::create(['name'=>$request->input('name'),'replace'=>$word]);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Badword $badword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Badword $badword)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Badword $badword)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Badword $badword)
    {
        //
    }
}
