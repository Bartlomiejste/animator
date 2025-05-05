@extends('layouts.app')

@section('title', 'O mnie')

@section('content')
    
    <h2>Kim jestem?</h2>
    <p>Cześć! Nazywam się Marta i od 5 lat prowadzę animacje dla dzieci podczas urodzin, wesel, komunii i innych wydarzeń.</p>
    <p>Ukończyłam kursy animatorskie, mam doświadczenie i mnóstwo energii, którą zarażam dzieci!</p>
    <p>Zapewniam uśmiech, ruch i kreatywną zabawę dla każdego malucha 😊</p>

    <hr class="my-5">
    <h3 class="mb-4 text-center">Opinie klientów</h3>
    
    <div id="testimonialCarousel" class="carousel slide mx-auto" data-bs-ride="carousel" style="max-width: 700px;">
      <div class="carousel-inner">
    
        <div class="carousel-item active">
          <div class="p-4 bg-light rounded shadow-sm text-center">
            <p class="fw-bold">🎉 Agnieszka, mama 6-latki</p>
            <p>"Najlepsza animatorka jaką mieliśmy! Dzieci były zachwycone zabawami i balonami."</p>
          </div>
        </div>
    
        <div class="carousel-item">
          <div class="p-4 bg-light rounded shadow-sm text-center">
            <p class="fw-bold">🎈 Karol, tata z urodzin</p>
            <p>"Wszystko dopięte na ostatni guzik, nawet dorośli się dobrze bawili 😄"</p>
          </div>
        </div>
    
        <div class="carousel-item">
          <div class="p-4 bg-light rounded shadow-sm text-center">
            <p class="fw-bold">💬 Paulina, event firmowy</p>
            <p>"Bardzo profesjonalnie i z ogromnym uśmiechem. Polecam każdemu!"</p>
          </div>
        </div>
    
      </div>
    
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
    
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    

@endsection
