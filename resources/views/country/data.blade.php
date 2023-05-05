@extends('main')

@section('title_content','Country')

@push('addon-css')
    <style>
        .rate {
            float: left;
            height: 46px;
        }
        .rate:not(:checked) > input {
            position:absolute;
            top:-9999px;
        }
        .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
        }
        .rate:not(:checked) > label:before {
            content: '★ ';
        }
        .rate > input:checked ~ label {
            color: #ffc700;    
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #deb217;  
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }

        swiper-container {
            width: 100%;
            height: 100%;
        }

        swiper-slide {
            /* text-align: center;
            font-size: 18px; */
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endpush

@section('content')
  <div class="card">
    <div class="card-header">
        <div class="d-flex align-items-center">
            <div dir="ltr">
                <div id="rater-onhover" class="align-middle"></div>
                <span class="ratingnum badge bg-info align-middle ms-2"></span>
            </div>
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
                    <swiper-container class="mySwiper" pagination="true" pagination-type="progressbar" navigation="true">
                        @foreach ( $responseBody as $item )
                            <swiper-slide>
                                <div class="p-5">
                                    <div style="text-align: center;" class="p-2">
                                        <img src="{{ $item->flags->png }}" alt="" class="img-thumbnail" width="200"/>
                                    </div>
                                    <br>
                                    <label>Capital : {{ empty($item->capital[0]) ? '' : $item->capital[0]}}</label><br>
                                    <label>Continent : {{ empty($item->continents[0]) ? '' : $item->continents[0]}}</label><br>
                                    <label>Population : {{ $item->population }}</label><br>
                                    <label>Curency : 
                                        @if (!empty($item->currencies))
                                            @foreach ( $item->currencies as $key => $val )
                                                {{ $val->name }},
                                            @endforeach
                                        @endif
                                    </label><br>
                                    <label>Language : 
                                        @if (!empty($item->languages))
                                            @foreach ( $item->languages as $key => $val )
                                                {{ $val }}, 
                                            @endforeach
                                        @endif
                                    </label>
                                    <div style="text-align: center;">
                                        @foreach ( $countryDb as $countryDbItem )
                                            @if ($countryDbItem->ccn3 == $item->ccn3)
                                                @for ($i=1; $i <= 5; $i++)
                                                    @if ($i <= $countryDbItem->star)
                                                        <i class="ri-star-fill text-warning ri-xl"></i>
                                                    @else
                                                        <i class="ri-star-fill ri-xl"></i>
                                                    @endif
                                                @endfor
                                            @endif
                                        @endforeach
                                    </div>
                                    <button type="button" id="btn-reviewModals" class="btn btn-primary waves-effect waves-light btnReviewModals" data-url="{{url('country/review')}}" data-ccn3="{{ $item->ccn3 }}" data-name="{{ $item->name->common }}" data-capitals="{{ empty($item->capital[0]) ? '' : $item->capital[0]}}" data-img="{{ $item->flags->png }}" data-bs-toggle="modal" data-bs-target="#reviewModals" style="width: 100%">Review</button>
                                </div>
                            </swiper-slide>
                        @endforeach
                    </swiper-container>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
    </div>
  <!-- end card-body -->
  </div>


<div id="reviewModals" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 overflow-hidden">
            <div class="modal-header p-3">
                <h4 class="card-title mb-0">Review Country</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="form-control" name="codeCcn3" id="codeCcn3" hidden>
                    <div class="mb-3" style="text-align: center;">
                        <img id="imgCountry" src="https://flagcdn.com/w320/id.png" alt="" class="img-thumbnail" width="200"/>
                    </div>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Country Name</label>
                        <input type="text" class="form-control" name="countryName" id="countryName" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Country Capital</label>
                        <input type="text" class="form-control" name="countryCapital" id="countryCapital" readonly>
                    </div>
                    <div class="mb-1">
                        <label for="emailInput" class="form-label">Your Review</label>
                    </div>
                    <div class="mb-1">
                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3"/>
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Send Review</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@push('addon-script')
    <script type="text/javascript">
        $(document).ready(function(){

            //Error Message Function
            function errMsg(msg){
                Swal.fire({
                    icon: 'error',
                    title: msg,
                })
            }

            //Success Message Function
            function successMsg(msg){
                Swal.fire({
                    icon: 'success',
                    title: msg,
                    showConfirmButton: false,
                    timer: 1500
                })
            }

            //Declare Csrf
            $(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            });

            //Function to Submit
            $('#btn-review').click(function (){
                var ccn3 = $(this).attr('data-ccn3');
                var rate = $(`input[name="rate${ccn3}"]:checked`).val();
                var param = $('#add_form').serialize() + `&ccn3=${ccn3}&rate=${rate}`;
                var url = $(this).attr('data-url');
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    data: param,
                    url: url,
                    success: function(val) {
                        if (val["status"] == false) {
                            errMsg(val['info']);
                        }else{
                            successMsg(val['info'])
                        }
                    },
                    error: function(val) {
                        console.log('Error: ');
                    }
                });
            });

            $('.btnReviewModals').click(function (){
                var name = $(this).attr('data-name');
                var capital = $(this).attr('data-capitals');
                var ccn3 = $(this).attr('data-ccn3');
                var img = $(this).attr('data-img');
                $('#countryName').val(name);
                $('#countryCapital').val(capital);
                $('#codeCcn3').val(ccn3);
                $('#imgCountry').attr("src", img);
            });
        }); //Last Line Document Ready
    </script>
@endpush