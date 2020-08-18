@if(count($errors)>0)
@foreach ($errors->all() as $err)
<div><div class="alert alert-danger"> {{$err}}</div></div>    
@endforeach
@endif
@if(session('success'))
<div class="alert alert-success"> {{session('success')}}</div>
@endif
@if(session('error'))
<div class="alert alert-success"> {{session('error')}}</div>
@endif

