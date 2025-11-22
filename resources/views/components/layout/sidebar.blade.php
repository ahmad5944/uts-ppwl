<aside class="sidebar-argon bg-white bg-opacity-75 vh-100 ps-4 pt-3 p-5 border-0 rounded-4 d-flex flex-column align-items-stretch" style="backdrop-filter: blur(2px); min-width:220px; margin: 24px 0 0 15px !important;;">
    <div class="mb-4 text-center">
        <span class="fs-4 fw-bold text-primary"><i class=''></i> Menu</span>
    </div>
    <ul class="nav flex-column gap-1">
        <li class="nav-item">
            <a class="nav-link sidebar-link d-flex align-items-center gap-2 rounded-3 px-3 py-2" href="/dashboard">
                <i class="bx bx-home fs-5"></i> <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link sidebar-link d-flex align-items-center gap-2 rounded-3 px-3 py-2" href="/categories">
                <i class="bx bx-category fs-5"></i> <span>Kategori</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link sidebar-link d-flex align-items-center gap-2 rounded-3 px-3 py-2" href="/products">
                <i class="bx bx-cube fs-5"></i> <span>Produk</span>
            </a>
        </li>
    </ul>
</aside>
@push('scripts')
<style>
    .sidebar-argon {
        transition: box-shadow .2s, background .2s;
        box-shadow: none !important;
    }
    .sidebar-link {
        color: #344767;
        font-weight: 500;
        transition: background .2s, color .2s;
    }
    .sidebar-link:hover, .sidebar-link.active {
        background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important;
        color: #fff !important;
        box-shadow: none !important;
    }
    .sidebar-link i {
        transition: color .2s;
    }
    .sidebar-link.active i, .sidebar-link:hover i {
        color: #fff !important;
    }
    .sidebar-argon .nav-link {
        font-size: 1rem;
    }
    .sidebar-argon .nav-item + .nav-item {
        margin-top: 0.25rem;
    }
</style>
<script>
    // Active link highlight
    document.querySelectorAll('.sidebar-link').forEach(link => {
        if (window.location.pathname.startsWith(link.getAttribute('href'))) {
            link.classList.add('active');
        }
    });
</script>
@endpush
@push('scripts')
<style>
    .sidebar-argon {
        transition: box-shadow .2s, background .2s;
    }
    .sidebar-link {
        color: #344767;
        font-weight: 500;
        transition: background .2s, color .2s;
    }
    .sidebar-link:hover, .sidebar-link.active {
        background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important;
        color: #fff !important;
        box-shadow: 0 2px 8px 0 rgba(17,113,239,.08);
    }
    .sidebar-link i {
        transition: color .2s;
    }
    .sidebar-link.active i, .sidebar-link:hover i {
        color: #fff !important;
    }
    .sidebar-argon .nav-link {
        font-size: 1rem;
    }
    .sidebar-argon .nav-item + .nav-item {
        margin-top: 0.25rem;
    }
    .sidebar-argon {
        box-shadow: 0 0.5rem 1.2rem rgba(17,113,239,.08);
    }
</style>
<script>
    // Active link highlight
    document.querySelectorAll('.sidebar-link').forEach(link => {
        if (window.location.pathname.startsWith(link.getAttribute('href'))) {
            link.classList.add('active');
        }
    });
</script>
@endpush
