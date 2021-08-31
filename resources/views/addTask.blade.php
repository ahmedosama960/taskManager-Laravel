@extends('layout.app')

@section('title','Add Task')

@section('content')


    <div class="container">

        <div class="card  w-50" style="margin:50px auto">
            <div class="card-header ">
                <h5> ADD New Task</h5>
            </div>
            <div class="card-body ">
                <form method="POST" action="/addTask">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Task Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"  >
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"  >
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Developer Name</label>
                        <input type="text" name="developer" class="form-control @error('developer') is-invalid @enderror"  >
                        @error('developer')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Task</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
