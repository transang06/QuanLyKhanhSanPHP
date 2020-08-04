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
    include("ChucNangPhong/ChucNangSQLPhongCanDon.php"); 
?>
</div>
<div class="noidung">
<h2>Danh Sách Phòng Cần Dọn <?php echo $thongbao ?></h2><br>  
<table class="tableHT">            
    <tr>        
        <th>ID Phòng</th>        
        <th>Tên Loại Phòng</th>       
        <th>Vị Trí</th>
        <th>Đơn Giá(giờ)</th>
        <th>Ghi Chú</th> 
        <th>Xong</th>               
    </tr> 
    <?php
    $thucthi = mysqli_query($ketnoisql,$sql);    
    while(($dulieu = mysqli_fetch_array($thucthi)) ){
        echo"<tr>";
        echo"<td>";
        echo $dulieu[0];
        echo "</td>";
        echo"<td>";
        echo $dulieu[1];
        echo "</td>";
        echo"<td>";
        echo $dulieu[2];
        echo "</td>";
        echo"<td>";
        echo number_format($dulieu[3]);
        echo "</td>";
        echo"<td>";
        echo $dulieu[4];
        echo "</td>";        
        echo"<td>";
        echo "<a <a onclick=\"return confirm('Bạn có chắc chắn phòng này sẵn sàng cho thuê');\" href='index.php?url=QuanLyPhong/Xoaban.php&maPB=$dulieu[0]'><img src='image/fi.png' width='32px'/></a></a>";
        echo "</td>";       
       echo "</tr>"; 
    echo"</tr>";}    
 ?>
</table>
</div>