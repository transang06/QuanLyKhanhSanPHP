<?php    
    $maDV = $_GET["maDV"];    
    $sql = "DELETE FROM dichvu WHERE MaDV=$maDV";
    mysqli_query($ketnoisql,$sql);
    chuyentrang("index.php?url=DichVu/DichVu.php");    
?>
