@extends('layouts.app')

@section('content')

<div id="heroSlider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="{{ asset('images/slider/slide1.jpg') }}" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                <h3>Zabawa, radość, uśmiech!</h3>
                <p>Animacje, które dzieci zapamiętają na długo 🎉</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/slider/slide2.jpg') }}" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                <h3>Profesjonalna opieka i kreatywność</h3>
                <p>Od urodzin po wesela – wszędzie tam, gdzie są dzieci 🎈</p>
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{ asset('images/slider/slide3.jpg') }}" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                <h3>Kolorowy świat animacji</h3>
                <p>Balony, malowanie twarzy, tańce i mnóstwo śmiechu 🥳</p>
            </div>
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>


@endsection
