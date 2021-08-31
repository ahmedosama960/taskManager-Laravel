@extends('layout.app')
@section('title','Edit Task')

@section('content')



    <div class="container">
        <div class="card  w-50" style="margin:50px auto">
            <div class="card-header ">
                <h5> ADD New Task</h5>
            </div>
            <div class="card-body ">
                <form method="POST" action="{{ url ('task/update/'.$task->id)}}" >
                    @csrf
                    <div class="form-group">
                        <label >Task Name</label>
                        <input type="text" value="{{$task->name}}" name="name"  class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >Description</label>
                        <input type="text" value="{{$task->description}}" name="description" class="form-control" required >
                    </div>
                    <div class="form-group">
                        <label >Developer Name</label>
                        <input type="text" value="{{$task->developer}}" name="developer" class="form-control" required >
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Task</button>
                </form>
            </div>
        </div>

    </div>
    @endsection
