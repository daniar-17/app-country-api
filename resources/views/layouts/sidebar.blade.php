<div class="app-menu navbar-menu">
      <!-- LOGO -->
      <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="" class="logo logo-dark">
          <span class="logo-sm">
            <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22" />
          </span>
          <span class="logo-lg">
            <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="17"/>
          </span>
        </a>
        <!-- Light Logo-->
        <a href="" class="logo logo-light">
          <span class="logo-sm">
            <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22" />
          </span>
          <span class="logo-lg">
            <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="17"/>
          </span>
        </a>
        <button
          type="button"
          class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
          id="vertical-hover"
        >
          <i class="ri-record-circle-line"></i>
        </button>
      </div>

      <div id="scrollbar">
        <div class="container-fluid">
          <div id="two-column-menu"></div>
          <ul class="navbar-nav" id="navbar-nav">
            <li class="menu-title">
              <i class="ri-more-fill"></i>
              <span data-key="t-components">Menu</span>
            </li>
            <li class="nav-item">
              <a class="nav-link menu-link" href="">
                <i class="mdi mdi-home"></i>
                <span data-key="t-widgets">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu-link" href="{{ url('country') }}">
                <i class="mdi mdi-truck-fast-outline"></i>
                <span data-key="t-widgets">Country</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- Sidebar -->
      </div>

      <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->

    @push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){

          $('.js-example-basic-single').select2();

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

          //Action Logout
          $(".btn_logout").click(function(){
            var url = "";
            Swal.fire({
                title: 'Apakah anda akan Log Out?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Log Out !'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url: url,
                        success: function(val) {
                            if (val["status"] == false) {
                                errMsg(val['info']);
                            }else{
                                successMsg(val['info']);
                                setTimeout(function() { 
                                    window.location.replace('/');
                                }, 1700);
                            }
                        },
                        error: function(val) {
                            console.log('Error: ', data);
                            alert(data);
                        }
                    });
                }
            });
          });
        });
    </script>
    @endpush