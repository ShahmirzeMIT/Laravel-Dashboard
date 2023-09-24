@extends('layouts.master')

@section('content')
<div class="container-fluid">
@if (session('status')=="You are not Developer only Developer come in here")
<div class="alert alert-danger mt-3" role="alert">
     {{ session('status') }}
</div>
@endif
kfdfdkjgdfghjbf
</div>
@endsection