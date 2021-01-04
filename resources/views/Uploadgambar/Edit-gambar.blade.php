<!DOCTYPE html>
<html lang="en">
<head>
    @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        @include('Template.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Starter Page</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>

                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">

                        <h3>Ubah Gambar</h3>

                    </div>

                    <div class="card-body">
                        <form action="{{ url('update-gambar', $dt->id) }}" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" id="nama" name="nama" class="form-control" value="{{ $dt->nama }}">
                            </div>
                            <div class="form-group">
                                <input type="file" id="gambar" name="gambar">
                            </div>
                            <div class="form-group">
                                <img src="{{ asset('img/'. $dt->gambar ) }}" height="10%" width="50%" alt="" srcset="">
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Ubah Data</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        @include('Template.footer')
    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    @include('Template.script')
</body>
</html>
