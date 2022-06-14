<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <form class="form-inline">
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
    </form>

    <!-- Topbar Navbar BAWAH-->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 12, 2019</div>
                        <span class="font-weight-bold">A new monthly report is ready to
                            download!</span>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-success">
                            <i class="fas fa-donate text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 7, 2019</div>
                        $290.29 has been deposited into your account!
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-warning">
                            <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 2, 2019</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                    Alerts</a>
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Pilihan Lab</span>
                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
            </a>
            <!-- Dropdown - User Information -->
            
<?php
if($_SESSION['User_level_id'] == "1"){
    $qry = mysqli_query($conn, "SELECT * FROM lab ");
}
else{
 $qry = mysqli_query($conn, "SELECT * FROM tr_userlab LEFT JOIN lab ON tr_userlab.Lab_id=lab.Lab_id WHERE User_tag=". $_SESSION['User_tag']);
//  $qry2 = mysqli_query($conn, "SELECT * FROM pinjam LEFT JOIN lab ON pinjam.Pinjam_id=lab.Lab_id WHERE Pinjam_user_tag=". $_SESSION['User_tag']);
 // print_r($data);
// exit;
}
?>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <?php while ($data = mysqli_fetch_assoc($qry)):?>    
            <a class="dropdown-item" href="switchlab/<?php echo $data['Lab_id']?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            <?php echo $data['Lab_nama']?>
                </a>
                <?php endwhile; ?>

                <?php while ($data = mysqli_fetch_assoc($qry)):?>    
            <a class="dropdown-item" href="switchlab/<?php echo $data['Lab_id']?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            <?php echo $data['Lab_nama']?>
                </a>
                <?php endwhile; ?>

            </div>
        </li>


        <div class="topbar-divider d-none d-sm-block"></div>
<?php 
$qryuser = mysqli_query($conn, "SELECT * FROM user  WHERE User_tag= ". $_SESSION['User_tag']);
$data = mysqli_fetch_array($qryuser);

?>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['User_nama']?></span>
                <img class="img-profile rounded-circle" src="http://localhost/websitePeminjaman/user-foto/<?php echo $data["User_foto"]?>">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="bantuan">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Bantuan
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->