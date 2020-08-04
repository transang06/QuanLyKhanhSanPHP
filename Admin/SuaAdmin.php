<?php
    include 'ketnoi_db.php';
    $maad=$_GET["maAD"];    
    $sql = "SELECT * FROM user WHERE id=$maad";  
    $thucthi = mysqli_query($ketnoisql,$sql);
    $dulieu = mysqli_fetch_array($thucthi);
    echo "";
?>
<style>
    .thanhtrangthai{
        float: top;
        width: 100%;
        height: 20%;
    }
    .noidung{
        margin: 30px auto;
        width: 45%;
    }
    
</style>
<div class="thanhtrangthai">
    <a class="button button2"  style="float: left" href='index.php?url=Admin/QuanLyAdmin.php'>Quay Lại</a>
    <a class='button button2' style='float:right' onclick=\"return confirm('Bạn có chắc chắn xóa mục này không?');\" href='index.php?url=Admin/XoaAdmin.php&maAD=<?php echo$dulieu[0]?>'>Xóa Tài Khoản</a>
</div>  
<div class="noidung"> 
    <h2>Cập Nhật Thông Tin Admin</h2>
        <form action="" method="Post">
            <div class="nhomform">
            <span>Họ Và Tên</span>
            <input class="nhap" type="text" name='ten' value="<?php echo $dulieu[3]?>">
            </div>
            <div class="nhomform">
            <span>Mật Khẩu Cũ</span>
            <input class="nhap" type="password" name='mkcu' placeholder="Nhập Mật Khẩu Cũ...">
            </div>
            <div class="nhomform">
            <span>Mật Khẩu Mới</span>
            <input class="nhap" type="password" name='mkmoi' placeholder="Nhập Mât Khẩu Mới...">
            </div>
            <div class="nhomform">
            <span>Ngày Sinh</span>
            <input class="nhap" type="date" name='ns' value="<?php echo $dulieu[4]?>">
            </div>            
            <input type="hidden" name='timecn' value="<?php echo date("y/m/d G.i:s", time());?>"/>
            <input class="button button2" type="submit" value="Cập Nhật Thông Tin" onclick="return confirm('Bạn có đảm bảo nhập đúng thông tin không?');"/>
        </form> 
<?php 
if(isset($_POST['mkcu']) && !empty($_POST['mkcu'])&& isset($_POST['mkmoi']) && !empty($_POST['mkmoi'])){   
    $ten = $_POST['ten'];
    $mkcu = $_POST['mkcu'];
    $mkmoi = $_POST['mkmoi'];        
    $ns = $_POST['ns'];
    $timecn = $_POST['timecn'];  
    $sqlkt = "Select * from `user` WHERE (`id` = '$maad' AND `password` = '$mkcu')";
    $sqlup = "UPDATE user SET `fullname`='$ten' ,`password`='$mkmoi',`birthday`='$ns' ,`last_updated`='$timecn' WHERE `id`='$maad'";
    $kqkt= mysqli_query($ketnoisql,$sqlkt); 
    if($kqkt->num_rows > 0){
        mysqli_query($ketnoisql,$sqlup);?> 
        <script>         
               alert("Chức Mừng\nBạn Đã Cập Nhật Thành Công Thông Tin Thành Công");         
        </script>   
        <?php chuyentrang("index.php?url=Admin/QuanLyAdmin.php"); 
 }
    else {?>
         <div class="box-lo">
         <h1>Thông Báo</h1>   
         <h3>Mật khẩu cũ của tài khoản " <?php echo $dulieu[1];?>" không khớp với hệ thống </h3>
                </div>
   <?php }
}  
else{?>
    <div class="box-lo">
        <h1>Thông Báo</h1>   
        <h3>Bạn hãy nhập đủ thông tin và "mật khẩu" để  xác nhận trước khi ấn vào cập nhập thông tin </h3>       
     </div>
 <?php }
?>
</div>