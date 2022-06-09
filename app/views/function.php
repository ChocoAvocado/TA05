<?php
//PENYAMBUNG PHP 
$conn = mysqli_connect("localhost", "root", "", "peminjamanalat");
//$conn = mysqli_connect("localhost", "root", "", "peminjamanalat");
// if(isset($_POST)){
// // print_r($_POST);
// //     exit;
// }

function getUrlParam($key) {
  // $url = "http://localhost/websitePeminjaman/public/user";
  $url = $_SERVER['REQUEST_URI'];
  $parse = parse_url($url);

  if(!isset($parse['query'])) return null;

  parse_str($parse['query'], $parse_query);

  if( isset($parse_query[ $key ]) ) {
      return $parse_query[ $key ];
  }
  // print_r($url); exit;
  return null;
}
//---------------------------------USER-----------------------------------------------------------------------------//

//TAMBAH User
if (isset($_POST["addnamauser"])) {
  $data = $_POST;
  $IDUser = $data['User_id'];
  $NamaUser = $data['User_nama'];
  $Jabuser = $data['Level_nama'];
  $Prodi = $data['User_prodi'];
  $Email = $data['User_email'];
  $Pin = $data['User_pin'];
  $Tag = $data['User_tag'];
  $Koin = $data['User_koin'];
  $Nokoin = $data['User_nokoin'];
  $userFoto = $_FILES['User_foto']['name'];
  $file_tmp = $_FILES['User_foto']['tmp_name'];

  if (!empty($userFoto)) {
    move_uploaded_file($file_tmp, dirname(__FILE__) . '/webadmin/user-foto/' . $userFoto);
  }
  // print_r(dirname(__FILE__)); // buat ngecheck foto
  // exit;

  $addtotable1 = mysqli_query($conn, "insert into user (User_id,User_nama,User_level_id,User_prodi,User_email,User_pin,User_tag,User_koin,User_nokoin,User_foto)
  values ('$IDUser', '$NamaUser','$Jabuser','$Prodi','$Email','$Pin','$Tag', '$Koin', '$Nokoin', '$userFoto')"); // di tabel muncul src nya 
  //values ('$IDUser', '$NamaUser','$Jabuser','$Prodi','$Email','$Pin','$Tag', '$Koin', '$Nokoin', '/user-foto/$userFoto')"); // di tabel muncul foto 

  //   exit;
  if ($addtotable1) {
    header('location:user');
  } else {
    echo 'Gagal';
    header('location:user');
  }
}

// print_r($_POST);exit;

//EDIT User
if (isset($_POST["edituser"])) {
  $data = $_POST;
  //   print_r($data);
  //   exit;
  $IDUser = $data['User_id'];
  $NamaUser = $data['User_nama'];
  $Jabuser = $data['Level_nama'];
  $Prodi = $data['User_prodi'];
  $Email = $data['User_email'];
  $Pin = $data['User_pin'];
  $Tag = $data['User_tag'];
  $Koin = $data['User_koin'];
  $Nokoin = $data['User_nokoin'];

  //   print_r($Jabuser); // buat ngecheck masuk enggak edit nya 
  //   exit;

  $edit1 = mysqli_query($conn, "UPDATE user SET User_nama='$NamaUser',User_level_id=$Jabuser, User_prodi='$Prodi', 
          User_email='$Email', User_pin='$Pin', User_tag='$Tag', User_koin='$Koin', 
          User_nokoin='$Nokoin' WHERE User_id= '$IDUser'");
  // if ($conn->query($edit1) === TRUE) {
  //   echo 'Berhasil';
  //   header("location:user");
  // } else {
  //   echo 'Gagal';
  // header('location:user');
  // }
}

//HAPUS User
if (isset($_POST["hapus"])) {
  // print_r($_POST ["ID_User"]);
  // exit;
  $IDUser = $_POST["User_id"];
  $hps = "DELETE FROM user WHERE User_id= '$IDUser'";
  $cek = mysqli_query($conn, $hps);
  // print_r(md5("willy"));
  // exit;
  if ($cek == 1) {
    header("location:user");
    echo "Delete Succesfully";
    exit();
  } else {
    die(mysqli_error($conn));
  }
}



//-----------------------------------BARANG---------------------------------------------------------------------------------//


//TAMBAH BARANG
if (isset($_POST["btn_simpan"])) {
  $NamaBarang = $_POST["NamaBarang"];
  $MerekBarang = $_POST["MerekBarang"];
  $Jumlah = $_POST["Jumlah"];
  $Foto = $_FILES['Foto_Barang/']['name'];


  $addtotable = mysqli_query($conn, "insert into barang (Nama_Barang,Merek_Barang,Jumlah_Barang,Foto_Barang)values ('$NamaBarang', '$MerekBarang', '$Jumlah''$Foto)");
  if ($addtotable) {
    header('location:barang.php');
  } else
    echo 'Gagal';
  header('location:barang.php');
}


//EDIT BARANG
if (isset($_POST["editbarang"])) {
  $IDBarang = $_POST['ID_Barang'];
  $NamaBarang = $_POST['NamaBarang'];
  $MerekBarang = $_POST["MerekBarang"];
  $Jumlah = $_POST['Jumlah'];

  $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
  $nama_file              = $_FILES['file']['name'];
  $x                      = explode('.', $nama_file);
  $ekstensi               = strtolower(end($x));
  $ukuran                 = $_FILES['file']['size'];
  $file_tmp               = $_FILES['file']['tmp_name'];

  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($file_tmp, '../img' . $nama_file);
    $file_jadi = $nama_file;
  } else {
    $file_jadi = $gambar_lama;
  }


  $edit = mysqli_query($conn, "update barang set Barang_nama='$NamaBarang',Barang_jumlah='$Jumlah', Barang_merk='$MerekBarang' ,Barang_foto='$file_jadi' where Barang_id= '$IDBarang'");
  if ($edit) {
    header('location:barang.php');
  } else
    echo 'Gagal';
  header('location:barang.php');
}


//HAPUS BARANG
if (isset($_POST["hapusdatabarang"])) {
  $IDBarang = $_POST['ID_Barang'];
  var_dump($IDBarang);
  $hapusfk = mysqli_query($conn, "delete from pinjam where Pinjam_barang_id=$IDBarang");
  $hapus = mysqli_query($conn, "delete from barang where Barang_id=$IDBarang");
  if ($hapus) {
    header('location:barang.php');
  } else
    echo 'Gagal';
  header('location:barang.php');
  // echo mysqli_error($conn);
  // exit;
}


//DETAIL BARANG
if (isset($_POST["detail_barang"])) {
  $id_barang = $_POST['id_barang'];

  $query = mysqli_query($conn, "select * from barang where Barang_id= $id_barang ");
  $data = mysqli_fetch_array($query);
  echo json_encode($data);
}

//SIMPAN BARANG 
if (isset($_POST["simpan_tambah_barang"])) {
  $NamaBarang     = $_POST["nama_barang"];
  //$LokerBarang  = $_POST["nama_loker"];
  $MerekBarang    = $_POST["merek_barang"];
  $jumlah_barang  = $_POST["jumlah_barang"];


  $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
  $nama_file              = $_FILES['file']['name'];
  $x                      = explode('.', $nama_file);
  $ekstensi               = strtolower(end($x));
  $ukuran                 = $_FILES['file']['size'];
  $file_tmp               = $_FILES['file']['tmp_name'];

  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($file_tmp, '../img' . $nama_file);
    $file_jadi = $nama_file;
  } else {
    $file_jadi = '';
  }

  //   $ekstensi_diperbolehkan = array('png','jpg','jpeg');
  //   $nama_file              = $_FILES['qr']['name'];
  //   $x                      = explode('.', $nama_filee);
  //   $ekstensi               = strtolower(end($x));
  //   $ukuran                 = $_FILES['qr']['size'];
  //   $file_tmp               = $_FILES['qr']['tmp_name'];  

  //   if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)
  //   {
  //     move_uploaded_file($file_tmp, '../img'.$nama_filee);  
  //     $filee = $nama_filee;
  //   }
  //   else
  //   {
  //     $filee = '';
  //   }

  $proses = mysqli_query($conn, "insert into barang (Barang_nama,Barang_merk,Barang_jumlah,Barang_foto,Barang_qrcode) 
        values ('$NamaBarang', '$MerekBarang', '$jumlah_barang', '$file_jadi' ,'$filee')");
  if ($proses) {
    header('location:barang.php');
  } else {
    echo 'Gagal';
    header('location:barang.php');
  }
}

if (isset($_POST["simpan_ubah_barang"])) {
  $IDBarang       = $_POST["id_barang"];
  $NamaBarang     = $_POST["nama_barang"];
  $NamaLoker      = $_POST["nama_loker"];
  $MerekBarang    = $_POST["merek_barang"];
  $jumlah_barang  = $_POST["jumlah_barang"];
  $gambar_lama    = $_POST["gambar_lama"];


  $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
  $nama_file              = $_FILES['file']['name'];
  $x                      = explode('.', $nama_file);
  $ekstensi               = strtolower(end($x));
  $ukuran                 = $_FILES['file']['size'];
  $file_tmp               = $_FILES['file']['tmp_name'];

  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($file_tmp, '../img/' . $nama_file);
    $file_jadi = $nama_file;
  } else {
    $file_jadi = $gambar_lama;
  }

  $proses = mysqli_query($conn, "update barang set Barang_nama='$NamaBarang', Barang_loker='$NamaLoker', 
        Barang_jumlah='$jumlah_barang', Barang_merk='$MerekBarang', Barang_foto='$file_jadi' where Barang_id= '$IDBarang'");


  if ($proses) {
    header('location:barang.php');
  } else {
    echo 'Gagal';
    header('location:barang.php');
  }
}




//-------------------------------------AKTIFITAS-----------------------------------------------// @author Albert < albertuschristianp@gmail.com > 


//pencarian PEMINJAM, PENGEMBALIAN DAN BARANG PEMINJAMAN PENGEMBALIAN

//$_SESSION['suksespinjam_status'] = false;
//PEMINJAMAN    #reset auto increment mysql >> ALTER TABLE 'pinjam' AUTO_INCREMENT = 0;
if (isset($_POST["tombolpinjam"])) {
  //print_r($_POST);
  //exit;

$pinjamuserid       = $_POST["pinjamuser"];
$pinjambarangid     = $_POST["pinjambarang"];
$pinjamjumlahbarang = $_POST["jumlahbarangpinjam"];
$tglbarangkembali   = $_POST["tanggalkembaliplan"];

$tglbarangkembali   = strtotime($tglbarangkembali);
$tglbarangkembali   = date('Y-m-d', $tglbarangkembali);

// print_r($pinjamuserid);
// print_r($pinjambarangid);
// print_r($pinjamjumlahbarang);
// print_r($tglbarangkembali);
// exit;

//mengupdate sisa barang db tabel barang dan insert data pinjaman baru
$pengurangan_jumlahbarangsisa = mysqli_query($conn, "UPDATE `barang` SET `Barang_jumlah_sisa`=((SELECT `Barang_jumlah_sisa` FROM `barang` WHERE `Barang_id`='$pinjambarangid') - $pinjamjumlahbarang) WHERE Barang_id='$pinjambarangid';");
$pengurangan_jumlahkoin = mysqli_query($conn, "UPDATE `user` SET `User_koin` = (SELECT `User_koin` FROM `user` WHERE User_tag ='$pinjamuserid')-1 WHERE `User_tag` ='$pinjamuserid';");
$peminjaman2 = mysqli_query($conn, "INSERT INTO `pinjam`(`Pinjam_user_tag`, `Pinjam_barang_id`, `Pinjam_jumlah`, `Pinjam_tgl_kembaliplan1`) 
VALUES ('$pinjamuserid', '$pinjambarangid', '$pinjamjumlahbarang', '$tglbarangkembali');");

if ($peminjaman2) {
  $suksespinjam_status = true;
 header("location:formpeminjaman");
} else {
 header('location:formpeminjaman');
}
}
//END OF PEMINJAMAN


//PERPANJANGAN
$show_modal_perpanjangan = true;
if (isset($_POST["tombolperpanjangan"])) {

  $pinjamuserid     = $_POST["cariuser"];
  $pinjambarangid   = $_POST["caribarang"];
  $tglperpanjangan  = date_create($_POST["tglperpanjangan"]);
  $tglperpanjangan  = date_format($tglperpanjangan, "Y-m-d");
  print_r($pinjamuserid);
  

  // $pengembalian = mysqli_query($conn, "SELECT * FROM pinjam  
  // WHERE Pinjam_user_tag=$pinjamuserid and Pinjam_barang_id=$pinjambarangid");
  // $data = mysqli_fetch_array($pengembalian);
  // $pinjamid = $data['Pinjam_id'];
  $cekperpanjangan = mysqli_query($conn, "SELECT Pinjam_tgl_kembaliplan2,Pinjam_tgl_kembaliplan3 FROM `pinjam` 
  WHERE  Pinjam_user_tag='$pinjamuserid' AND Pinjam_barang_id='$pinjambarangid'");

  $planperpanjangan = mysqli_fetch_array($cekperpanjangan);
if($pinjamuserid != "" && $pinjambarangid != ""){
  if(is_null($planperpanjangan[0])){
    $perpanjangan = mysqli_query($conn, "UPDATE `pinjam` SET Pinjam_tgl_kembaliplan2='$tglperpanjangan', Pinjam_status=1 
  WHERE Pinjam_user_tag='$pinjamuserid' AND Pinjam_barang_id='$pinjambarangid'");
  header("location:formpengembalian");
  }else if(is_null($planperpanjangan[1])){
    $perpanjangan = mysqli_query($conn, "UPDATE `pinjam` SET Pinjam_tgl_kembaliplan3='$tglperpanjangan' Pinjam_status=1
  WHERE Pinjam_user_tag='$pinjamuserid' AND Pinjam_barang_id='$pinjambarangid'");
  header("location:formpengembalian");
  }else {
    //$show_modal_perpanjangan = true;
    header("location:dashboard");
  }
} else{
  header("location:dashboard");
}

  
}
//END OF PERPANJANGAN


//PENGEMBALIAN
if (isset($_POST["kembalialat"])) {

  $pinjamuserid   = $_POST["cariuser"];
  $pinjambarangid = $_POST["caribarang"];
  date_default_timezone_set('Asia/Bangkok');
  $tglkembali     = date('Y-m-d');
  $jumlahbarangpinjam = $_POST["jumlahbarangpinjam"];

  // $pengembalian = mysqli_query($conn, "SELECT * FROM pinjam  
  // WHERE Pinjam_user_tag=$pinjamuserid and Pinjam_barang_id=$pinjambarangid");
  // $data = mysqli_fetch_array($pengembalian);
  // $pinjamid = $data['Pinjam_id'];

  //mengupdate sisa barang db tabel barang dan insert data pinjaman baru
  $penambahan_jumlahbarangsisa = mysqli_query($conn, "UPDATE `barang` SET `Barang_jumlah_sisa`=((SELECT `Barang_jumlah_sisa` FROM `barang` WHERE `Barang_id`='$pinjambarangid') + $jumlahbarangpinjam) WHERE Barang_id='$pinjambarangid';");
  $pengurangan_jumlahkoin = mysqli_query($conn, "UPDATE `user` SET `User_koin` = (SELECT `User_koin` FROM `user` WHERE User_tag ='$pinjamuserid')+1 WHERE `User_tag` ='$pinjamuserid';");
  $pengembalian = mysqli_query($conn, "UPDATE `pinjam` SET Pinjam_tgl_kembalireal='$tglkembali', Pinjam_status=2 WHERE Pinjam_user_tag='$pinjamuserid' AND Pinjam_barang_id='$pinjambarangid'");

  if ($pengembalian) {
    header("location:formpengembalian");
  } else
    header('location:formpengembalian');
}
//END OF PENGEMBALIAN


//TOMBOL CARI PEMINJAMAN
if (getUrlParam('cariuser') != null ) {
  // print_r("dfsdf");
  // print_r($_GET ['cariuser']);
  // exit;

  $idpeminjam     = getUrlParam('cariuser');
  $idbarangpinjam = getUrlParam('caribarang');

  $ambilsemuadatauser = mysqli_query($conn, "SELECT * FROM `user` WHERE User_tag = '$idpeminjam'");
  $user = mysqli_fetch_array($ambilsemuadatauser);
  //  var_dump($_GET["cariuser"]);
  //  exit;
  $valuecariuser = getUrlParam('cariuser');

  if ($user != NULL) {
    $cariusernama       = $user['User_nama'];
    $cariuseremail      = $user['User_email'];
    $cariuserkoin       = $user['User_nokoin'];
    $cariuserjumlahkoin = $user['User_koin'];
  } else {
    $cariusernama       = "";
    $cariuseremail      = "";
    $cariuserkoin       = "";
    $cariuserjumlahkoin = "";
  }

  $ambilsemuadatabarang = mysqli_query($conn, "SELECT * FROM `barang` WHERE Barang_id = '$idbarangpinjam'");
  $barang = mysqli_fetch_array($ambilsemuadatabarang);
  $valuecaribarang = getUrlParam('caribarang');

  if ($barang != NULL) {
    $caribarangnama   = $barang['Barang_nama'];
    $caribarangmerk   = $barang['Barang_merk'];
    $caribarangloker  = $barang['Barang_Loker'];
    $caribarangjumlah = $barang['Barang_jumlah_sisa'];
  } else {
    $caribarangnama   = "";
    $caribarangmerk   = "";
    $caribarangloker  = "";
    $caribarangjumlah = "";
  }
} else {
  $cariusernama       = "";
  $cariuseremail      = "";
  $cariuserkoin       = "";
  $cariuserjumlahkoin = "";

  $caribarangnama   = "";
  $caribarangmerk   = "";
  $caribarangloker  = "";
  $caribarangjumlah = "";
}
//END OF TOMBOL CARI PEMINJAMAN


//TOMBOL CARI PENGEMBALIAN
if (getUrlParam('cariuserpengembalian') != null ) {
  // print_r("dfsdf");
  // print_r($_GET ['cariuser']);
  // exit;

  $idpeminjam = getUrlParam('cariuserpengembalian');
  $idbarangpinjam = getUrlParam('caribarang');

  $ambilsemuadatauser = mysqli_query($conn, "SELECT * FROM `pinjam` JOIN `user` ON pinjam.Pinjam_user_tag=user.User_tag WHERE pinjam.Pinjam_user_tag='$idpeminjam'");
  $user = mysqli_fetch_array($ambilsemuadatauser);
  //  var_dump($_GET["cariuser"]);
  //  exit;
  $valuecariuser = getUrlParam('cariuserpengembalian');

  if ($user != NULL) {
    $cariusernama             = $user['User_nama'];
    $cariuseremail            = $user['User_email'];
    $cariuserkoin             = $user['User_nokoin'];
    $cariuserjumlahkoin       = $user['User_koin'];
    $valuejumlahbarangpinjam  = $user['Pinjam_jumlah'];
  } else {
    $cariusernama             = "";
    $cariuseremail            = "";
    $cariuserkoin             = "";
    $cariuserjumlahkoin       = "";
    $valuejumlahbarangpinjam  = "";
  }

  $ambilsemuadatabarang = mysqli_query($conn, "SELECT * FROM `pinjam` JOIN `barang` ON pinjam.Pinjam_barang_id=barang.Barang_id WHERE pinjam.Pinjam_barang_id='$idbarangpinjam'");
  $barang = mysqli_fetch_array($ambilsemuadatabarang);
  $valuecaribarang = getUrlParam('caribarang');  

  if ($barang != NULL) {
    $caribarangnama   = $barang['Barang_nama'];
    $caribarangmerk   = $barang['Barang_merk'];
    $caribarangloker  = $barang['Barang_Loker'];
    $caribarangjumlah = $barang['Pinjam_jumlah'];
  } else {
    $caribarangnama   = "";
    $caribarangmerk   = "";
    $caribarangloker  = "";
    $caribarangjumlah = "";
  }
}
//END OF TOMBOL CARI PENGEMBALIAN



//-------------------------------------FORM PENGECEKAN-----------------------------------------------// @author Albert < albertuschristianp@gmail.com > 

//PENGECEKAN
if (isset($_POST["pengecekan_submit"])) {

  
  $pengecekan = mysqli_query($conn, "UPDATE `pinjam` SET `Pinjam_status`='3' WHERE Pinjam_tgl_kembalireal IS NULL && 
  ((Pinjam_tgl_kembaliplan1<CURRENT_DATE && Pinjam_tgl_kembaliplan2 IS NULL && Pinjam_tgl_kembaliplan3 IS NULL) OR 
  (Pinjam_tgl_kembaliplan2<CURRENT_DATE && Pinjam_tgl_kembaliplan3 IS NULL) OR
  (Pinjam_tgl_kembaliplan3<CURRENT_DATE));");
  
// seharusnya muncul popup lalu tombol logout
  if ($pengecekan) {
    header("location:checker");
  } else
    header('location:checker');
}
//END OF PENGECEKAN