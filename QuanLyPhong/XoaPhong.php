<?php    
    $maLP = $_GET["maLP"];    
    $sql = "DELETE FROM phong WHERE MaLP=$maLP";
    mysqli_query($ketnoisql,$sql);
    chuyentrang("index.php?url=QuanLyPhong/QuanLyPhong.php");    
?>