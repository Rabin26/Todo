
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              
                  <div class="card-header">Update a Todo List:</div>

                  <div class="card-body">
                    <x-alert />
                   <form action="{{Route('todo.update',$todo->id)}}" method="post">
                   @csrf
                   @method('patch')
                   <input type="text" name="title" value="{{$todo->title}}">
                   <input type="submit" value="update">
                   </form></br>
                   <a href="/todos"><button>Back</button></a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
