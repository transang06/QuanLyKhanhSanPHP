<?php    
    $maTB = $_GET["maTB"];    
    $sql = "DELETE FROM thongbao WHERE MaTB=$maTB";
    mysqli_query($ketnoisql,$sql);
    chuyentrang("index.php?url=TB/QuanLyTB.php");    
?>