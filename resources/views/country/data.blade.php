@extends('main')

@section('title_content','Country')

@section('content')
  <div class="card">
    <div class="card-header">
        <div class="d-flex align-items-center">
            <form action="{{ url('country/search') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-10">
                        <input type="text" class="form-control" name="search" id="search" placeholder="Search..." value="{{ $name }}">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary rounded-pill"> Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end card header -->

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <!-- Swiper -->
                    <div class="swiper pagination-progress-swiper rounded">
                        <div class="swiper-wrapper">
                            @foreach ( $responseBody as $item )  
                                <div class="swiper-slide">
                                    <div class="p-5">
                                        <div style="text-align: center;">
                                            <img src="{{ $item->flags->png }}" alt="" class="img-thumbnail rounded" width="250"/>
                                        </div>
                                        <br>
                                        <p>Capital : {{ empty($item->capital[0]) ? '' : $item->capital[0]}}</p>
                                        <p>Continent : {{ empty($item->continents[0]) ? '' : $item->continents[0]}}</p>
                                        <p>Population : {{ $item->population }}</p>
                                        <p>Curency : 
                                            @if (!empty($item->currencies))
                                                @foreach ( $item->currencies as $key => $val )
                                                    {{ $val->name }},
                                                @endforeach
                                            @endif
                                        </p>
                                        <p>Language : 
                                            @if (!empty($item->languages))
                                                @foreach ( $item->languages as $key => $val )
                                                    {{ $val }}, 
                                                @endforeach
                                            @endif
                                        </p>
                                        <div style="text-align: center;">
                                            <i class="ri-star-fill text-warning ri-lg"></i>
                                            <i class="ri-star-fill text-warning ri-lg"></i>
                                            <i class="ri-star-fill ri-lg"></i>
                                            <i class="ri-star-fill ri-lg"></i>
                                            <i class="ri-star-fill ri-lg"></i>
                                            <div id="basic-rater" dir="ltr"></div>
                                        </div>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" style="width: 100%">Review</button>
                                    </div>
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