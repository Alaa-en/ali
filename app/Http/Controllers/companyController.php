<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\company;
use \Validator;

class companyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $companies = company::all();
        $i = 1;
       

        return view ('companies.index' ,compact('companies','i'));
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
            'name' => 'required|min:3|max:50|unique:companies,name',
            
        ]);

        // Store the blog post...
        $company=new company();
        $company->name = $request['name'];
        $company->save();
       return  redirect(route('companies.index'));
    
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
       
        $company= company::findOrFail($id);
        return view ('companies.edit',compact('company','id'));
      
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
        $company = company::find($id);

        $company->name = $request->name;
        
        $company->save();

        return redirect(route('companies.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company= company::findOrFail($id);
       
        $company->delete();

        return redirect(route('companies.index'));
    }
}
