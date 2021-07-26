<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shiftAccount;
use App\contractor;
use App\place;
use App\navigation;
use App\payload;
use App\driver;
use App\carhead;
use App\trailer;
use App\shift;

class shiftAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $shiftAc= shiftAccount::find($id);

        $carh=$shiftAc->shift->carhead_id;

        $driv=$shiftAc->shift->driver_id;
        $trail=$shiftAc->shift->trailer_id;
        $shif=$shiftAc->shift->id;


        $shifts= shift::find($shif);
        $drivers= driver::find($driv);
        $carheads= carhead::find($carh); 
        $trailers= trailer::find($trail);


    //    dd  ($shifts->shiftNumber );

        $shiftAccounts= shiftAccount::where('shift_id', $id)->get();
        $contractors= contractor::all();
        $places= place::all();
        $navigations= navigation::all();
        $payloads= payload::all();
        $count = 1;

        $net = 0;
        $office = 0;
        $covenant = 0;
        $value = 0;
        foreach($shiftAccounts as $shiftAccount){
          $s= ($shiftAccount->nolon * $shiftAccount->weight) - ($shiftAccount->covenant + $shiftAccount->Office);
         $net+=$s;
          
         $o=$shiftAccount->Office;
         $office+=$o;

         $c=$shiftAccount->covenant;
         $covenant+=$c;

         $v=$shiftAccount->nolon * $shiftAccount->weight;
         $value+=$v;

        }
        
         

        return view ('shiftAccounts.index' , 
        compact('shiftAc','value','covenant','office','net','count' ,'shiftAccounts' ,
                'contractors' , 'places' , 'navigations' , 'payloads','shifts',
                'trailers', 'carheads','drivers',));
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
       
        shiftAccount::create([
            'Billoflading'=>$request->Polica,
            'contractorpolicy'=>$request->contractorPolica,
            'contractor_id'=>$request->contractor,
            'placeup_id'=>$request->placeUp,
            'placedown_id'=>$request->placeDown,
            'navigation_id'=>$request->navigation,
            'payload_id'=>$request->payload,
            'shift_id' => $request->shift,
            'weight'=>$request->weight,
            'nolon'=>$request->nolon,
            'covenant'=>$request->covenant,
            'Office'=>$request->office,
           
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
