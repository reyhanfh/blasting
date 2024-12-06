<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HRD - Horison Hotels Group</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Admin Dashboard Templates">
    <meta name="csrf-token" content="{{ csrf_token() }}">        
    <link href="https://myhorison.com/cdn/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{url('assets/fonts/bootstrap/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/main.min.css')}}">

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{url('assets/vendor/overlay-scroll/OverlayScrollbars.min.css')}}">

    <!-- Toastify CSS -->
    <link rel="stylesheet" href="{{url('assets/vendor/toastify/toastify.css')}}">

  </head>

  <body style="overflow-y: hidden;">
    <div class="page-wrapper">
        <div class="app-header d-flex align-items-center">

        <!-- Toggle buttons start -->
        <div class="d-flex">
          <button class="toggle-sidebar" id="toggle-sidebar">
            <i class="bi bi-list lh-1"></i>
          </button>
          <button class="pin-sidebar" id="pin-sidebar">
            <i class="bi bi-list lh-1"></i>
          </button>
        </div>
        <!-- Toggle buttons end -->

        <!-- App brand starts -->
        <div class="app-brand py-2 ms-3">
        <a href="{{ url('dashboard') }}" class="d-sm-block d-none">
    <img style="height:30px;" src="https://myhorison.com/v2/images/web/logo-myhorison.png"  class="logo" alt="Bootstrap Gallery">
</a>
<a href="#" class="d-sm-none d-block">
    <img src="{{ url('assets/images/logo.jpeg') }}" class="logo" alt="Bootstrap Gallery">
</a>

        </div>
        <!-- App brand ends -->

        <!-- App header actions start -->
        <div class="header-actions col"> 

          <div class="icon-container">
            <a href="{{url('cuti/approval')}}" class="text-decoration-none">
              <div class="approval-container custom-link">
                  <i class="bi bi-hand-index" style="font-size: 20px;"></i>
                  </div>
                </a>

            <a href="{{url('perjalanandinas/approvepjs')}}" class="text-decoration-none">
              <div class="approval-container custom-link">
                  <i class="bi bi-bicycle" style="font-size: 22px;"></i>
                  </div>
                </a>
          </div> 
          
          <div class="dropdown ms-2">
            
   <a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center text-decoration-none" style="margin-left: 20px;" 
       href="#!"
       role="button" data-bs-toggle="dropdown" aria-expanded="false">
       <img src="{{ url('assets/images/user2.png') }}" class="rounded-2 img-3x" alt="Bootstrap Gallery">
       <span class="ms-2 text-truncate d-lg-block d-none">{{ session('namalengkap') }}</span>


    </a>            
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">
      <li>
        <a class="dropdown-item d-flex align-items-center" href="http://127.0.0.1:8000/keluar">
          <i class="bi bi-box-arrow-right me-2"></i> Logout
        </a>
      </li>
    </ul>
  </div>
</div>


        <!-- App header actions end -->

      </div>
        <div class="main-container">
          @include('extranetlayout.navbar')
          <div class="app-container">                              
              @yield('headerkonten')
              <div class="app-body" id="app">                             
                  @yield('konten')                     
              </div> 
                                           
          </div>   
          <div class="app-footer">
            <span>© PT MGM 2024</span>
          </div>
        </div>                      
    </div>
    <script src="{{ url('assets/js/jquery.min.js')}}"></script>
    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/js/moment.min.js')}}"></script>
    <script src="{{url('assets/js/custom.js')}}"></script>
    <script src="{{url('assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{url('assets/vendor/overlay-scroll/custom-scrollbar.js')}}"></script>
    @yield('footer');
  </body>
</html>

<style>

  .icon-container {
    display: flex;
    flex-direction: row;
  }
  .approval-container {
    height: 71px;
    width: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .custom-link:hover {
    background-color: #F1F1F1; 
    padding: 5px; 
}
</style>