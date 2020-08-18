@extends('layouts.app')
@section('content')
 

<div>
    <div class="container">
        @if(!Auth::guest())
        @if(Auth::user()->id==1)
                <h2>Add Plan</h2>
                <form class="form-horizontal" action="{{url('/plans')}}"   method="post" enctype="multipart/form-data"> 
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label class="control-label col-sm-2">Plan Name:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="plan_name" placeholder="Enter Plan Name" name="plan_name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" >Benefits:</label>
                    <div class="col-sm-10">
                      <textarea name="benefits" placeholder="Enter benefits"  class="form-control" id="benefits"  cols="100" rows="10">
                    </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" >File:</label>
                    <div class="col-sm-10">
                      <input type="file"   name="file">
                    </div>
                  </div>

                
                 
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary float-right">Add Plan</button>
                    </div>
                  </div>
                  
                </form>
                
                @else
                <td colspan="2">You are a user and can't add plan</td><br>
                <a href="{{url('/plans')}}" >View plans</a>
                @endif
                @endif
              </div>
</div>  


              
@endsection
