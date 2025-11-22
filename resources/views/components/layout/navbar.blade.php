<nav class="navbar navbar-expand-lg navbar-light bg-white bg-opacity-75 border-0 rounded-4 mt-3 mx-3 px-3 py-2" style="backdrop-filter: blur(2px);">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-primary d-flex align-items-center gap-2" href="/">
            <i class='bx bx-layer'></i> UTS PPWL
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center gap-2">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item position-relative" style="min-width: 170px;">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button type="button" class="d-flex align-items-center gap-2 bg-transparent border-0 p-0" style="cursor:pointer;">
                                    <span class="avatar avatar-sm rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width:36px;height:36px;font-size:1.2rem;">
                                        {{ strtoupper(substr(Auth::user()->name,0,1)) }}
                                    </span>
                                    <span class="fw-semibold text-dark">{{ Auth::user()->name }}</span>
                                    <i class='bx bx-chevron-down'></i>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <button type="button" class="dropdown-item text-danger d-flex align-items-center gap-2" x-on:click="$dispatch('open-modal', 'profile-logout-modal')">
                                    <i class='bx bx-log-out'></i> Logout
                                </button>
                            </x-slot>
                        </x-dropdown>
                        <x-modal name="profile-logout-modal">
                            <div class="p-6">
                                <h2 class="text-lg font-semibold mb-4">Logout</h2>
                                <p class="mb-6">Apakah Anda yakin ingin logout?</p>
                                <div class="flex justify-end gap-3">
                                    <button type="button" class="px-4 py-2 rounded bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-600" x-on:click="$dispatch('close-modal', 'profile-logout-modal')">Batal</button>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="px-4 py-2 rounded bg-red-600 text-white hover:bg-red-700 flex items-center gap-2">
                                            <i class='bx bx-log-out'></i> Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </x-modal>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
