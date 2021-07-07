@extends('layouts.app')

@section('title','Home')

@section('content')

{{-- start carraousel --}}
<div class="bodiCarraousel">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="images/carraousel1.jpg" class="d-block w-100 mh-100" alt="image1">
        <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="images/carraousel2.jpg" class="d-block w-100" alt="image2">
        <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="images/carraousel3.jpg" class="d-block w-100" alt="image3">
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div> 

{{-- end carraousel --}}

{{--start  pertandingan berikutnya --}}
    
      
<div class="container mt-5 mb-5 text-center" style="color: white">
    <div class="row justify-content-md-center m-2">
        <h3 style="color: black">Pertandingan Berikutnya</h3>
    </div>
    <div class="row justify-content-sm-center containerVersus rounded">
        <div class="col col-md-3 col-sm-4">
           <img src="images/trisula.png" class="img-fluid rounded mb-1" alt="image versus">                
           <h5>TRISULA FC</h5>
        </div>
        <div class="col-md-auto align-self-center p-5 col-sm-4">
         <h1>VS</h1>
        </div>
        <div class="col col-md-3 col-sm-4">
              <img src="images/maduraUnited.jpg" class="img-fluid rounded mb-1" alt="image versus">                
              <h5>Madura United</h5>
        </div>
        <div class="row justify-content-md-center m-2">
            <h4 style="color: orange">Kamis, 18 Juli 2021 <br> Kick off pukul 19:00 WIB <br>live on RCTI</h4>
            <br>
            <h6 style="color: black">Stadion Maguwohargo Bantul</h6>
        </div>
    </div>
</div>
{{-- end pertandingan berikutnya --}}

<section>
    <div class="berita">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center py-5">
            <h1>Berita Unggulan</h1>
            </div>
          </div>
        <div class="row ">
          <div class="col-sm-6 my-3">
            <div class="card" >
                <img src="images/berita.jpg" class="card-img-top" alt="berita">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
             </div>
          </div>
          <div class="col-sm-6 my-3">
            <div class="card" >
                <img src="images/berita3.jpg" class="card-img-top" alt="berita3">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
             </div>
          </div>
          
          <div class="col-sm-6 my-2">
           <div class="card" >
                <img src="images/berita2.jpg" class="card-img-top" alt="berita2">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
             </div>
          </div>
          </div>
        </div>
        
      </div>
    </div>
</section>

@endsection