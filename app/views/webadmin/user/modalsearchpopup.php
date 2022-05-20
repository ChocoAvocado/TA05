<!-- Modal -->
<div class="modal fade" id="popupsearch" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Ditemukan</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <?php
           if (isset($_GET['cari'])):
            $ambilsemuadatauser=mysqli_query($conn,"SELECT*FROM user WHERE User_tag = '".$_GET['cari']."'");
            $user = mysqli_fetch_array($ambilsemuadatauser);
            // var_dump($user);
           if ($user != NULL):
          ?>
            <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td><strong></strong></td> 
                    <td><img src='https://pinjamalat-ta05.com/webadmin/user-foto/<?php echo $user['User_foto'] ?>' width="80"></td> 
                </tr>
                <tr>
                    <td width='35%'><strong>ID User</strong></td>
                    <td><?php echo $user['User_id'] ?></td>
                </tr>

                <tr>
                    <td><strong>Tag User</strong></td>
                    <td><?php echo $user['User_tag'] ?></td>
                </tr>
                
                <tr>
                    <td><strong>Email User</strong></td>
                    <td><?php echo $user['User_email'] ?></td>
                </tr>

                <tr>
                    <td><strong>Nama User</strong></td>
                    <td><?php echo $user['User_nama'] ?></td>
                </tr>
                <tr>
                    <td><strong>Prodi User</strong></td>
                    <td><?php echo $user['User_prodi'] ?></td>
                </tr>

                <tr>
                    <td><strong>Koin User</strong></td>
                    <td><?php echo $user['User_koin'] ?></td>
                </tr>
            </thead>
            </table>
        <?php else: ?>
        <div class='alert alert-danger'> Data Tidak Ada </div>
        <?php endif;endif; ?> 

      </div>
    </div>
  </div>
</div>