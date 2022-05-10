<?php 
    require "../function.php";

    //echo  json_encode($data);
?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Detail Barang </title>
</head>
<body> 
<?php 
 $id_barang= $_GET['id_barang']; 
    $sql = 'select * from barang WHERE Barang_id ="'.$id_barang.'"';
    $Foto=$data['Barang_foto'];
    if($data['Barang_foto']!="" && $data['Barang_foto']!=NULL)
    {
        $img_barang = '<img src="image/barang/'.$data['Barang_foto'].'" style="width: 100px;">';
    }else{
        $img_barang = "-";
    }
                                        
    $query = mysqli_query($conn, $sql);   
    while($data = mysqli_fetch_array($query)){?> 
<div>
    <h2> Detail Barang </h2>
</div>
<div style="max-width: 500px;">
    <table style="width: 100%;">
        <tr>
            <td style="width: 150px;"> ID Barang </td> 
            <td style="width: 10px;"> : </td>
            <td style="width: auto;"> <?php echo $data['Barang_id']?> </td>
        </tr>
        <tr>
            <td style="width: 150px;"> Nama Barang </td> 
            <td style="width: 10px;"> : </td>
            <td style="width: auto;"> <?php echo $data['Barang_nama']?> </td>
        </tr>
        <tr>
            <td style="width: 150px;"> Merek Barang </td> 
            <td style="width: 10px;"> : </td>
            <td style="width: auto;"> <?php echo $data['Barang_merk']?> </td>
        </tr>
        
         <tr>
            <td style="width: 150px;"> Jumlah Barang</td> 
            <td style="width: 10px;"> : </td>
            <td style="width: auto;"> <?php echo $data['Barang_jumlah']?> </td>
        </tr>
         <tr>
            <td style="width: 150px;"> Foto Barang </td> 
            <td style="width: 10px;"> : </td>
            <td style="width: auto;"> <?php echo $data['Barang_foto']?> </td>
        </tr>
         <tr>
            <td style="width: 150px;"> QR Code </td> 
            <td style="width: 10px;"> : </td>
            <td style="width: auto;"> <?php echo $data['Barang_qrcode']?> </td>
        </tr>
    </table>
</div>

        
<?php 
}

?>

</body>
</html>