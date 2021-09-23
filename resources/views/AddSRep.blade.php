@extends('layouts.adminapp')
@section('title','Add Sales Rep')
@section('content')
    <h1 class="text-muted text-center">Add Sales Representative</h1>
<form class="container my-3" method="POST" action="{{route('AddSRep')}}">
@csrf
    <div class="form-group mx-sm-3 mb-2">
        <label for="">Sale Representative</label>
        <select class="form-control col-sm-3" id="" name="salerep" >
            <option>Select Sales Rep</option>
            @foreach($data as $info)
            <option value="{{$info->id}}">{{$info->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mx-sm-3 mb-2">
        <label for="">Target</label>
        <select class="form-control col-sm-3" id="" name="target">
            <option>Select Target</option>
            @foreach($target as $info)
                <option value="{{$info->target}}">{{$info->target}}</option>
            @endforeach
        </select>
    </div>
    <button class="btn btn-success" type="submit">Submit</button>
</form>

@endsection
