<?php
    include 'ketnoi_db.php';
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
    $sqldv = "SELECT * FROM ctdv WHERE MaCI='$maCI'";  
    $thucthidv = mysqli_query($ketnoisql,$sqldv);    
?>
<style>
    .dh{
        float: top;
        width: 100%;
        height: 12%;
    }
    .khachhang{
        float: left;
        width: 25%;        
        padding: 30px;
    }
    .phong{
        float: left;        
        width: 25%;
        padding: 30px;
        border-right: 1px solid black;
    } 
    .dichvu{        
        width: 30%;
        float: right;
        padding: 30px;
    } 
    .table_hd{ 
    text-align: center;
}
    .table_hd td{ 
        border: 1px solid black;
    background-color:#ffffff ;
    font-weight: bold;
    color: #424242;
    padding: 5px;
    margin: 30px 0px;
}
    .table_hd th{
    border: 1px solid black;
    background-color:#eef4ff ;    
    padding: 5px;
    margin: 30px 0px;
}
</style>
<div class="dh">
    <a class='button button2' style='float:left' href='index.php?url=QuanLyPhong/PhongCheckin.php'>Quay Lại</a>  
    <a class='button button2' href='index.php?url=CheckIn/DSDV.php&maCI=<?php echo$dulieu[0]?>'>Thêm Dịch Vụ</a>
    <form style='float:right' action= "" method="Post"> 
        <input type="hidden" name='kt' value="1"/>
        <input class='button button2' value="Thanh Toán" type="submit"  onclick="return confirm('Bạn có chắc chắn check out phòng này không?');"/> 
       
    </form>
</div>
<div class="khachhang">
    <h2>Khách Hàng</h2>
    <div class="nhomform">
            <span>ID KH</span>
            <div class="nhap"><?php echo $dulieukh[0]?></div>
    </div>
    <div class="nhomform">
            <span>Số CMT</span>
            <div class="nhap"><?php echo $dulieukh[1]?></div>
    </div>
    <div class="nhomform">
            <span>Họ Tên</span>
            <div class="nhap"><?php echo $dulieukh[2]," ", $dulieukh[3]?></div>
    </div>
    <div class="nhomform">
            <span>Ngày Sinh</span>
            <div class="nhap"><?php echo $dulieukh[4]?></div>
    </div>
    <div class="nhomform">
            <span>Địa Chỉ</span>
            <div class="nhap"><?php echo $dulieukh[5]?></div>
    </div>
    <div class="nhomform">
            <span>SĐT</span>
            <div class="nhap"><?php echo $dulieukh[6]?></div>
    </div>
    <div class="nhomform">
            <span>Giới Tính</span>
            <div class="nhap"><?php echo $dulieukh[7]?></div>
    </div>
    <div class="nhomform">
            <span>Note</span>
            <div class="nhap"><?php echo $dulieukh[10]?></div>
    </div>
</div>
<div class="phong">
    <h2>Phòng</h2>
    <div class="nhomform">
            <span>ID Phòng</span>
            <div class="nhap"><?php echo $dulieuphong[0]?></div>
    </div>
    <div class="nhomform">
            <span>Tên Phòng</span>
            <div class="nhap"><?php echo $dulieuphong[1]?></div>
    </div>
    <div class="nhomform">
            <span>Vị Trí</span>
            <div class="nhap"><?php echo $dulieuphong[2]?></div>
    </div>
    <div class="nhomform">
            <span>Đơn Giá</span>
            <div class="nhap"><?php echo $dulieuphong[3]?></div>
    </div>
    <div class="nhomform">
            <span>Ghi Chú</span>
            <div class="nhap"><?php echo $dulieuphong[4]?></div>
    </div>
    <div class="nhomform">
            <span>Lưu Trú</span>
            <div class="nhap"><?php ThoiGianLuuTru($dulieu[4])?></div>
    </div>
    <div class="nhomform">
            <span>Thành Tiền</span>
            <div class="nhap"><?php
                    $tienphong=(TongGio($dulieu[4])+1)*$dulieuphong[3];
                    echo number_format($tienphong); 
                ?> 
            </div>            
    </div>
</div>
<div class="dichvu">
    <h2>Dịch Vụ</h2>
    <table class="table_hd">            
                <tr>        
                    <th>Chi Tiết</th>        
                    <th>Số Lượng</th> 
                    <th>Thành Tiền</th>                      
                </tr> 
                  <?php 
                
                while(($dulieudv = mysqli_fetch_array($thucthidv)) ){
                    echo"<tr>";
                    echo"<td>";
                    echo thongtindv($dulieudv[1]);
                    echo "</td>";
                    echo"<td>";
                    echo $dulieudv[2];
                    echo "</td>";
                    echo"<td>";
                    echo number_format($dulieudv[3]);
                    echo "</td>";                
                echo"</tr>";}    
             ?>
                    <tr>        
                        <th >Tổng Cộng</th>
                        <td colspan="2"><?php echo number_format(sumtiendv($maCI))?></td>  
                    </tr>
                    <tr>        
                        <th style='background-color:#BDBDBD ;' colspan="3">Tổng Cộng Thanh Toán</th>                          
                    </tr> 
                    <tr>                          
                        <th>Tổng Phí Dịch Vụ</th>       
                        <td  colspan="2"><?php echo number_format(sumtiendv($maCI))?></td> 
                    <tr> 
                        <th>Tổng Phí Phòng</th> 
                        <td  colspan="2"><?php echo number_format($tienphong);?></td>
                    </tr>    
                    <tr> 
                        <th>Tổng Cộng</th> 
                        <td  colspan="2"><?php echo number_format(sumtiendv($maCI)+ $tienphong)?></td>  
                    </tr> 
            </table> 
</div>
<?php
    if(isset($_POST['kt'])){
        $tongThanhToan=sumtiendv($maCI)+ $tienphong;
        $timecheckout=date("y/m/d G:i:s", time());
        $sqlout = "UPDATE `phongcheckin` SET `TimeCheckOut`= '$timecheckout',`TongThanhToan`= '$tongThanhToan' where MaCI =$maCI";
        $sqlphongcandon = "INSERT INTO `phongcandon`(`MaLP`) VALUES ($dulieu[2])";
        mysqli_query($ketnoisql,$sqlout);
        mysqli_query($ketnoisql,$sqlphongcandon);        
        chuyentrang("index.php?url=HoaDon/QuanLyHoaDon.php");
        }
?>      
       




        

