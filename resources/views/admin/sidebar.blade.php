<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas mt-5" id="sidebar">
    <ul class="nav">
      <br>
      <br>
      <li class="nav-item mt-3">
        <a class="nav-link" href="{{route('dashboard')}}">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('paket-index')}}">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Package</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('galeri-index')}}">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Gallery</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('pesan-index')}}">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Booking</span>
        </a>
      </li>
      <!--  -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); 
												document.getElementById('logout-form').submit();" style="color: white;">
          <i class="fa fa-power-off"></i> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </li>
    </ul>
  </nav>