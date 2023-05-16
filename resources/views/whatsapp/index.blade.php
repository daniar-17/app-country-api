@extends('main')

@section('title_content','Whatsapp')

@push('addon-css')
    <style>
        
    </style>
@endpush

@section('content')
  <div class="card col-6">
    <div class="card-header">
        <div class="d-flex align-items-center">
            <h4 class="card-title mb-0 flex-grow-1">Send Message to WhatsApp</h4>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ url('/whatsapp/send') }}" name="send_form" id="send_form" method="post" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control name" value="{{ old('name') }}" autofocus placeholder="Nama..">
            </div>
            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control email" value="{{ old('email') }}" autofocus placeholder="email..">
            </div>
            <div class="mb-3">
                <label for="">No WhatsApp</label>
                <input type="number" name="no_whatsapp" class="form-control no_whatsapp" value="{{ old('no_whatsapp') }}" autofocus placeholder="No WhatsApp..">
            </div>
            <div class="mb-3">
                <label for="">Message</label>
                <textarea id="message" name="message" class="form-control" rows="2" placeholder="Input Message . . ."></textarea>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn btn-primary"> Send to WhatsApp</button>
                </div>
            </div>
        </form>
    </div>
  </div>
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
        }); //Last Line Document Ready
    </script>
@endpush