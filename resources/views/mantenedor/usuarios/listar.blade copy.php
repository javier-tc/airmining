@extends('adminlte::page')



@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="col-md-6">
<div class="card card-info">
<div class="card-header">
<h3 class="card-title">usuarios</h3>
</div>


<form class="form-horizontal">
<div class="card-body">
<div class="form-group row">
<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
<div class="col-sm-10">
<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
</div>
</div>
<div class="form-group row">
<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
<div class="col-sm-10">
<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
</div>
</div>
<div class="form-group row">
<div class="offset-sm-2 col-sm-10">
<div class="form-check">
<input type="checkbox" class="form-check-input" id="exampleCheck2">
<label class="form-check-label" for="exampleCheck2">Remember me</label>
</div>
</div>
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop