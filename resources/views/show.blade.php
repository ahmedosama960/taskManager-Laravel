@extends('layout.app')

@section('title','Show TasK')

@section('content')


    <div class="container">
        <div class="card" style="width: 38rem; margin:20px auto">
        <div class="card-header">
        <h1>{{$task->name}}</h1>
        <span style="float:right">By : {{$task->developer}}</span><br>
        <span style="float:right">Created at : {{$task->created_at}}</span><br>
        <span style="float:right">Updated at : {{$task->updated_at}}</span><br>
        </div>
        <div class="card-body">
            {{$task->description}}
        </div>
        </div>

    </div>

    @endsection
