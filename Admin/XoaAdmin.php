<?php    
    $mauser = $_GET["maAD"];    
    $sql = "DELETE FROM user WHERE id=$mauser";
    mysqli_query($ketnoisql,$sql);
    chuyentrang("index.php?url=Admin/QuanLyAdmin.php");    
?>