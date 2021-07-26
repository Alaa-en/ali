<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\trailer;
use \Validator;

class trailerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $trailers = trailer::all();
        $i = 1;
       

        return view ('trailers.index' ,compact('trailers','i'));
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
        $trailer=new trailer();
        $trailer->number = $request['number'];
        $trailer->save();
       return  redirect(route('trailers.index'));
    
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
       
        $trailer= trailer::findOrFail($id);
        return view ('trailers.edit',compact('trailer','id'));
      
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
        $trailer = trailer::find($id);

        $trailer->number = $request->number;
        
        $trailer->save();

        return redirect(route('trailers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trailer= trailer::findOrFail($id);
        $trailer->shift()->delete();
        $trailer->delete();

        return redirect(route('trailers.index'));
    }
}
