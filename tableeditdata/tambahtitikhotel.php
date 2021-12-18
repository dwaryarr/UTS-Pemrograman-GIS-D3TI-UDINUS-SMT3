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


?>
<center>
<font face="verdana">
<form class="form1" method="POST" action="">
<div>Nama Hotel</div><div><input class="search" type='text' name='nama_hotel'></div>
<div>Jenis</div><div><input class="search" type='text' name='jenis'></div>
<div>Alamat</div><div><input class="search" type='text' name='alamat'></div>
<div>Latitude</div><div><input class="search" type='text' name='lat'></div>
<div>Longitude</div><div><input class="search" type='text' name='lng'></div>
<div><input type='submit' name="simpan" value='Simpan' onclick="alert('Data Tersimpan')"></div></center>

<?php
if(isset($_POST['simpan']))
{
    $nama_hotel  = $_POST['nama_hotel'];
    $jenis     = $_POST['jenis'];
    $alamat       = $_POST['alamat'];
    $lat   = $_POST['lat'];
    $lng        = $_POST['lng'];


    mysqli_query($conn,"INSERT INTO hotel (nama_hotel,jenis,alamat,lat,lng) values ('$nama_hotel','$jenis','$alamat','$lat','$lng')")
    or die(mysqli_error($conn));
    header("location:tabledatatitik.php");
}

?>
</body>
</html>