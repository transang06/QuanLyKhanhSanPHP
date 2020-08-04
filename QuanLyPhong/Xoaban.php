<?php    
    $maPB = $_GET["maPB"];    
    $sql = "DELETE FROM phongcandon WHERE MaLP=$maPB";
    mysqli_query($ketnoisql,$sql);
    $sqlphongtrong = "INSERT INTO `phongtrong`(`MaLP`) VALUES ($maPB)";        
    mysqli_query($ketnoisql,$sqlphongtrong); 
    chuyentrang("index.php?url=QuanLyPhong/PhongCanDon.php");    
?>