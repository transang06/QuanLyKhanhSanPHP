<?php
   $sql = 'select * from phongcheckin where TongThanhToan != 0 ORDER BY TimeCheckOut DESC';
   $thongbao="";
?>
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
    include("ChucNangSQLHoaDon.php"); 
?>
</div>
<div class="noidung">
<table class="tableHT">  
    <h2>Danh Sách Hóa Đơn <?php echo $thongbao ?></h2><br>  
    <tr>
        <th>ID</th>
        <th>Thông Tin KH</th>        
        <th>Thông Tin Phòng</th>
        <th>Số Người</th>        
        <th>Thời Gian Nhận Phòng</th>
        <th>Thời Gian Thanh Toán</th>
        <th>Tổng Thanh Toán</th> 
        <th>In</th> 
    </tr>
<?php
    $thucthi = mysqli_query($ketnoisql,$sql);   
    while($dulieu = mysqli_fetch_array($thucthi) ){
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
        echo $dulieu[5];
        echo "</td>";
        echo"<td>";
        echo number_format($dulieu[6]);
        echo "</td>";
        echo"<td>";
        echo "<a href='index.php?url=HoaDon/TrangIn.php&maCI=$dulieu[0]'><img src='image/print.png' width='32px'/></a></a>";
        echo "</td>";
        echo "</tr>";
    }
?>
</table>        
</div> 

