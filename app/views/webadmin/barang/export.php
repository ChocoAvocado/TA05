<?php
 require_once __DIR__.( "function.php");
 include __DIR__."lib_qrcode/qrlib.php";
?>
<html>

<head>
    <title>Stock Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">
    </script>

</head>

<body>
    <div class="container">

        <h2>Data Barang</h2>
        <h4></h4>

        <div class="data-tables datatable-dark">
            <table class="table table-bordered" id="mauexport" width="100%" cellspacing="0">

                <!-- <tbody method="get" action=""> -->
                <tr>
                    <?php 
                                            if(isset($_SESSION['User_lab_id']))
                                            {
                                                 $Userlabid=$_SESSION['User_lab_id'];
                                                 $ambilsemuadatabarang = mysqli_query($conn, "select * from barang where Barang_lab_id=$Userlabid");
                                            }
                                            else
                                            {
                                                    $ambilsemuadatabarang = mysqli_query($conn, "select * from barang");
                                                    $i=1;
                                            } 
                                            if (isset($_POST['Barang_id'])) 
                                            {
                                                $id_barang = $_POST['Barang_id'];
                                              
                                                $query = mysqli_query($conn, "select * from barang where Barang_id= $id_barang ");
                                                $data = mysqli_fetch_array($query);
                                                echo json_encode($data);
                                            }  
                                        
                                            
                                        while($data = mysqli_fetch_array($ambilsemuadatabarang))
                                         {

                                            $kode_barcode = $data['Barang_id'];
                                            $tempdir = "img-qrcode/";
                                            if (!file_exists($tempdir))
                                                mkdir($tempdir, 0755);
                                            //$file_name = date("Ymd") . rand() . ".png";
                                            $file_name = $kode_barcode . ".png";
                                            $file_path = $tempdir . $file_name;
                                            QRcode::png($kode_barcode, $file_path, "H", 5, 6);
                                            /* param (1)qrcontent,(2)filename,(3)errorcorrectionlevel,(4)pixelwidth,(5)margin */
                                            $img_barcode = "<img src='" . $file_path . "' />";
                                            
                                            $IDBarang= $data['Barang_id'];
                                            $NamaBarang = $data['Barang_nama'];
                                            $Jumlah = $data['Barang_jumlah'];
                                            $MerekBarang = $data['Barang_merk'];
                                            $Loker =$data['Barang_Loker'];
                                            
                            ?>
                    <!-- <td><?php echo $img_barcode;?></td>
                                            <td>
                                            <?php echo $IDBarang;?>
                                            <?php echo $NamaBarang;?><br>
                                            <?php echo $MerekBarang;?>
                                            </td>          -->
                    <thead>
                        <tr>
                        <tr>
                            <td><?php echo $img_barcode ?>
                                <?php echo $data['Barang_merk'] ?>

                                <?php echo $data['Barang_nama'] ?> </td>
                            <!-- <td> &emsp; -->
                            <!-- <?php echo $data['Barang_merk'] ?> -->

                            <!-- <?php echo $data['Barang_nama'] ?>
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <?php echo $img_barcode ?> -->
                        </tr>
                        <td> <?php echo $data['Barang_id'] ?></td>

                        <!-- <td> <?php echo $data['Barang_id'] ?> </td> -->

                    </thead>
                    <?php
                                } ;  
                    ?>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script>
    window.print()
    </script>
    <!-- <script>
    $(document).ready(function() {
        $('#mauexport').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    </script> -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

</body>

</html>