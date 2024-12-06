@if(Auth::user()->tipe === 1)
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ URL::to('/') }}">Booking Engine</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              References
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('jenispetalokal') }}">Jenis Peta Lokal</a></li>
              <li><a class="dropdown-item" href="{{ url('petalokal') }}">Peta Lokal</a></li>
              <li><a class="dropdown-item" href="{{ url('refkota') }}">Kota / Area</a></li>
              <li><a class="dropdown-item" href="{{ url('refregion') }}">Region</a></li>   
              <li class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ url('setting') }}">Setting</a></li>
              <li><a class="dropdown-item" href="{{ url('user') }}">User</a></li>
              <li><a class="dropdown-item" href="{{ url('jobs') }}">Career</a></li>
            </ul>            
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hotel Management
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('jenisakomodasi') }}">Jenis Akomodasi</a></li>
              <li><a class="dropdown-item" href="{{ url('brand') }}">Brand</a></li>
              <li><a class="dropdown-item" href="{{ url('hotelfacility') }}">Hotel Facility</a></li>
              <li><a class="dropdown-item" href="{{ url('hotel') }}">Daftar Hotel</a></li>                            
            </ul>            
          </li> 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Room Management
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('roomtype') }}">Room Type</a></li>
              <li><a class="dropdown-item" href="{{ url('amenities') }}">Room Facility</a></li> 
              <li class="dropdown-divider"></li>                           
              <li><a class="dropdown-item" href="{{ url('hotelroom') }}">Hotel Room</a></li> 
            </ul>            
          </li> 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Rate Management
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('rateplan') }}">Rate Plan</a></li> 
              <!-- <li><a class="dropdown-item" href="{{ url('rateplanhotel') }}">Rate Plan Hotel</a></li> -->
              <li><a class="dropdown-item" href="{{ url('newrateplanhotel') }}">New Rate Plan Hotel</a></li>
              <li><a class="dropdown-item" href="{{ url('rateallotment') }}">Rate Allotment</a></li>
              <!-- <li><a class="dropdown-item" href="{{ url('ratesetup') }}">New Setup</a></li>               -->
            </ul>            
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Laporan Booking
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('laporan/booking') }}">Booking - Paid</a></li> 
              <li><a class="dropdown-item" href="{{ url('alllapbooking') }}">All Booking</a></li>              
            </ul>            
          </li> 
                                       
        </ul>
      </div>
      <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      @if(Auth::check())
      <a class="nav-link px-3" href="{{ url('login/logout') }}">Sign out</a>
      @else
      <a class="nav-link px-3" href="{{ url('login') }}">Sign in</a>
      @endif
    </div>
  </div>
    </div>
  </nav>
  @else
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ URL::to('/') }}">Booking Engine</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">   
          @if(Auth::user()->tipe === 2)               
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Room Management
            </a>
            <ul class="dropdown-menu">                                       
              <li><a class="dropdown-item" href="{{ url('hotelroom') }}">Hotel Room</a></li> 
            </ul>            
          </li> 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Rate Management
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('rateplan') }}">Rate Plan</a></li> 
              <!-- <li><a class="dropdown-item" href="{{ url('rateplanhotel') }}">Rate Plan Hotel</a></li> -->
              <li><a class="dropdown-item" href="{{ url('newrateplanhotel') }}">New Rate Plan Hotel</a></li>
              <li><a class="dropdown-item" href="{{ url('rateallotment') }}">Rate Allotment</a></li>
              <!-- <li><a class="dropdown-item" href="{{ url('ratesetup') }}">New Setup</a></li>               -->
            </ul>            
          </li>
          @endif
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Laporan Booking
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ url('laporan/booking') }}">Booking - Paid</a></li> 
              <!-- <li><a class="dropdown-item" href="{{ url('alllapbooking') }}">All Booking</a></li>               -->
            </ul>            
          </li> 
                                       
        </ul>
      </div>
      <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      @if(Auth::check())
      <a class="nav-link px-3" href="{{ url('login/logout') }}">Sign out</a>
      @else
      <a class="nav-link px-3" href="{{ url('login') }}">Sign in</a>
      @endif
    </div>
  </div>
    </div>
  </nav>
  @endif

