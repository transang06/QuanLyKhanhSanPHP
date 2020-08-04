<?php    
    $maKH = $_GET["maKH"];    
    $sql = "DELETE FROM khachhang WHERE MaKH=$maKH";
    mysqli_query($ketnoisql,$sql);
    chuyentrang("index.php?url=KhachHang/QuanLyKhachHang.php");    
?>