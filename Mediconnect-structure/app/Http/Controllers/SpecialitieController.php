<?php

namespace App\Http\Controllers;

use App\Models\specialitie;
use Illuminate\Http\Request;
use App\Http\Requests\SpecialitieRequest;

class SpecialitieController extends Controller
{
 
    public function index()
    {
        $specialities = Specialitie::where('status', 1)
        ->orderBy('created_at', 'desc')
        ->get();
      

        return view('dashboard',['specialities' => $specialities]);

    }

   
    public function create()
    {
        return view('specialities.create');

    }


    public function store(SpecialitieRequest $request)
    {
      
        Specialitie::create($request->validated());
    
        return redirect()->route('specialities.index')->with('success', 'Speciality created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(specialitie $specialitie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(specialitie $speciality)
    {
 
        return view('specialities.edit')->with('speciality', $speciality);
    }
    
    
    /**
     * Update the specified resource in storage.
     */
    public function update(SpecialitieRequest $request, specialitie $speciality)
    {



        $speciality->update($request->validated());
    

        return redirect()->route('specialities.index')->with('success', 'Speciality updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(specialitie $specialitie)
    {
        //
    }
}
