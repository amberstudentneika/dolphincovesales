@extends('layouts.adminapp')
@section('title','Commission and Target')
@section('content')
    <h1 class="text-muted text-center">View Commission and Target</h1>

    @if($check=='0')
       <br/> <br/> <h3 class="text-muted text-center">No record</h3>

    @else

    <div class="container-fluid">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Rate</th>
            <th scope="col">Target</th>
            <th scope="col">Created By</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $info)
        <tr>
            <th scope="row">1</th>
            <td>{{$info->rate}}</td>
            <td>{{$info->target}}</td>
            <td>{{$info->created_by}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    @endif
@endsection
