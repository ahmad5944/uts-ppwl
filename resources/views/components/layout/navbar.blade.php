<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">

    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        <ul class="navbar-nav flex-row align-items-center ms-auto">

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">

                    {{-- ICON PROFIL (GANTI AVATAR GAMBAR) --}}
                    <div class="avatar avatar-online d-flex align-items-center justify-content-center 
                        bg-primary text-white rounded-circle" style="width:40px; height:40px;">
                        <i class="bx bx-user fs-4"></i>
                    </div>

                </a>

                <ul class="dropdown-menu dropdown-menu-end">

                    <!-- PROFILE HEADER DROPDOWN -->
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online d-flex align-items-center justify-content-center 
                                        bg-primary text-white rounded-circle" style="width:40px; height:40px;">
                                        <i class="bx bx-user fs-4"></i>
                                    </div>
                                </div>

                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                    <small class="text-muted">{{ Auth::user()->role ?? 'User' }}</small>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li><div class="dropdown-divider"></div></li>

                    {{-- MENU PROFILE --}}
                    {{-- <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">Settings</span>
                        </a>
                    </li> --}}

                    {{-- <li><div class="dropdown-divider"></div></li> --}}

                    {{-- LOGOUT --}}
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>

                </ul>
            </li>
            <!--/ User -->
        </ul>

    </div>
</nav>
