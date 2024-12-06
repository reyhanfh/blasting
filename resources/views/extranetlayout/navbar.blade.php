<nav id="sidebar" class="sidebar-wrapper">          
          <div class="shop-profile">
            <p class="mb-1 fw-bold text-primary">Corporate</p>
            <p class="m-0">PT Metropolitan Golden Management</p>
          </div>
          <!-- Sidebar menu starts -->
          <div class="sidebarMenuScroll">
            <ul class="sidebar-menu">
              <!-- <li class="active current-page">
                <a href="{{ url('dashboard') }}">
                  <i class="bi bi-pie-chart"></i>
                  <span class="menu-text">Dashboard</span>
                </a>
              </li> -->
              <li class="treeview">
                <a href="#!">
                <i class="bi bi-person"></i>
                  <span class="menu-text">Data Pribadi</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="{{ url('biodata') }}">Biodata</a>
                  </li>                               
                </ul>
              </li>


              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">Master Data</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="{{ url('daftardepartemen') }}">Daftar Departemen</a>
                  </li>
                  <li>
                    <a href="{{ url('daftarjenispendidikan') }}">Daftar Jenis Pendidikan</a>
                  </li> 
                  <li>
                    <a href="{{ url('daftarfakultas') }}">Daftar Fakultas</a>
                  </li>
                  <li>
                    <a href="{{ url('daftarjurusan') }}">Daftar Jurusan</a>
                  </li>   
                  <li>
                    <a href="{{ url('harilibur') }}">Hari Libur</a>
                  </li>                                   
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                <i class="bi bi-diagram-3"></i>
                  <span class="menu-text">Kepegawaian</span>
                </a>
                <ul class="treeview-menu">
                  <!-- <li>
                    <a href="{{ url('trainee') }}">DW/Trainee</a>
                  </li> -->
                  <li>
                    <a href="{{ url('daftarpegawai') }}">Daftar Pegawai</a>
                  </li>
                  <li>
                    <a href="{{ url('unithotel') }}">Unit Hotel</a>
                  </li>
                  <li>
                    <a href="{{ url('leveljabatan') }}">Level Jabatan</a>
                  </li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                <i class="bi bi-newspaper"></i>
                  <span class="menu-text">SK & Kontrak</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="{{ url('kontrakpegawai') }}">Kontrak Pegawai</a>
                  </li>            
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                <i class="bi bi-bicycle"></i>
                  <span class="menu-text">Cuti</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="{{ url('cuti/jeniscuti') }}">Jenis Cuti</a>
                  </li>
                  <li>
                    <a href="{{ url('cuti/pengajuancuti') }}">Pengajuan Cuti</a>
                  </li>            
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                <i class="bi bi-airplane"></i>
                  <span class="menu-text">Perjalanan Dinas</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="{{ url('perjalanandinas/pengajuanpjs') }}">Pengajuan PJS</a>
                  </li>
                  <li>
                    <a href="{{ url('#') }}">Data PJS</a>
                  </li>            
                </ul>
              </li>
              <!-- <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stickies"></i>
                  <span class="menu-text">References</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="{{ url('jenispetalokal') }}">Jenis Peta Lokasi</a>
                  </li>
                  <li>
                    <a href="{{ url('petalokal') }}">Peta Lokasi</a>
                  </li> 
                  <li>
                    <a href="{{ url('refkota') }}">Kota / Area</a>
                  </li>
                  <li>
                    <a href="{{ url('refregion') }}">Region</a>
                  </li>                                   
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-building-fill-gear"></i>
                  <span class="menu-text">Hotel Management</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="{{ url('jenisakomodasi') }}">Jenis Akomodasi</a>
                  </li>
                  <li>
                    <a href="{{ url('brand') }}">Brand</a>
                  </li>
                  <li>
                    <a href="{{ url('hotelfacility') }}">Fasilitas Hotel</a>
                  </li>
                  <li>
                    <a href="{{ url('hotel') }}">Daftar Hotel</a>
                  </li>                                                                        
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-stack-overflow"></i>
                  <span class="menu-text">Room Management</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="{{ url('roomtype') }}">Type Kamar</a>
                  </li>   
                  <li>
                    <a href="{{ url('amenities') }}">Fasilitas Kamar</a>
                  </li>                   
                  <li>
                    <a href="{{ url('hotelroom') }}">Daftar Kamar</a>
                  </li>                     
                </ul>
              </li>                                        
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-ui-checks-grid"></i>
                  <span class="menu-text">Rate Management</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="{{url('rateplan')}}">Rate Plan</a>
                  </li>
                  <li>
                    <a href="{{ url('newrateplanhotel') }}">Rate Plan Hotel</a>
                  </li>
                  <li>
                    <a href="{{ url('rateallotment') }}">Rate Allotment</a>
                  </li>                  
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-window-sidebar"></i>
                  <span class="menu-text">Laporan</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="{{ url('laporan/booking') }}">Booking</a>
                  </li>                  
                </ul>
              </li>
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-window-sidebar"></i>
                  <span class="menu-text">Blasting Management</span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="{{ url('blasting/kontak') }}">Kontak</a>
                  </li>     
                  <li>
                    <a href="{{ url('blasting/segmentasi') }}">Segmentasi / Group</a>
                  </li> 
                  <li>
                    <a href="{{ url('blasting/template') }}">Template Pesan</a>
                  </li>
                  <li>
                    <a href="{{ url('blasting/champaign') }}">Champaign</a>
                  </li> 
                  <li>
                    <a href="{{ url('blasting/payment') }}">Payment Method</a>
                  </li>     
                  <li>
                    <a href="{{ url('blasting/transfer') }}">Hotel Transfer Deposit</a>
                  </li>   
                  <li>
                    <a href="{{ url('blasting/deposit') }}">Hotel Deposit</a>
                  </li>                                
                </ul>
              </li> 
              
              <li class="treeview">
                <a href="#!">
                  <i class="bi bi-person-fill-gear"></i>
                  <span class="menu-text">User</span>
                </a>
                <ul class="treeview-menu">                  
                  <li>
                    <a href="{{ url('updatepassword') }}">Ganti Password</a>
                  </li>                  
                </ul>
              </li>                                       
            </ul> -->
          </div>
          <!-- Sidebar menu ends -->

        </nav>