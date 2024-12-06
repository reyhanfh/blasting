<!doctype html>
<html lang="en">
  @include('template.bookingheader')
    @section('header')
    
    @endsection
  </head>
  <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <div id="app">             
        <div class="container-xxl bg-white p-0">
            @include('template.bookingnav')
        </div>
        @yield('konten')
    </div>    
    @include('template.bookingfooter')        
  </body>
</html>
<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@yield('footer')
</html>
