<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Perpustakaan Digital D</title>
    <!-- loader-->
    <link href="/assets/css/pace.min.css" rel="stylesheet" />
    <script src="/assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="/assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="/assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="/assets/css/app-style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="index.html">
                    <img src="/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">Perpus Digi</h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li class="">
                    <a href="{{ url('dashadmin') }}">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="icons.html">
                        <i class="zmdi zmdi-invert-colors"></i> <span>Data Pengembalian</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('admin/bukudata') }}">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Data Buku</span>
                    </a>
                <li>
                    <a href="tables.html">
                        <i class="zmdi zmdi-grid"></i> <span>Kategori</span>
                    </a>
                </li>

                <li class="active">
                    <a href="{{ url('admin/listadmin') }}">
                        <i class="zmdi zmdi-face"></i> <span>List Admin</span>

                    </a>
                </li>



                <li>
                    <a href="{{ url('admin/adminlogin') }}" target="_blank">
                        <i class="zmdi zmdi-lock"></i> <span>Login</span>
                    </a>
                </li>

                <li class="sidebar-header">LABELS</li>
                <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a>
                </li>
                <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i>
                        <span>Warning</span></a></li>
                <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a>
                </li>

            </ul>

        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>

                </ul>


                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-item user-details">
                        <a href="javaScript:void();">
                            <div class="media">
                                <div class="avatar"><img class="align-self-start mr-3"
                                        src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                <div class="media-body">
                                    <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
                                    <p class="user-subtitle">mccoy@example.com</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
                </ul>
                </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            <div class="container-fluid">

                <!--Start Dashboard Content-->
                <h1>List Petugas</h1>
                {{-- page content --}}
                <div class="d-flex justify-content-end">
                    <a href="{{ url('admin/Registrasi') }}" type="button" class="btn btn-primary">Registrasi</a>
                </div>
                <div class="card mt-2">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Petugas id</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Email</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Level</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($petse as $i)
                                <tr>
                                    <td>{{ $i->PetugasId }}</td>
                                    <td>{{ $i->Username }}</td>
                                    <td>{{ $i->Password }}</td>
                                    <td>{{ $i->Email }}</td>
                                    <td>{{ $i->NamaLengkap }}</td>
                                    <td>{{ $i->Level }}</td>
                                    <td>{{ $i->Alamat }}</td>

                                    <td>
                                        <a type="submit" href="{{ url('edit/' . $i->PetugasId) }}"
                                            class="btn btn-secondary"><i class="bi bi-pencil-square"></i></a>
                                        <a href="hapusadmin/{{ $i->PetugasId }}"><button type="submit"
                                                class="btn btn-danger"><i class="bi bi-trash"></i></button></a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>


                <!--End Row-->

                <!--End Row-->

                <!--End Dashboard Content-->

                <!--start overlay-->
                <div class="overlay toggle-menu"></div>
                <!--end overlay-->

            </div>
            <!-- End container-fluid-->

        </div><!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

















        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2018 Dadang Theme
                </div>
            </div>
        </footer>
        <!--End footer-->

        <!--start color switcher-->
        <div class="right-sidebar">
            <div class="switcher-icon">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </div>
            <div class="right-sidebar-content">

                <p class="mb-0">Gaussion Texture</p>
                <hr>

                <ul class="switcher">
                    <li id="theme1"></li>
                    <li id="theme2"></li>
                    <li id="theme3"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>

                <p class="mb-0">Gradient Background</p>
                <hr>

                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                    <li id="theme13"></li>
                    <li id="theme14"></li>
                    <li id="theme15"></li>
                </ul>

            </div>
        </div>
        <!--end color switcher-->

    </div><!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="/assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="/assets/js/sidebar-menu.js"></script>
    <!-- loader scripts -->
    <script src="/assets/js/jquery.loading-indicator.js"></script>
    <!-- Custom scripts -->
    <script src="/assets/js/app-script.js"></script>
    <!-- Chart js -->

    <script src="/assets/plugins/Chart.js/Chart.min.js"></script>

    <!-- Index js -->
    <script src="/assets/js/index.js"></script>

    {{-- carousel js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>

</body>

</html>
