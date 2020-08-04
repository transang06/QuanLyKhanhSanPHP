<style>
    .thanhtrangthai{
        float: top;
        width: 100%;
        height: 10%;
    }
    .noidung{
        margin: 30px auto;
        width: 100%;
    }    
</style>
<div class="thanhtrangthai">
    <a class="button button2"style="float:left" href="index.php?url=KhachHang/ThemKhachHang.php">Thêm Khách Hàng</a> 
    <a class='button button2' style="float:right" href="index.php?url=CheckIn/CheckIn.php">Nhận Phòng</a> 
</div> 
<div class="thanhtrangthai">    
    <?php 
    include("ChucNangSQLKH.php"); 
    ?>
</div> 
<div class="noidung">
    <h2>Danh Sách Khách Hàng <?php echo $thongbao ?></h2><br> 
<table class="tableHT">
    <tr>
        <th>ID KH</th>
        <th>Số CMT</th>
        <th>Họ KH</th>
        <th>Tên KH</th>
        <th>Ngày Sinh</th>
        <th>Địa Chỉ</th>
        <th>Số Điện Thoại</th>
        <th>Giới Tính</th>
        <th>Ngày Gia Nhập</th>
        <th>Cập Nhật Lần Cuối</th>
        <th>Note</th>
        <th>Sửa</th>                
    </tr>
<?php 
    $thucthi = mysqli_query($ketnoisql,$sql);   
    while($dulieu = mysqli_fetch_array($thucthi) ){
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
        echo $dulieu[3];
        echo "</td>";
        echo"<td>";
        echo $dulieu[4];
        echo "</td>";
        echo"<td>";
        echo $dulieu[5];
        echo "</td>";
        echo"<td>";
        echo $dulieu[6];
        echo "</td>";
        echo"<td>";
        echo $dulieu[7];
        echo "</td>";
        echo"<td>";
        echo $dulieu[8];
        echo "</td>";
        echo"<td>";
        echo $dulieu[9];
        echo "</td>";
        echo"<td>";
        echo $dulieu[10];
        echo "</td>";
        echo"<td>";
        echo "<a href='index.php?url=KhachHang/SuaThongTinKH.php&maKH=$dulieu[0]'><img src='image/edit.png' width='32px'/></a>";
        echo "</td>";
        echo "</tr>";
    }
?>
</table>        
</div>
