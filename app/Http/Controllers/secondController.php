<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Healthplan;

class secondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan=Healthplan::all();
        return view('plans.index1')->with('plan',$plan); 
    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plans.create1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'plan_name'=> 'required',
            'benefits'=> 'required',
            'file'=>'required|mimes:pdf,zip|max:3600000',
        ]);
        if($request->hasFile('file')){
            $fileNameWithExtension=$request->file('file')->getClientOriginalName();//to return the image name with extension
            //return $fileNameWithExtension;
            $fileName=pathinfo($fileNameWithExtension,PATHINFO_FILENAME);
            //return $fileName;
            $fileExtension=$request->file('file')->getClientOriginalExtension();//only extension
            $fileNameToStore=$fileName."_".time().".".$fileExtension;
            $path=$request->file('file')->storeAs('public/files',$fileNameToStore);
            
    }
    else{
        
    }

        $plan=new Healthplan(); 
       $plan->Name=$request->plan_name;
       $plan->Benefits=$request->benefits;
       $plan->user_id=auth()->user()->id;
       $plan->file=$fileNameToStore;
       $plan->save();
       return redirect('/home1')->with('success','plan added successfully');
       //return $request->Name;

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan=Healthplan::find($id);
        return view('plans.show')->with('plan',$plan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan=Healthplan::find($id);
        return view('plans.edit1')->with('plan',$plan);
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
        $this->validate($request,[
            'plan_name'=> 'required',
            'benefits'=> 'required'
        ]);
        $plan=Healthplan::find($id);
        $plan->Name=$request->plan_name;
        $plan->Benefits=$request->benefits;
        $plan->save();
        return redirect('/healthplans')->with('success','plan updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $plan=Healthplan::find($id);
        $plan->delete();
        return redirect('/healthplans')->with('success','plan deleted successfully');
    
    }
}
