<?php    
    $maPB = $_GET["maPB"];    
    $sql = "DELETE FROM phongtrong WHERE MaLP=$maPB";
    mysqli_query($ketnoisql,$sql);
    $sqlphongtrong = "INSERT INTO `phongcandon`(`MaLP`) VALUES ($maPB)";        
    mysqli_query($ketnoisql,$sqlphongtrong); 
    chuyentrang("index.php?url=QuanLyPhong/DSPhongTrong.php");    
?>