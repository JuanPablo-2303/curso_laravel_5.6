@extends('layouts.app')

@section('title', 'Trainer')

@section('content')

    <img style="height:200px; width:200px; background-color:#EFEFEF; margin:20px" src="/images/{{$trainer->avatar}}" class="card-img-top rounded-circle mx-auto d-block" alt="...">
      <div class="text-center">
        <h5 class="card-title">{{$trainer->name}}</h5>
            Ash Ketchum, conocido en Japón como Satoshi, es el protagonista de la serie de anime Pokémon. Mide 1.65 m y pesa 54 kg. Es un entrenador Pokémon originario de Pueblo Paleta, de la región de Kanto. Tiene un carácter perseverante, entusiasta y distraído, y su máxima ambición es llegar a ser el mejor maestro Pokémon.
      </div>
                  
   
@endsection

