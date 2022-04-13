<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">HOTEL DANZ</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">HTL</a>
          </div>
          <ul class="sidebar-menu">
            @if(auth()->user()->role=="admin")
            <li class="menu-header">Dashboard</li>
              <li class="active"><a class="nav-link" href="/admin/"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
              <li class="menu-header">Website</li>
              <li><a class="nav-link" href="blank.html"><i class="fas fa-globe-asia"></i> <span>Identitas Website</span></a></li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Modul Pengguna</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="index-0.html">Akun Saya</a></li>
                  <li><a class="nav-link" href="/admin/receptionist">Staff</a></li>
                  <li><a class="nav-link" href="/admin/guest">Tamu</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hotel"></i><span>Modul Hotel</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="/admin/room-type">Tipe Kamar</a></li>
                  <li><a class="nav-link" href="/admin/facility-room">Fasilitas Kamar</a></li>
                  <li><a class="nav-link" href="/admin/room">Kamar</a></li>
                  <li><a class="nav-link" href="/admin/facility-hotel">Fasilitas Hotel</a></li>
                  <!-- <li><a class="nav-link" href="/admin/reservation">Reservasi</a></li> -->
                </ul>
              </li>
            @endif
            <li><a class="nav-link" href="/admin/reservation"><i class="fas fa-globe-asia"></i> <span>Reservasi</span></a></li>
          </ul>

        </aside>
      </div>