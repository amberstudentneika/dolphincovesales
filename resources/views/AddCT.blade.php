@extends('layouts.adminapp')
@section('title','Add Commission and Target')
@section('content')
    <h1 class="text-muted text-center">Add Commission and Target</h1>
<form class="container my-3" method="POST" action="{{route('AddCT')}}">
@csrf
    <div class="form-group col-md-12">
        <label for="exampleFormControlInput1">Rate</label>
        <input type="text" class="form-control col-sm-1" name="rate" id="">
    </div>
    <div class="form-group col-md-12">
        <label for="exampleFormControlInput1">Target</label>
        <input type="text" class="form-control col-sm-1" name="target" id="">
    </div>

    <button class="btn btn-success" type="submit">Submit</button>
</form>

@endsection
