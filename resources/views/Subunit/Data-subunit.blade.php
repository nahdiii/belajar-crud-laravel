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
                                <li class="breadcrumb-item active">Data Subunit</li>
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
                        <div class="card-tools">
                            <a href="{{ route('create-unit') }}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>

                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>#</th>
                                <th>Unit</th>
                                <th>Subunit</th>

                                <th>Aksi</th>

                            </tr>
                            @foreach ($dtSubunit as $item)

                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td> {{ $item->unit->namaunit }} </td>
                                <td> {{ $item->namasubunit }} </td>

                                <td>
                                    {{-- <a href="{{ url('edit-pegawai',$item->id) }}"><i class="fas fa-edit"></i></a>
                                    |
                                    <a href="{{ url('delete-pegawai',$item->id) }}"><i class="fas fa-trash-alt" style="color: red"></i></a> --}}
                                </td>
                            </tr>

                            @endforeach



                        </table>

                        @foreach ($dtPeg as $item)
                        <ul>

                            <li>
                                {{ $item->nama }}


                            </li>
                        </ul>
                        @endforeach
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

    @include('sweetalert::alert')
</body>
</html>
