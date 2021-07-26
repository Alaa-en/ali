<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\navigation;


class navigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navigations = navigation::all();
        $i = 1;
        return view ('navigations.index' ,compact('navigations','i'));
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
            'name' => 'required|min:3|max:50|unique:navigations,name',
            'adress' => 'required|min:3',
          
        ]);

        // Store the blog post...
        $navigation=new navigation();
        $navigation->name = $request['name'];
        $navigation->adress = $request['adress'];
    
        $navigation->save();
       return  redirect(route('navigations.index'));
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
        $navigation= navigation::findOrFail($id);
        return view ('navigations.edit',compact('navigation','id'));
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
        $navigation = navigation::find($id);

        $navigation->name = $request->name;
        $navigation->adress = $request->adress;
     
        $navigation->save();

        return redirect(route('navigations.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $navigation= navigation::findOrFail($id);
       
        $navigation->delete();

        return redirect(route('navigations.index'));
    }
}
