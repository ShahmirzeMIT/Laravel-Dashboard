@extends('layouts.master')

@section('content')
<div class="container-fluid">
@if (session('status')=="You are not Developer only Developer come in here")
<div class="alert alert-danger mt-3" role="alert">
     {{ session('status') }}
</div>
@endif
<video width="1000" height="570" controls>
  <source src="{{asset('assets/video/my.mp4')}}" type="video/mp4">
</video>
</div>
@endsection