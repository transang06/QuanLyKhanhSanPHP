<style>
    .thanhtrangthai{
        float: top; 
        height: 10%;
    }      
    .NDTrai{
        float: left;
        margin-left: 30px;
        width: 30%;
    }
    .NDPhai{
        float: right;        
        width: 65%;
    }
    span { 
        border-radius:0;
    }
</style>
<div class="thanhtrangthai"> 
<?php 
    include("ChucNangSQLDoanhThu.php"); 
?>
</div>
<div class="NDTrai">
<?php 
    $thucthihoadon = mysqli_query($ketnoisql,$sqlhoadon);   
    $dulieuhoadon = mysqli_fetch_array($thucthihoadon);  
?>
    <h2>Thống kê doanh thu</h2>
    <h4><?php echo $thongbao?></h4>
    <div class="nhomform">
    <span>Tổng Doanh Thu</span>
    <div class="nhap"><?php echo number_format($dulieuhoadon[2]);?></div>
    </div>
    <div class="nhomform">
    <span>Số đơn</span>
    <div class="nhap"><?php echo number_format($dulieuhoadon[0]); ?></div>
    </div>
    <div class="nhomform">
    <span>Trung bình đơn</span>
    <div class="nhap"><?php echo number_format($dulieuhoadon[1]); ?></div>
    </div>
</div>  
<div class="NDPhai">
 <table class="tableHT">  
    <h2>Thống kê chi tiết</h2><br>
     <tr>
        <th>Năm</th>
        <th>Số Đơn</th>  
        <th>Doanh Thu</th>        
        <th>Trung bình mỗi đơn</th> 
    </tr>
<?php  
    $thucthiBangNam = mysqli_query($ketnoisql,$sqlBangNam);
    while($dulieuBangNam = mysqli_fetch_array($thucthiBangNam) ){
        echo"<tr>";
        echo"<td>";
        echo $dulieuBangNam[0];
        echo "</td>";
        echo"<td>";
        echo $dulieuBangNam[1];
        echo "</td>";
        echo"<td>";
        echo number_format($dulieuBangNam[2]);
        echo "</td>";
        echo"<td>";
        echo number_format($dulieuBangNam[3]);
        echo "</td>";
        echo "</tr>";
    }
    ?>    
    <tr>
        <th>Tháng</th>
        <th>Số Đơn</th>  
        <th>Doanh Thu</th>        
        <th>Trung bình mỗi đơn</th> 
    </tr>
<?php  
    $thucthiBangThang = mysqli_query($ketnoisql,$sqlBangThang);
    while($dulieuBangThang = mysqli_fetch_array($thucthiBangThang) ){
        echo"<tr>";
        echo"<td>";
        echo $dulieuBangThang[0],"-",$dulieuBangThang[1];
        echo "</td>";
        echo"<td>";
        echo $dulieuBangThang[2];
        echo "</td>";
        echo"<td>";
        echo number_format($dulieuBangThang[3]);
        echo "</td>";
        echo"<td>";
        echo number_format($dulieuBangThang[4]);
        echo "</td>";
        echo "</tr>";
    }
    ?>    
    <tr>
        <th>Ngày</th>
        <th>Số Đơn</th>  
        <th>Doanh Thu</th>        
        <th>Trung bình mỗi đơn</th> 
    </tr>
<?php  
    $thucthiBangNgay = mysqli_query($ketnoisql,$sqlBangNgay);
    while($dulieuBangNgay = mysqli_fetch_array($thucthiBangNgay) ){
        echo"<tr>";
        echo"<td>";
        echo $dulieuBangNgay[0];
        echo "</td>";
        echo"<td>";
        echo $dulieuBangNgay[1];
        echo "</td>";
        echo"<td>";
        echo number_format($dulieuBangNgay[2]);
        echo "</td>";
        echo"<td>";
        echo number_format($dulieuBangNgay[3]);
        echo "</td>";
        echo "</tr>";
    }
?>    
</table>
</div>