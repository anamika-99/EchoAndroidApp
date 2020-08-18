<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\Plan;

class firstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth',['except'=>['index']]);
    }

    public function index()
    {
        //return 12;
        $plan=Plan::all();
        return view('plans.index')->with('plan',$plan); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       // return $plans->Benefits;
        $this->validate($request,[
            'plan_name'=> 'required',
            'benefits'=> 'required',
            'file'=>'required|mimes:pdf|max:3600000',
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

        $plan=new Plan(); 
       $plan->Name=$request->plan_name;
       $plan->Benefits=$request->benefits;
       $plan->user_id=auth()->user()->id;
       $plan->file=$fileNameToStore;
       $plan->save();
       return redirect('/home')->with('success','plan added successfully');
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
        $plan=Plan::find($id);
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
        $plan=Plan::find($id);
        return view('plans.edit')->with('plan',$plan);
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
        $plan=Plan::find($id);
        $plan->Name=$request->plan_name;
        $plan->Benefits=$request->benefits;
        $plan->save();
        return redirect('/plans')->with('success','plan updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan=Plan::find($id);
        $plan->delete();
        return redirect('/plans')->with('success','plan deleted successfully');
    
    }
}
