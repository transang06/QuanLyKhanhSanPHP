<?php    
    $maCI=$_GET["maCI"];    
    $sql = "SELECT * FROM phongcheckin WHERE MaCI=$maCI";     
    $thucthi = mysqli_query($ketnoisql,$sql);
    $dulieu = mysqli_fetch_array($thucthi); 
    $sqlkh = "select * from khachhang WHERE MaKH='$dulieu[1]'"; 
    $thucthikh = mysqli_query($ketnoisql,$sqlkh);   
    $dulieukh = mysqli_fetch_array($thucthikh);
    $sqlphong = "select * from phong where MaLP= $dulieu[2]";
    $thucthiphong = mysqli_query($ketnoisql,$sqlphong);  
    $dulieuphong = mysqli_fetch_array($thucthiphong);
    
?>
<a class='button button2' style="float:left" href="index.php?url=HoaDon/QuanLyHoaDon.php">Quay Lại</a>
<style>
    .table_hd1{
    text-align: center;
    border: 3px solid black;
    margin: 25px auto;
}
.hoadon1 td{ 
    border: 1px solid black;
    font-weight: bold;
    color: #424242;
    padding: 5px;
}
.hoadon1 th{
    border: 1px solid black;
    font-weight: bold;
    padding: 5px;
}
.thantrang{
    background-color: white;
}
</style>
<div id="inra" >
    <h1 style="  text-align: center;">Hóa Đơn Thanh Toán</h1> 
<div>
    <table  style="  text-align: center;margin: 25px auto; border: 1px solid black;" class="table_hd1">
        <tr>
        <th style="border-bottom: 1px solid black;" colspan="6"> Khách Hàng</th>               
        </tr>
        <tr>  
            <th style="border-bottom: 1px solid black; border-right: 1px solid black;">SCMT</th>      
            <th style="border-bottom: 1px solid black;border-right: 1px solid black;">Họ Và Tên</th>        
            <th style="border-bottom: 1px solid black;border-right: 1px solid black;" colspan="2">Địa Chỉ</th> 
            <th style="border-bottom: 1px solid black;border-right: 1px solid black;">Ngày Sinh </th>
            <th style="border-bottom: 1px solid black;">Số Điện Thoại </th>                  
        </tr> 
        <tr>  
            <td style="border-bottom: 1px solid black;border-right: 1px solid black;"><?php echo $dulieukh[1]?></td>
            <td style="border-bottom: 1px solid black;border-right: 1px solid black;"><?php echo $dulieukh[2], " " ,$dulieukh[3]?> </td>        
            <td style="border-bottom: 1px solid black;border-right: 1px solid black;" colspan="2"><?php echo $dulieukh[5]?></td> 
            <td style="border-bottom: 1px solid black;border-right: 1px solid black;"><?php echo $dulieukh[4]?></td>
            <td style="border-bottom: 1px solid black;"><?php echo $dulieukh[6]?></td>                                    
        </tr> 
        <tr>
        <th style="border-bottom: 1px solid black;" colspan="6"> Phòng</th>               
        </tr>
        <tr> 
            <th style="border-bottom: 1px solid black;border-right: 1px solid black;">ID</th>
            <th style="border-bottom: 1px solid black;border-right: 1px solid black;">Loại Phòng</th>      
            <th style="border-bottom: 1px solid black;border-right: 1px solid black;">Vị Trí</th>        
            <th style="border-bottom: 1px solid black;border-right: 1px solid black;">Đơn Giá</th> 
            <th style="border-bottom: 1px solid black;border-right: 1px solid black;">Thời Gian Lưu Trú</th> 
            <th style="border-bottom: 1px solid black;">Thành Tiền</th>                      
        </tr>               
        <tr>        
            <td style="border-bottom: 1px solid black;border-right: 1px solid black;"><?php echo $dulieuphong[0]?></td> 
            <td style="border-bottom: 1px solid black;border-right: 1px solid black;"><?php echo $dulieuphong[1]?></td>
            <td style="border-bottom: 1px solid black;border-right: 1px solid black;"><?php echo $dulieuphong[2]?></td>
            <td style="border-bottom: 1px solid black;border-right: 1px solid black;"><?php echo $dulieuphong[3]?></td>
            <td style="border-bottom: 1px solid black;border-right: 1px solid black;"><?php ThoiGianLuuTru($dulieu[4])?></td>
            <td style="border-bottom: 1px solid black;"><?php 
        $tienphong=0;
        if ( TongGio($dulieu[4])< 1) {
            $tienphong=$dulieuphong[3];
            echo number_format($tienphong);
            } else {
            $tienphong=TongGio($dulieu[4])*$dulieuphong[3];
            echo number_format($tienphong);  
            }                   
        ?></td>                      
        </tr>             
        <tr>
        <th style="border-bottom: 1px solid black;" colspan="6"> Dịch vụ</th> 
        </tr>
        <tr>        
            <th style="border-bottom: 1px solid black;border-right: 1px solid black;" colspan="4">Chi Tiết</th>        
            <th style="border-bottom: 1px solid black;border-right: 1px solid black;">Số Lượng</th> 
            <th style="border-bottom: 1px solid black;">Thành Tiền</th>                      
        </tr> 
        <?php 
        $sqldv = "SELECT * FROM ctdv WHERE MaCI='$maCI'";  
        $thucthidv = mysqli_query($ketnoisql,$sqldv);    
        while(($dulieudv = mysqli_fetch_array($thucthidv)) ){
            echo"<tr>";
            echo"<td style='border-bottom: 1px solid black;border-right: 1px solid black;' colspan='4'>";
            echo thongtindv($dulieudv[1]);
            echo "</td>";
            echo"<td style='border-bottom: 1px solid black;border-right: 1px solid black;'>";
            echo $dulieudv[2];
            echo "</td>";
            echo"<td style='border-bottom: 1px solid black;'>";
            echo number_format($dulieudv[3]);
            echo "</td>";                
        echo"</tr>";}    
     ?>     <tr>        
                <th  style='border-bottom: 1px solid black;border-right: 1px solid black;' colspan="4">Tổng Cộng</th>
                <td style='border-bottom: 1px solid black;' colspan="2"><?php echo number_format(sumtiendv($maCI))?></td>  
            </tr>
            <tr>        
                <th style='border-bottom: 1px solid black;' colspan="6">Tổng Cộng Thanh Toán</th>  
            </tr> 
            <tr>                          
                <th style='border-bottom: 1px solid black;border-right: 1px solid black;' colspan="4">Tổng Phí Dịch Vụ</th>       
                <td  style='border-bottom: 1px solid black;' colspan="2"><?php echo number_format(sumtiendv($maCI))?></td>                    
            <tr> 
                <th style='border-bottom: 1px solid black;border-right: 1px solid black;' colspan="4">Tổng Phí Phòng</th> 
                <td  style='border-bottom: 1px solid black;' colspan="2"><?php echo number_format($tienphong);?></td>
            </tr>    
            <tr> 
                <th style='border-right: 1px solid black;' colspan="4">Tổng Cộng</th> 
                <td colspan="2"><?php echo number_format(sumtiendv($maCI)+ $tienphong)?></td>  
            </tr>
    </table>
    <h5 style=" text-align: center;">Thời Gian Thanh Toán: <?php echo $dulieu[5]?></h5>
    <h4 style=" text-align: center;">Khách Sạn Trần Văn Sáng xin chào quý khách</h4>
        </div>
    </div>
<input type="button" value="In Hóa Đơn" onclick="printPage('inra');">


        

