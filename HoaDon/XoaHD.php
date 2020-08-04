<?php    
    $mact = $_GET["ma"];    
    $sql = "DELETE FROM hoadon WHERE MaHD=$mact";
    mysqli_query($ketnoisql,$sql);
    chuyentrang("index.php?url=HoaDon/QuanLyHoaDon.php");    
?>