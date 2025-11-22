<nav class="navbar navbar-expand-lg navbar-light bg-white bg-opacity-75 border-0 rounded-4 mt-3 mx-3 px-3 py-2" style="backdrop-filter: blur(2px);">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold text-primary d-flex align-items-center gap-2" href="/">
            <i class='bx bx-layer'></i> UTS PPWL
        </a>
        @auth
            <div 
                x-data 
                class="d-flex align-items-center gap-2 ms-auto"
            >
                <button 
                    type="button"
                    class="btn btn-link d-flex align-items-center gap-2 text-decoration-none text-dark"
                    @click.prevent="
                        Swal.fire({
                            title: 'Logout?',
                            text: 'Apakah Anda yakin ingin logout?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Logout',
                            cancelButtonText: 'Batal',
                            reverseButtons: true,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $refs.logoutForm.submit();
                            }
                        });
                    "
                >
                    <i class="bx bx-user-circle fs-3"></i>
                    <span class="fw-semibold">{{ Auth::user()->name }}</span>
                </button>
                <form x-ref="logoutForm" method="POST" action="{{ route('logout') }}" class="d-none">
                    @csrf
                </form>
            </div>
        @endauth
    </div>
</nav>
