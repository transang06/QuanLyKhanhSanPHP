<style>
    .thanhtrangthai{
        float: top; 
        height: 10%;
    }
    .noidung{
        margin: 30px auto;     
    } 
</style>  
<div class="thanhtrangthai"> 
<?php 
    include("ChucNangPhong/ChucNangSQLPhongCheckin.php"); 
?>
</div>
<div class="noidung">
<h2>Danh Sách Phòng Đang Có Khách <?php echo $thongbao ?></h2><br>          
<table class="tableHT">
    <tr>       
        <th>ID CheckIn</th>
        <th>Thông Tin Khách Hàng</th>
        <th>Thông Tin Loại Phòng</th>
        <th>Số Người Ở</th>           
        <th>Thời Gian Nhận Phòng</th>        
        <th>Pay</th>
        
    </tr>
<?php
    $thucthi = mysqli_query($ketnoisql,$sql); 
    while(($dulieu = mysqli_fetch_array($thucthi)) ){
        echo"<tr>";
        echo"<td>";
        echo $dulieu[0];
        echo "</td>";
        echo"<td>";
        echo ThongTinKhma($dulieu[1]);
        echo "</td>";
        echo"<td>";
        echo ttphong($dulieu[2]);
        echo "</td>";
        echo"<td>";
        echo $dulieu[3];
        echo "</td>";  
        echo"<td>";
        echo $dulieu[4];
        echo "</td>";
        echo"<td>";
        echo "<a onclick=\"return confirm('Bạn có chắc chắn check out phòng này không?');\" href='index.php?url=CheckIn/CheckOut.php&maCI=$dulieu[0]'><img src='image/thanhtoan.png' width='32px'/></a></a>";
        echo "</td>";
       
       echo "</tr>";
    }    
?>  
</table>        
</div>
  