<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-center">
                <div class="logo">
                    <img src="assets/images/logo/logo-fisip.png" alt="Logo" srcset="" height="100">
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li class="sidebar-item {{ $title === 'Dashboard Admin' ? 'active' : '' }}">
                    <a href="/dashboard" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ $title === 'Kelola Inventaris' ? 'active' : '' }}">
                    <a href="/menu-inventaris" class='sidebar-link'>
                        <svg class="bi" width="1em" height="1em" fill="currentColor">
                            <use
                                xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#file-earmark-spreadsheet-fill" />
                        </svg>
                        <span>Kelola Inventaris</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/menu-ruangan" class='sidebar-link'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                            <path
                                d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                        </svg>
                        <span>Kelola Rencana Inventaris</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/menu-ruangan" class='sidebar-link'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-file-earmark-bar-graph-fill" viewBox="0 0 16 16">
                            <path
                                d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm.5 10v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1z" />
                        </svg>
                        <span>Grafik Inventaris</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/menu-peminjam" class='sidebar-link'>
                        <svg class="bi" width="1em" height="1em" fill="currentColor">
                            <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#journal-text" />
                        </svg>
                        <span>Kelola Peminjaman</span>
                    </a>
                </li>

                {{-- <li class="sidebar-item {{ $title === 'Kelola Ruangan' ? 'active' : '' }}">
                    <a href="/menu-ruangan" class='sidebar-link'>
                        <i class="bi bi-building"></i>
                        <span>Kelola Ruangan</span>
                    </a>
                </li>

                <li class="sidebar-item {{ $title === 'Kelola Aset' ? 'active' : '' }}">
                    <a href="/menu-aset" class='sidebar-link'>
                        <svg class="bi" width="1em" height="1em" fill="currentColor">
                            <use
                                xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#file-earmark-spreadsheet-fill" />
                        </svg>
                        <span>Kelola Aset</span>
                    </a>
                </li>

                <li class="sidebar-item {{ $title === 'Kelola Peminjam' ? 'active' : '' }}">
                    <a href="/menu-peminjam" class='sidebar-link'>
                        <svg class="bi" width="1em" height="1em" fill="currentColor">
                            <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#journal-text" />
                        </svg>
                        <span>Kelola Peminjaman</span>
                    </a>
                </li> --}}

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
