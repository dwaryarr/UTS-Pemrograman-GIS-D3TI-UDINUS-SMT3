<?php
include "../koneksi.php";
$sql = "SELECT * FROM hotel where Lng>0";
$hasil = mysqli_query($conn, $sql);
?>
var json_Hotel_2 = {"type":"FeatureCollection","name":"Hotel_2","crs":{"type":"name","properties":{"name":"urn:ogc:def:crs:OGC:1.3:CRS84"}},
"features":[
<?php
while ($data = mysqli_fetch_array($hasil)) {
    $id = $data['id'];
    $nama_hotel = $data['nama_hotel'];
    $jenis = $data['jenis'];
    $alamat = $data['alamat'];
    $lat = $data['lat'];
    $lng = $data['lng'];
?>

    {"type":"Feature","properties":{"id":"<?php echo $id; ?>","Nama Hotel":"<?php echo $nama_hotel; ?>","Jenis":"<?php echo $jenis; ?>","Alamat":"<?php echo $alamat; ?>"},"geometry":{"type":"Point","coordinates":[<?php echo $lng; ?>,<?php echo $lat; ?>]}},

<?php
}
?>
]}