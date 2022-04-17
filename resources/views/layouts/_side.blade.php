<style>
  @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&family=Poppins:ital,wght@0,500;0,700;1,400&display=swap');
  .sidebar-brand a {
    font-family: 'Poppins';
    font-size: 20px;
    letter-spacing: 2px;
    color: #1038E9;
  }
  .logo span {
    color: #223279;
}
</style>

<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="" class="logo">HOTEL <span>DANZ</span></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="">HD</a>
          </div>
          <ul class="sidebar-menu">
            @if(auth()->user()->role=="admin")
            <li class="menu-header">Dashboard</li>
              <li class="active"><a class="nav-link" href="/admin/"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
              <li class="menu-header">Website</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Modul Pengguna</span></a>
                <ul class="dropdown-menu">
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
                </ul>
              </li>
            @endif
            <li><a class="nav-link" href="/admin/reservation"><i class="fas fa-clipboard"></i> <span>Reservasi</span></a></li>
          </ul>

        </aside>
      </div>