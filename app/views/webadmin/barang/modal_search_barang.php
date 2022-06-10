<!-- Modal -->
<div class="modal fade" id="popup_search_barang" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Ditemukan</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
          <?php
           if (isset($_GET['cari'])):
            $id_barang = $_GET['cari']; 
            $sql = "
            SELECT a.*,b.Lab_nama nama_lab 
            FROM barang a 
            LEFT JOIN lab b ON a.Barang_lab_id = b.Lab_id 
            WHERE a.Barang_id = '".$id_barang."' 
            
            ";
            $query=mysqli_query($conn, $sql);
            $data = mysqli_fetch_array($query);
            // var_dump($user);
           if ($data != NULL):
                    
                   if($data['Barang_foto']!="" && $data['Barang_foto']!=NULL)
                    {
                      $img_barang = '<img src="../img/'.$data['Barang_foto'].'" style="width: 100px;">';
                    }else{
                      $img_barang = "-";
                    }

          ?>
            <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td> Gambar </td> 
                    <td> <?php echo $img_barang ?> </td> 
                </tr>
                 
                <!-- <tr>
                    <td> Lab </td> 
                    <td> <?php echo $data['nama_lab'] ?>  </td> 
                </tr> -->
                <tr>
                    <td width='35%'><strong>ID Barang </strong></td>
                    <td><?php echo $data['Barang_id'] ?></td>
                </tr>
                <tr>
                    <td><strong> Nama Barang </strong></td>
                    <td><?php echo $data['Barang_nama'] ?></td>
                </tr>
                <tr>
                    <td><strong> Merk Barang </strong></td>
                    <td><?php echo $data['Barang_merk'] ?></td>
                </tr>
                <tr>
                    <td><strong> Loker Barang</strong></td>
                    <td><?php echo $data['Barang_Loker'] ?></td>
                </tr>
                <tr>
                    <td><strong> Total Barang</strong></td>
                    <td><?php echo $data['Barang_jumlah'] ?></td>
                </tr>
                <tr>
                    <td><strong> Sisa Barang</strong></td>
                    <td><?php echo $data['Barang_jumlah'] ?></td>
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