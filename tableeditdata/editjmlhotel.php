<html>
    <head>
    <style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}
    </style>
    </head>
    <body>
<?php
include "../koneksi.php";
$id=$_GET["id"];
$ambildata=mysqli_query($conn,"SELECT * FROM jumlah_hotel WHERE id='$id'");
$data=mysqli_fetch_array($ambildata);
?>
<center>
<font face="verdana">
<form class="form1" method="POST" action="">
<div>Kecamatan</div><div><input class="search" type='text' name='kecamatan' value='<?php echo $data['kecamatan'] ?>' readonly></div>
<div>Remark</div><div><input class="search" type='text' name='remark' value='<?php echo $data['remark'] ?>'readonly></div>
<div>Kota</div><div><input class="search" type='text' name='kota' value='<?php echo $data['kota'] ?>'readonly></div>
<div>Provinsi</div><div><input class="search" type='text' name='provinsi' value='<?php echo $data['provinsi'] ?>'readonly></div>
<div>Jumlah Hotel</div><div><input class="search" type='text' name='jumlah_hotel' value='<?php echo $data['jumlah_hotel'] ?>'></div>
<div><input type='submit' name="simpan" value='Simpan' onclick="alert('Data Tersimpan')"></div></center>


<?php
if(isset($_POST['simpan']))
{
    $kecamatan  = $_POST['kecamatan'];
    $remark     = $_POST['remark'];
    $kota       = $_POST['kota'];
    $provinsi   = $_POST['provinsi'];
    $jumlah_hotel        = $_POST['jumlah_hotel'];

    mysqli_query($conn,"UPDATE jumlah_hotel SET jumlah_hotel='$jumlah_hotel' WHERE id='$id'")
    or die(mysqli_error($conn));
    header("location:tabledatajumlah.php");
}

?>
</body>
</html>