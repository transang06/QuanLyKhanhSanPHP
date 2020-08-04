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
    <a class="button button2" style="float:left" href='index.php?url=Admin/QuanLyAdmin.php'>Quay Lại</a>
</div>  
<div class="noidung">
<form action= "" method="Post">
        <h2>Đăng Ký Tài Khoản</h2>        
        <div class="nhomform">
            <span>Username</span>
            <input class="nhap" type="text" name='username' placeholder="Nhập Tên Tài Khoản...">
        </div>
        <div class="nhomform">
            <span>Password</span>
            <input class="nhap" type="password" name='password' placeholder="Nhập Mật Khẩu...">
        </div>
        <div class="nhomform">
            <span>Họ Tên</span>
            <input class="nhap" type="text" name='fullname' placeholder="Nhập Tên Của Bạn ..." >
        </div>
        <div class="nhomform" >
            <span>Ngày Sinh</span>
            <input class="nhap" type="date"  name='birthday' value="Không Ghi Chú">
        </div>
        <input type="hidden" name='timecn' value="<?php echo date("y/m/d G.i:s", time());?>"/>
        <input class="button button2" type="submit" value="Đăng ký"/>
</form> 
<?php 
   if ( !empty($_POST['username']) && !empty($_POST['password'])&&  !empty($_POST['fullname']) && !empty($_POST['birthday'])) {  
        $user = $_POST['username'];
        $mk = $_POST['password'];
        $ten = $_POST['fullname'];
        $ns = $_POST['birthday'];       
        $timecn = $_POST['timecn'];
       $sql= "INSERT INTO user (`username`, `password`,`fullname`,`birthday`,`created_time`, `last_updated`) VALUES ('$user', ('$mk'),'$ten','$ns','$timecn','$timecn')";
       $Xet = mysqli_query($ketnoisql,$sql);
       if (!$Xet) {
            if (strpos(mysqli_error($ketnoisql), "Duplicate entry") !== FALSE) {/* tìm kiếm chuỗi trùng lặp trong lỗi truyy vấn*/  
                echo "
                    <div class='box-lo'>
                        <h1>Thông báo</h1>
                        <h4>Tài khoản đã tồn tại. Bạn vui lòng chọn tài khoản khác</h4>
                    </div>";                                
                }
            }else {?>
               <script>         
               alert("Chức Mừng\nBạn Đã Tạo Tài Khoản Thành Công ");         
                </script>
                    <?php
                chuyentrang("index.php?url=Admin/QuanLyAdmin.php");
                }              
    }  
    else{
        echo "
        <div class='box-lo'>
            <h1>Thông báo</h1>
            <h4>Bạn Hãy nhập đủ thông tin vào các mục bên dưới để đăng ký tài khoản</h4>           
        </div>";
}
?>
</div>
