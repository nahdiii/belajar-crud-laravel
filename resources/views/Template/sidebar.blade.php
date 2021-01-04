<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('Gambar/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('Gambar/Laravel.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Belajar CRUD Laravel</a>

            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href=" {{ route('data-pegawai') }} " class="nav-link">
                                Data Pegawai
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" {{ route('cetak-data-pegawai-form') }} " class="nav-link">
                                Cetak Data Pegawai
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" {{ route('data-gambar') }} " class="nav-link">
                                Data Gambar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" {{ route('data-unit') }} " class="nav-link">
                                Data Unit
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=" {{ route('data-subunit') }} " class="nav-link">
                                Data Subunit
                            </a>
                        </li>


                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
