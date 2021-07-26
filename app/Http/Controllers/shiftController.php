<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shift;
use App\driver;
use App\carhead;
use App\trailer;

class shiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $shifts= shift::all();
        $drivers= driver::all();
        $carheads= carhead::all();
        $trailers= trailer::all();
        $count=1;

        return view ('shifts.index',compact('shifts','drivers','trailers','carheads','count'));
        
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
        $shiftNumber = $request->shiftNumber;
        $driver = $request->driver;
        $carhead = $request->carhead;
        $trailer = $request->trailer;
        shift::create([
            'shiftNumber'=>$shiftNumber,
            'driver_id'=>$driver,
            'carhead_id'=>$carhead,
            'trailer_id'=>$trailer,
           
         ]);
         return redirect(route('shifts.index'));
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
        $shift = shift::find($id);
         $shifts = shift::all();
         $drivers= driver::all();
         $carheads= carhead::all();
         $trailers= trailer::all();

         return view ('shifts.edit', compact('shift' , 'shifts' ,'drivers' ,'carheads' ,'trailers'));
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
        $shift= shift::findOrFail($id);

        $shift->update([
            'shiftNumber'=> $request->shiftNumber,
            'driver_id'=>$request->driver,
            'carhead_id'=>$request->carhead,
            'trailer_id'=>$request->trailer,
           
         ]);
         return redirect(route('shifts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shift=shift::find($id);
                if($shift){
                $shift->maintenance()->delete();
                $shift->delete();
                }else{
                    return abort('404');
                }


        return redirect(route('shifts.index'));
    }
}
