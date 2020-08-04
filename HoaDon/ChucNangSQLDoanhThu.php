<style>
    .ChonTG{
        float: top; 
        height: 100%;
        margin: 30px;
        
    }      
</style>
<div class="ChonTG">  
<form  action="" method="post">  
<div class="nhomform">
        <span>Từ ngày</span>
        <input class="nhap" type="date" name='TuNgay'> 
        <span>Đến ngày</span>                
        <input class="nhap" type="date" name='DenNgay'> 
        <input class='button2' type="submit" value="Xem Doanh Thu">   
    </div>            
</form>
</div>
<?php        
            $sqlhoadon ="SELECT COUNT(TongThanhToan),AVG(TongThanhToan),SUM(TongThanhToan) FROM phongcheckin where TongThanhToan != 0";
            $sqlBangNgay="SELECT date(TimeCheckOut),COUNT(TongThanhToan), Sum(TongThanhToan),  AVG(TongThanhToan)  FROM phongcheckin where TongThanhToan != 0 GROUP BY date(TimeCheckOut)";
            $sqlBangThang="SELECT month(TimeCheckOut), year(TimeCheckOut),COUNT(TongThanhToan), Sum(TongThanhToan),  AVG(TongThanhToan)  FROM phongcheckin where TongThanhToan != 0 GROUP BY month(TimeCheckOut), YEAR(TimeCheckOut)";
            $sqlBangNam="SELECT year(TimeCheckOut),COUNT(TongThanhToan), Sum(TongThanhToan),  AVG(TongThanhToan)  FROM phongcheckin where TongThanhToan != 0 GROUP BY year(TimeCheckOut)";
            $thongbao="từ trước đến nay";    
    if(isset($_POST['TuNgay'])&&isset($_POST['DenNgay'])){
            $TuNgay= $_POST['TuNgay'];
            $DenNgay= $_POST['DenNgay'];
            $sqlhoadon = "Select COUNT(TongThanhToan),AVG(TongThanhToan),SUM(TongThanhToan) From phongcheckin WHERE TongThanhToan != 0 And DATE(TimeCheckOut) >= '$TuNgay' AND DATE(TimeCheckOut)<='$DenNgay'";
            $sqlBangNgay="SELECT date(TimeCheckOut),COUNT(TongThanhToan), Sum(TongThanhToan),  AVG(TongThanhToan)  FROM phongcheckin where TongThanhToan != 0 And DATE(TimeCheckOut) >= '$TuNgay' AND DATE(TimeCheckOut)<='$DenNgay' GROUP BY date(TimeCheckOut)";
            $sqlBangThang="SELECT month(TimeCheckOut), year(TimeCheckOut),COUNT(TongThanhToan), Sum(TongThanhToan),  AVG(TongThanhToan)  FROM phongcheckin where TongThanhToan != 0 And DATE(TimeCheckOut) >= '$TuNgay' AND DATE(TimeCheckOut)<='$DenNgay' GROUP BY month(TimeCheckOut), YEAR(TimeCheckOut)";
            $sqlBangNam="SELECT year(TimeCheckOut),COUNT(TongThanhToan), Sum(TongThanhToan),  AVG(TongThanhToan)  FROM phongcheckin where TongThanhToan != 0 And DATE(TimeCheckOut) >= '$TuNgay' AND DATE(TimeCheckOut)<='$DenNgay' GROUP BY year(TimeCheckOut)";
            $thongbao="Từ ngày '$TuNgay' đến ngày $DenNgay";}    
?> 