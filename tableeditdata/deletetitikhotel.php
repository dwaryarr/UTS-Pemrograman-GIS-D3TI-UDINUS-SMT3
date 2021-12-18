<?php
    include "../koneksi.php";
    $id=$_GET["id"];
    $sql="DELETE from hotel where id='$id'";
    //echo $sql;
    $hasil=mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:tabledatatitik.php");
?>