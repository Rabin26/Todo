@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a Todo List:</div>

                <div class="card-body">
                  <x-alert />
                 <form action="/todos/create" method="post">
                 @csrf
                 <input type="text" name="title">
                 <input type="submit" value="create">
                 </form></br>
                 <a href="/todos"><button>Back</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
