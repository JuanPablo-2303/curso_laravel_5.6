@extends('layouts.app')

@section('title', 'Trainers')

@section('content')
    
        <div class='row'>
        @foreach($trainer as $trainer)
            <div class='col-sm'>
                <div class="card text-center" style="width: 18rem; margin-top:50px">
                    <img style="height:100px; width:100px; background-color:#EFEFEF; margin:20px" src="images/{{$trainer->avatar}}" class="card-img-top rounded-circle mx-auto d-block" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$trainer->name}}</h5>
                        <p class="card-text">{{$trainer->descripcion}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach 
        </div>
   
@endsection

