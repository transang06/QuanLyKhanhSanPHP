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
    include("ChucNangPhong/ChucNangSQLPhongTrong.php"); 
?>
</div>
    <div class="noidung">
<h2>Danh Sách Phòng Trống <?php echo $thongbao ?></h2><br>  
<table class="tableHT">            
    <tr>        
        <th>ID Phòng</th>        
        <th>Tên Loại Phòng</th>       
        <th>Vị Trí</th>
        <th>Đơn Giá(giờ)</th>
        <th>Ghi Chú</th> 
        <th>Dọn</th>               
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
        echo "<a <a onclick=\"return confirm('Bạn có chắc chắn muốn dọn phòng này');\" href='index.php?url=QuanLyPhong/don.php&maPB=$dulieu[0]'><img src='image/don.png' width='32px'/></a></a>";
        echo "</td>";       
       echo "</tr>"; 
    echo"</tr>";}    
 ?>
</table>
</div>