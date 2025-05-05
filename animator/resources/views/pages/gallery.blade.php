@extends('layouts.app')

@section('title', 'Galeria')

@section('content')
    <h2>Galeria zdjęć</h2>
    <div class="row">
        <div class="col-md-4">
            <img src="https://via.placeholder.com/300x200" class="img-fluid rounded mb-3" alt="Zabawa 1">
        </div>
        <div class="col-md-4">
            <img src="https://via.placeholder.com/300x200" class="img-fluid rounded mb-3" alt="Zabawa 2">
        </div>
        <div class="col-md-4">
            <img src="https://via.placeholder.com/300x200" class="img-fluid rounded mb-3" alt="Zabawa 3">
        </div>
    </div>
@endsection
