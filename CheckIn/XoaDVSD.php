<?php    
    $maCI = $_GET["maCI"];  
    $maDV = $_GET["maDV"];
    $sql = "DELETE FROM ctdv WHERE MaCI=$maCI AND MaDV =$maDV";
    mysqli_query($ketnoisql,$sql);
    chuyentrang("index.php?url=CheckIn/DSDV.php&maCI=$maCI");     
?>