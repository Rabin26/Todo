
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Todo Lists!!
                <a href="/todos/create"><button>Create New</button> </a>
                </div>

                <div class="card-body">
                  <x-alert />
                  <ol>
                  @foreach ($todos as $todo)
                  <li>
                  <p>{{ $todo->title}}</p> 
                  <a href="/todos/{{$todo->id}}/edit"><button>Edit</button></a>
                  </li>   
                  @endforeach
                  </ol>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
