@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if(Auth::user()->id==1)
                        <div class="card-header">Dashboard</div>
                        <table class="table">
                                <tr>
                                    <th> Name </th>
                                    <th>Edit </th>
                                    <th>Delete  </th>
                                    
                                
                                    <th><a href="{{route('plans.create')}}" class="btn btn-success btn-small pull-right" >Add Plan</a> </th>
                                </tr>
                                <tr>
                                      @if(count($plan)>0)
                                    @foreach($plan as $value)
                                        <td>{{$value->Name}}</td>
                                        
                                    <td><a href="{{url('/plans/'.$value->id.'/edit')}}" class="btn btn-info">Edit</a></td>
                                    <td><form action="{{ url('/plans/'.$value->id)}}" method="post">
                                        {{ csrf_field()}}
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                                    </form></td></tr>
                                    @endforeach
        
        @else
        <tr>
        <td>You do not have any plans</td></tr>
        </div>
        @endif
        
        @else
        
        <td colspan="2">You are not admin and can't add plan</td><br>
        
       
               <tr> <a href="{{url('/plans')}}" >View plans</a></tr>
              
 
    
        @endif
        
                                    
                                  
                                   
                                    
                                </table>
                                 
    
                        
                   
                </div>
            </div>
        </div>
    </div>
@endsection
