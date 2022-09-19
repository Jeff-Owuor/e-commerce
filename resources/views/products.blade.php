@extends('base')

@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
            @foreach($products as $product)
                    <div class="carousel-item {{$product['id']==1?'active': ''}}">
                      <img src="{{$product->gallery}}" class="d-block w-50" alt="..." style="height: 400px">
                      <div class="carousel-caption d-none d-md-block">
                        <h5 style="color:black">{{$product['productName']}} <span>{{$product->price}}</span></h5>
                        <p style="color:black">{{$product['description']}}</p>
                       </div>
                    </div>
                @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" style="background-color:#35443585;">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" style="background-color:#35443585;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection

