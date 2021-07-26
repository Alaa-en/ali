<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\maintenance;
use App\shift;

class maintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maintenances = maintenance::all();
        $shifts = shift::all();
       
       
        $count=1;

        return view ('maintenances.index',compact('maintenances','count' , 'shifts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maintenance = $request->maintenance;
        $place = $request->place;
        $price = $request->price;
        $date = $request->date;
        $notes = $request->notes;
        
        maintenance::create([
            'shiftNumber_id'=>$maintenance,
            'maintenancePlace'=>$place,
            'amount'=>$price,
            'date'=>$date,
            'statement'=>$notes,
           
         ]);
         return redirect(route('maintenances.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $maintenance = maintenance::find($id);
         $shifts = shift::all();

         return view ('maintenances.edit', compact('maintenance' , 'shifts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $maintenance= maintenance::findOrFail($id);

        $maintenance->update([
            'shiftNumber_id'=>$request->maintenance,
            'maintenancePlace'=>$request->place,
            'amount'=>$request->price,
            'date'=>$request->date,
            'statement'=>$request->notes,
           
         ]);
         return redirect(route('maintenances.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maintenance=maintenance::find($id);
        $maintenance->delete();

        return redirect(route('maintenances.index'));

    }
}
