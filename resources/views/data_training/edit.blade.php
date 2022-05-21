<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Data Training</title>

    <!-- Custom fonts for this template -->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style type="text/css">
        .inputage {
             list-style: none;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    @include('template.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            @include('template.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambah Data Training</h1>
                  <!--   <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
 -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-12 col-md-9">
                                    <div class="col-lg-12">
                                        <div class="p-5">
                                            <form method="POST" action="{{ url('/data_training/update/'.$datat->id_datatraining.'') }}">
                                                @csrf
                                                <table border="0" cellpadding="10" cellspacing="0">
                                                    <tr>
                                                        <td>Age : </td>
                                                        <td><input type="number" name="age" class="form-control form-control-user" id="exampleAge" value="{{ $datat->age }}" style="-moz-appearance: textfield; " required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Year : </td>
                                                        <td><input type="number" name="year" class="form-control form-control-user" id="exampleYear" value="{{$datat->year}}" style="-moz-appearance: textfield;" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Axillary : </td>
                                                        <td><input type="number" name="axillary" class="form-control form-control-user" id="exampleAxillary" value="{{$datat->axillary}}" style="-moz-appearance: textfield; " required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Survival Status : </td> 
                                                        <td><input type="number" name="survival_status" class="form-control form-control-user" id="exampleK" value="{{$datat->survival_status}}" style="-moz-appearance: textfield; " required></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="{{ url('data_training') }}" style="text-decoration: none; list-style: none;"><input type="button" class="btn btn-primary btn-user btn-block" name="back" value="Back"></a></td>
                                                        <td><input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Tambah"></td>
                                                    </tr>
                                                </table>
                                               
                                                <br>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('template.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('template.logout_modal')

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../js/demo/datatables-demo.js"></script>

</body>

</html>
