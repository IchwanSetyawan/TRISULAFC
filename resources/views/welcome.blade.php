@extends('layouts.app')

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
    {{-- <section>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h1>Next Match</h1>
                <br>
                <h1>Trisula FC VS Persib Bandung</h1>
                <br>   
            </div>
        </div>
        <div class="row justify-content-lg-center">
            <div class="col col-md-3 ">
                <img src="images/versus.jpg" class="img-fluid rounded" alt="image versus">                
            </div>
            <div class="col-sm-auto ">
                <span>VS</span>
            </div>
            <div class="col col-md-3">
                <img src="images/versus.jpg" class="img-fluid rounded" alt="image versus">                
            </div>
        </div>
    </section> --}}
<div class="container mt-5 mb-5 text-center" style="color: white">
    <div class="row justify-content-md-center m-2">
        <h3 style="color: black">Pertandingan Berikutnya</h3>
    </div>
    <div class="row justify-content-md-center containerVersus rounded">
        <div class="col col-lg-3">
           <img src="images/trisula.png" class="img-fluid rounded mb-1" alt="image versus">                
           <h5>TRISULA FC</h5>
        </div>
        <div class="col-md-auto align-self-center p-5">
         <h1>VS</h1>
        </div>
        <div class="col col-lg-3">
              <img src="images/maduraUnited.jpg" class="img-fluid rounded mb-1" alt="image versus">                
              <h5>Madura United</h5>
        </div>
  </div>
</div>
{{-- end pertandingan berikutnya --}}


{{-- start team --}}
{{-- <section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5 text-center">
                <h3>Tim Utama</h3>
            </div>            
        </div>        

        <div class="row">
            <div class="col-md-12 team mx-auto">
                <img src="images/team.jpg" class="d-block w-800" alt="imageTim">
            </div>
        </div>
    </div>
</section> --}}
{{-- end team --}}

@endsection