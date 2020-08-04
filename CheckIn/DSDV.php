<?php    
    $maCI=$_GET["maCI"]; 
?>

<style>
    .right{
        width: 60%;
        height: 100%;
        float: right;    
        text-align: center;    
        overflow: auto; 
    }
    .left{        
        width: 38%;
        height: 100%;
        float: left;    
        text-align: center;
        border-right:  3px solid #848484;          
    }
    .thanhtrangthai{
        float: top;
        width: 100%;
        height: 20%;
    }
    .them{
        width: 60%;
        margin: 0 auto;
    }
</style>
<div class="left">
    <div class="thanhtrangthai">
        <a class='button button2' style='float:left'href='index.php?url=QuanLyPhong/PhongCheckin.php'>Quay Lại Danh Sách Check in</a>        
    </div>
    <div class="them">
        <form action= "" method="Post">
        <h2>Thêm Dịch Vụ</h2>
        
         <div class="nhomform">
            <span>Tên Dịch Vụ</span>
            <?php truyvandichvu() ?>
        </div>
        <div class="nhomform">
            <span>Số Lượng</span>
            <input class="nhap" type="number" name='SoLuong' placeholder="Nhập số lượng">
        </div>
        <input type="hidden" name='tien'/>    
        <input class="button button2" value="Thêm Dịch Vụ" type="submit"/> 
        </form>

        <?php
            if(isset($_POST['madv'])&& $_POST['SoLuong']){        
                $madv = $_POST['madv'];        
                $SL = $_POST['SoLuong'];
                $tien= tiendv( $_POST['madv'],$_POST['SoLuong']);
                $sql1 = "INSERT INTO ctdv ( `MaCI`,`MaDV`,`SoLuong`,`ThanhTien`) VALUES ('$maCI','$madv','$SL','$tien')";
                mysqli_query($ketnoisql,$sql1);       
                chuyentrang("index.php?url=CheckIn/DSDV.php&maCI=$maCI");  
        }        
        ?> 
    </div>
</div>
<div class="right">
<div class="thanhtrangthai">
    <a class='button button2' style='float:right' href='index.php?url=CheckIn/CheckOut.php&maCI=<?php echo $maCI?>'>CheckOUt</a>
</div>
   <h2>Dịch Vụ Đang Sử Dụng</h2>
<table class="tableHT">            
    <tr>        
        <th>Thông Tin Dịch Vụ</th>        
        <th>Số Lượng</th> 
        <th>Thành Tiền</th>
        <th>Xóa</th>               
    </tr> 
    <?php 
    $sql = "SELECT * FROM ctdv WHERE MaCI='$maCI'";  
    $thucthi = mysqli_query($ketnoisql,$sql);    
    while(($dulieu = mysqli_fetch_array($thucthi)) ){
        echo"<tr>";
        echo"<td>";
        echo thongtindv($dulieu[1]);
        echo "</td>";
        echo"<td>";
        echo $dulieu[2];
        echo "</td>";
        echo"<td>";
        echo number_format(floatval($dulieu[3]));
        echo "</td>";
        echo"<td>";
        echo "<a onclick=\"return confirm('Bạn có chắc chắn check out phòng này không?');\" href='index.php?url=CheckIn/XoaDVSD.php&maCI=$dulieu[0]&maDV=$dulieu[1]'><img src='image/del.png' width='32px'/></a></a>";
        echo "</td>";        
    echo"</tr>";}    
 ?>
        <tr>        
            <th>Tổng Cộng</th>
            <th></th>
            <th><?php echo number_format(floatval(sumtiendv($maCI)))?></th>            
            <th></th>
        </tr> 
</table>     
</div>

