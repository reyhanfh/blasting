<!doctype html>
<html lang="en">
  @include('template.header')
    @section('header')
    
    @endsection
  </head>
  <body>
    <div id="app">     
    @include('template.navbar')
    @yield('konten')
    </div>    
  </body>
</html>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> --}}
<script src="{{ url('/js/bootstrap.bundle.min.js') }}"></script>
@yield('footer')