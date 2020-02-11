@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')

<form class="form-group" method="POST" action="/trainer" enctype="multipart/form-data">
@csrf
    <div class="container">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descripción</label>
            <input type="text" name="descripcion" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" name="avatar">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>
    
@endsection

