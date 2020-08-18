@extends('layouts.app')
@section('content')
 

<div>
    <div class="container">
                <h2>Edit Post</h2>
                <form class="form-horizontal" action="{{url('/healthplans/'.$plan->id)}}" method="post">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Name:</label>
                    <div class="col-sm-10">
                      <input type="text"class="form-control" id="plan_name" placeholder="Enter Plan Name" name="plan_name" value="{{$plan->Name}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Benefits:</label>
                    <div class="col-sm-10">
                      <textarea name="benefits" placeholder="Enter Benefits"  class="form-control" id="body" value="$plan->Benefits" cols="150" rows="10">{{$plan->Benefits}}
                    </textarea>
                    </div>
                  </div>
                 <input type="hidden" name="_method" value="put">
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary float-right">Update Plan</button>
                    </div>
                  </div>
                  
                </form>
              </div>
</div>
@endsection