<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\carhead;
use \Validator;

class carheadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $carheads = carhead::all();
        $i = 1;
       

        return view ('carheads.index' ,compact('carheads','i'));
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


        $this->validate($request, [
            'number' => 'required',
            
        ]);

        // Store the blog post...
        $carhead=new carhead();
        $carhead->number = $request['number'];
        $carhead->save();
       return  redirect(route('carheads.index'));
    
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
       
        $carhead= carhead::findOrFail($id);
        return view ('carheads.edit',compact('carhead','id'));
      
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
        $carhead = carhead::find($id);

        $carhead->number = $request->number;
        
        $carhead->save();

        return redirect(route('carheads.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carhead= carhead::findOrFail($id);
        $carhead->shift()->delete();

        $carhead->delete();

        return redirect(route('carheads.index'));
    }
}
