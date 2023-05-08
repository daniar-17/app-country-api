@extends('main')

@section('title_content','Country')

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
        <div class="col-4">
            <div class="card">
                <div class="card-body text-center">
                    <div class="alert alert-danger shadow" role="alert">
                        Country with name has : <strong>{{ $name }} Not Found!</strong>
                    </div>
                    <img class="img-thumbnail" alt="200x200" width="200" src="{{asset('assets/images/notfound.png')}}">
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
    </div>
  <!-- end card-body -->
  </div>
@endsection