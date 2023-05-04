@extends('main')

@section('title_content','Country')

@section('content')
  <div class="card">
    <div class="card-header">
        <div class="d-flex align-items-center gap-2">
            <input type="text" class="form-control" name="search" id="search" placeholder="Search..." style="width: 25%;">
            <button type="submit" class="btn btn-primary rounded-pill"> Search</button>
        </div>
    </div>
    <!-- end card header -->

    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <!-- Swiper -->
                    <div class="swiper navigation-swiper rounded">
                        <div class="swiper-wrapper">
                            @foreach ( $responseBody as $item )
                            <div class="swiper-slide">
                                <img src="{{ $item->flags->png }}" alt="" class="img-fluid" /><br>
                                <p>Capital : {{ $item->capital[0] }}</p>
                                <p>Continent : {{ $item->continents[0] }}</p>
                                <p>Population : {{ $item->population }}</p>
                                <p>Curency : {{ $item->currencies->IDR->name }}</p>
                                <p>Language : {{ $item->languages->ind }}</p>
                                <div>
                                    <i class="ri-star-fill text-warning ri-lg"></i>
                                    <i class="ri-star-fill text-warning ri-lg"></i>
                                    <i class="ri-star-fill ri-lg"></i>
                                    <i class="ri-star-fill ri-lg"></i>
                                    <i class="ri-star-fill ri-lg"></i>
                                </div>
                                <button type="button" class="btn btn-primary waves-effect waves-light" style="width: 100%">Review</button>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next bg-white shadow"></div>
                        <div class="swiper-button-prev bg-white shadow"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
    </div>
  <!-- end card-body -->
  </div>
@endsection