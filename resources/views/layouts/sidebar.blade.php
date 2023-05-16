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
            <li class="nav-item">
              <a class="nav-link menu-link" href="{{ url('view_circle') }}">
                <i class="mdi mdi-camera-outline"></i>
                <span data-key="t-widgets">360 View</span>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link menu-link" href="{{ url('whatsapp') }}">
                <i class="mdi mdi-whatsapp"></i>
                <span data-key="t-widgets">WhatsApps</span>
              </a>
            </li> --}}
          </ul>
        </div>
        <!-- Sidebar -->
      </div>

      <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->

    @push('addon-script')
    
    @endpush