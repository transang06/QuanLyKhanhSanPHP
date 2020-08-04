<?php    
    $maNV = $_GET["maNV"];    
    $sql = "DELETE FROM nhanvien WHERE MaNV=$maNV";
    mysqli_query($ketnoisql,$sql);
    chuyentrang("index.php?url=NhanVien/QuanLyNV.php");    
?>