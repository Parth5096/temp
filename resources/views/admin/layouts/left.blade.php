<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link @yield('dashboard')" href="{{route('dashboard')}}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link @yield('dashboard')" href="{{route('user')}}">
      <!-- <i class="bi bi-file-earmark"></i> -->
      <i class="bi bi-person"></i>
      <span>User Management</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link @yield('profile')" href="{{route('profile')}}">
      <!-- <i class="bi bi-file-earmark"></i> -->
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link @yield('password')" href="{{route('change.password')}}">
      <i class="bi bi-key-fill"></i>
      <span>Change Password </span>
    </a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{route('logout')}}">
      <!-- <i class="bi bi-file-earmark"></i> -->
      <i class="bi bi-box-arrow-right"></i>
      <span>Sign up</span>
    </a>
  </li><!-- End Blank Page Nav -->

</ul>

</aside><!-- End Sidebar-->