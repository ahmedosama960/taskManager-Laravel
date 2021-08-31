@extends('layout.app')
@section('title',"Welcom Page")
@section('content')

    <div class="container  mt-3">
        @if (session('msg'))
        <div class="alert alert-success msg-class">
            {{ session('msg') }}
            <script>
                let msg=document.querySelector('.msg-class')
                setTimeout(()=>{
                    msg.style.display="none"
                },2000)
            </script>
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h5> All Tasks <a class="btn btn-primary float-right" href={{url ('/Task')}}>Add new Task</a></h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Task Name </th>
                            <th scope="col">Description</th>
                            <th scope="col">Developer Name</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tasks as $value)
                        <tr>
                            <td>{{$value->name}}</td>
                            <td>{{$value->description}}</td>
                            <td>{{$value->developer}}</td>
                            <td>{{boolval($value->completed)? "Complete" : "Not Complete"}}</td>
                            @if(boolval($value->completed))
                            <td><a href="{{url ('/task/complete/'.$value->id)}}" type="button"><i class="fas fa-times fa-2x" style="color:crimson"></i></a></td>
                            @else
                            <td><a href="{{url ('/task/complete/'.$value->id)}}" type="button"><i class="fas fa-check-square fa-2x" style="color:var(--success)"></i></a></td>
                            @endif
                            <td><a href="{{url ('/task/view/'.$value->id)}}" type="button"><i class="fas fa-eye fa-2x" style="color:var(--primary)"></i></a></td>
                            <td><a href="{{url ('/task/edit/'.$value->id)}}" ><i class="fas fa-edit fa-2x" style="color:var(--info)"></i></a></td>
                            <td><a href="{{url ('/task/delete/'.$value->id)}}" type="button"><i class="fas fa-trash-alt fa-2x" style="color:var(--danger)"></i></a></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    @endsection
