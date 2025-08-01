<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="ri-car-line"></i><span>Kendaraan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/dashboard/jenis_kendaraan">
              <i class="bi bi-circle"></i><span>Jenis Kendaraan</span>
            </a>
          </li>
          <li>
            <a href="/dashboard/armada">
              <i class="bi bi-circle"></i><span>Armada</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bx bxs-credit-card"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/dashboard/peminjaman">
              <i class="bi bi-circle"></i><span>Peminjaman</span>
            </a>
          </li>
          <li>
            <a href="/dashboard/pembayaran">
              <i class="bi bi-circle"></i><span>Pembayaran</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard/profil">
          <i class="bi bi-person"></i>
          <span>Profil</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard/contact">
          <i class="bi bi-envelope"></i>
          <span>Kontak</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <i class="bi bi-box-arrow-right"></i>
          <span>{{ __('Logout') }}</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
        </form>
      </li><!-- End Login Page Nav -->

      <li class="nav-heading">Back</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/">
          <i class="ri-arrow-left-circle-line"></i>
          <span>Kembali ke landingpage</span>
        </a>
      </li><!-- End Contact Page Nav -->
      

      <!-- End Blank Page Nav -->

    </ul>

  </aside>