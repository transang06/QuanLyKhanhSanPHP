<style>
    .thanhtrangthai{
        float: top;
        width: 100%;
        height:30%;
    }
    .noidung{
        margin: 30px auto;
        width: 50%;
    }    
</style>
<div class="thanhtrangthai">
    <a class="button button2" style="float:left" href="index.php?url=KhachHang/ThemKhachHang.php">Thêm Khách Hàng Mới</a> 
<form style="float:right; margin-top: 20px;margin-right: 20px" action= "" method="post">
    <div class="nhomform">
        <span>Kiểm tra</span>
        <input class="nhap" type="number" name='keyword' placeholder="Nhập số CMT">          
    </div> 
        <input class="button button2" style="margin-top: -20px" value="Kiểm Tra" type="submit"/>
</form> 
    <?php
    if(!empty($_POST['keyword'])){   
    $keyword = $_POST['keyword'];
    $sqlkt = "Select * from khachhang WHERE SCMT =$keyword";   
    $kt= mysqli_query($ketnoisql,$sqlkt);    
    if($kt->num_rows >0){
      ?> <script>         
               alert("Thông Báo\nThông tin khách hàng này đã có.\n Tiếp Tục Check In ");         
        </script><?php
    } else {
        ?> <script>         
               alert("Thông Báo\n Chưa có thông tin về khách hàng này, hãy thêm khách hàng để tiếp tục thủ tục checkin ");         
        </script><?php
    }
}
?> 
</div>  
<div class="noidung"> 
<form action= "" method="Post">
        <h2>Thông Tin Check In</h2> 
    <div class="nhomform">
            <span>Thông Tin Khách Hàng</span>
            <?php chonkh();?>
    </div>
    <div class="nhomform">
            <span>Loại Phòng</span>
            <?php chonphong() ?>
    </div>
    <div class="nhomform">
            <span>Số Người Ở</span>
            <input class="nhap" type="number" name='SoNguoi' placeholder="Nhập Số Lượng">
    </div>      
    <input type="hidden" name='TimeCI' value="<?php echo date("y/m/d G.i:s", time());?>"/> 
    <input class="button button2" value="Tiến Hành Tạo" type="submit"/>    
</form> 
<?php
    if(isset($_POST['MaKH'])&& $_POST['MaLP']&& $_POST['SoNguoi']){
        $maKh = $_POST['MaKH'];
        $maLP = $_POST['MaLP'];
        $soNguoi = $_POST['SoNguoi'];        
        $timeCI = $_POST['TimeCI'];
        $sqlcheckin = "INSERT INTO phongcheckin ( `MaKH`, `MaLP`,`SoNguoi`,`TGBatDau`) VALUES ('$maKh','$maLP','$soNguoi','$timeCI')";        
        mysqli_query($ketnoisql,$sqlcheckin);  
        $sqlxoaPT = "DELETE FROM phongtrong WHERE MaLP=$maLP";
        mysqli_query($ketnoisql,$sqlxoaPT);        
        ?>
        <script>         
           alert("Chức Mừng\nBạn Đã Check In Thành Công Khách Hàng <?php echo $ho," ",$ten ?>");         
        </script>
        <?php 
        chuyentrang("index.php?url=QuanLyPhong/PhongCheckIn.php"); 
   }
?>   
</div>
                  
        
