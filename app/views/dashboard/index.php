<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- adding sidebar here -->
        <?php include('sidebar.php'); ?>

        <div class="container" id="blur">

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <?php include('topbar.php'); ?>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex justify-content-center mb-4">
                            <h1 class="h3 mb-0 text-gray-800"><i><b>TA-05 Implementasi Monitoring Peminjaman Alat
                                        Lab</b></i></h1>
                        </div>


                        <!-- Content Row -->
                        <div class="row justify-content-center">

                            <!-- pejetan peminjaman -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <a class="btn btn-success" href="formpeminjaman.php">
                                    <div class="card-tombol">

                                        <div class="col mr-2">
                                            <div class="col-auto">
                                                <i class="fas fa-plus-circle fa-1x text-gray-300"></i>
                                            </div>
                                            <div class="text-xs font-weight-bold text-white-50 text-uppercase mb-1">
                                                <font size="+1">Peminjaman</font>
                                            </div>

                                        </div>

                                    </div>
                                </a>
                            </div>

                            <div class="col-xl-3 col-md-6 mb-4">
                                <a class="btn btn-danger" href="formpengembalian.php">
                                    <div class="card-tombol justify-content-center">

                                        <div class="col mr-2">
                                            <div class="col-auto">
                                                <i class="fas fa-hands-helping fa-1x text-gray-300"></i>
                                            </div>
                                            <div class="text-xs font-weight-bold text-white-50 text-uppercase mb-1">
                                                <font size="+1">Pengembalian</font>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <!-- Content Row -->
                        <div class="row justify-content-center">


                            <!-- Pie Chart -->
                            <div class="col-xl-4 col-lg-5">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Inventaris Lab</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-pie pt-4 pb-2">
                                            <canvas id="myPieChart"></canvas>
                                        </div>
                                        <div class="mt-4 text-center small">
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-primary"></i> di Lab
                                            </span>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-success"></i> dipinjam
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8 col-lg-7">
                                <!-- Bar Chart -->
                                <div class="card-batang shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Jumlah Peminjaman</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-bar">
                                            <canvas id="myBarChart"></canvas>
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
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Politeknik ATMI Surakarta 2022</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>