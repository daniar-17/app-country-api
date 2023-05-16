@extends('main')

@section('title_content','View 360 and Street View Maps')

@push('addon-css')
    <style>
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header mb-0">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title mb-0 flex-grow-1">View Image 360</h4>
                        <select class="form-select-sm mb-0" style="width: 50%;" id="select_view">
                            <option value="1" data-view="https://momento360.com/e/u/763a2c57faee44cdb98567b3b6505bcf?utm_campaign=embed&utm_source=other&heading=-2.3&pitch=-19.9&field-of-view=75&size=medium&display-plan=true">Office Room</option>
                            <option value="2" data-view="https://momento360.com/e/u/d3911c2ebf4747b7ac7025fbf62ca90b?utm_campaign=embed&utm_source=other&heading=-325.64&pitch=-17.71&field-of-view=75&size=medium&display-plan=true">Sitting Room</option>
                            <option value="3" data-view="https://momento360.com/e/u/c6f4d52545424494876c274ff0d676ab?utm_campaign=embed&utm_source=other&heading=-180.82&pitch=-12.47&field-of-view=75&size=medium&display-plan=true">BedRoom</option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <iframe class="rounded shadow viewimage" style="width: 100%; height: 350px;" frameborder="0" src="https://momento360.com/e/u/d3911c2ebf4747b7ac7025fbf62ca90b?utm_campaign=embed&utm_source=other&heading=-325.64&pitch=-17.71&field-of-view=75&size=medium&display-plan=true"></iframe>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title mb-0 flex-grow-1">Street View Google Maps 360</h4>
                    </div>
                </div>
                <div class="card-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1684140299560!6m8!1m7!1sCAoSLEFGMVFpcFBRTUdRbEtrR09DMERkQlRmSnR4bE9NVU5HNDhpc3JIcDZPMFdS!2m2!1d-6.893634042511748!2d107.6185445487499!3f5.448565044888937!4f-1.0232917986490548!5f0.7820865974627469" style="width: 100%;height: 350px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded shadow"></iframe>
                </div>
            </div>
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

            $('#select_view').on('change', function() {
                var option = $('option:selected', this).attr('data-view');
                $(".viewimage").attr('src', option);
            });
        }); //Last Line Document Ready
    </script>
@endpush