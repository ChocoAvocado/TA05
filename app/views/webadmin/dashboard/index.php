<?php 

	require_once __DIR__.('/../../function.php'); 

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman <?= $data['judul']; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= BASEURL; ?>/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= BASEURL; ?>/css/sb-admin-2.css" rel="stylesheet">

    <link href="<?= BASEURL; ?>/plugins/datetimepicker/jquery.datetimepicker.min.css" rel="stylesheet" />

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- adding sidebar here -->
        <?php include __DIR__."/../templates/sidebar.php"?>



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include __DIR__."/../templates/topbar.php"; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="d-flex mb-4">
                        <div class="p-2">
                            <h5 class="mb-2 text-gray-800"><i><b>TA-05 Implementasi Monitoring Peminjaman Alat
                                        Lab</b></i></h5>
                        </div>

                        <div class="ml-auto p-2">
                            <a class="btn btn-success" href="formpeminjaman">

                                <div class="text font-weight-bold text-white text-uppercase mb-1">
                                    Peminjaman
                                </div>

                            </a>
                        </div>
                        <div class="p-2">

                            <a class="btn btn-danger" href="formpengembalian">

                                <div class="col mr-2">

                                    <div class="text font-weight-bold text-white text-uppercase mb-1">
                                        Pengembalian
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>


                    <div class="row">
                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
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
            </div>
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
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->




    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="/websitePeminjaman/public/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="<?= BASEURL; ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASEURL; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= BASEURL; ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= BASEURL; ?>/js/sb-admin-2.js"></script>

    <!-- Page level plugins -->
    <script src="<?= BASEURL; ?>/vendor/chart.js/Chart.min.js"></script>






    <!----------- BAR CHART ------------>


    <script>
    const total = [];


    total[1] = <?php echo json_encode($chart_bar_array[1]); ?>;
    total[2] = <?php echo json_encode($chart_bar_array[2]); ?>;
    total[3] = <?php echo json_encode($chart_bar_array[3]); ?>;
    total[4] = <?php echo json_encode($chart_bar_array[4]); ?>;
    total[5] = <?php echo json_encode($chart_bar_array[5]); ?>;
    total[6] = <?php echo json_encode($chart_bar_array[6]); ?>;
    total[7] = <?php echo json_encode($chart_bar_array[7]); ?>;
    total[8] = <?php echo json_encode($chart_bar_array[8]); ?>;
    total[9] = <?php echo json_encode($chart_bar_array[9]); ?>;
    total[10] = <?php echo json_encode($chart_bar_array[10]); ?>;
    total[11] = <?php echo json_encode($chart_bar_array[11]); ?>;
    total[11] = <?php echo json_encode($chart_bar_array[12]); ?>;




    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    function number_format(number, decimals, dec_point, thousands_sep) {
        // *     example: number_format(1234.56, 2, ',', ' ');
        // *     return: '1 234,56'
        number = (number + '').replace(',', '').replace(' ', '');
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function(n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
            };
        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }
        return s.join(dec);
    }




    // Bar Chart Example
    var ctx = document.getElementById("myBarChart");

    var myBarChart = new Chart(ctx, {
        type: 'bar',

        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Juni", "Juli", "Aug", "Sep", "Okt", "Nov", "Des"],
            datasets: [{

                label: "barang dipinjam",
                backgroundColor: "#4e73df",
                hoverBackgroundColor: "#2e59d9",
                borderColor: "#4e73df",
                data: [total[1], total[2], total[3], total[4], total[5], total[6], total[7], total[8],
                    total[9], total[10], total[11], total[12]
                ],
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 6
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 100,
                        maxTicksLimit: 10,
                        padding: 10,
                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            return number_format(value) + " unit";
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ' ' + number_format(tooltipItem.yLabel) + " unit";
                    }
                }
            },
        }
    });
    </script>



    <!----------- PIE CHART ------------->



    <script>
    const baranglab = [];

    baranglab[0] = <?php echo json_encode($jumlahbaranglab_array[2]); ?>;
    baranglab[1] = <?php echo json_encode($jumlahbaranglab_array[3]); ?>;


    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["di Lab", "dipinjam"],
            datasets: [{
                data: [baranglab[1], baranglab[0]],
                backgroundColor: ['#4e73df', '#1cc88a'],
                hoverBackgroundColor: ['#2e59d9', '#17a673'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });
    </script>




</body>

<!-------------------    JS FOR BAR CHART  ---------------------------------------------------------------->




</html>