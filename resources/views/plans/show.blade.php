@extends('layouts.app')
@section('content')

<div id="name">
    <h1>{{$plan->Name}}</h1></a>
    <div id="box">
    <p>{{$plan->Benefits}}</p></div>
    <span>Created AT: <small>{{$plan->created_at}}</small></span><br>
    
        <a href="{{asset('storage/files/'.$plan->file)}}">View File</a>
    
</div>

@endsection