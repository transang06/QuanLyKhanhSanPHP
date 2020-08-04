<html>
    <head>
        <title>Đăng Nhập Hệ Thống Với Tư Cách Quản Trị Viên</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/png" href="../image/LoGo.png"/>
        <link rel="stylesheet" href="../Css/style_bocuc.css">   
        <style>
        .box-lo{
            text-align: center;
            margin:150px auto ;
            width: 40%;          
            border: 3px solid white;
            border-radius: 15px / 50px;/*góc bo tròn*/ 
            text-align: center;
            padding: 1px 25px 25px 30px;/*Phần đệm bảng*/
            background-image: linear-gradient(to bottom right , #F8FBEF, #FBEFF8); 
            background-size: cover;
            background-position: center;
            background-repeat: repeat-x; /* lặp lại theo chiều ngang*/
            box-shadow: 0 64px 128px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .bodylogin{   
            background-image:linear-gradient(to bottom right, #95B1CB, #DDFFFF,#61BEDF,#ACF0E6); 
            width: 1000px; height: 700px;
            margin: 0 auto;
            box-shadow: none;
    
}  
</style>
    </head>
    <body class="bodylogin" > 
        <?php
        session_start();
        include '../ketnoi_db.php';
        include '../ChucNang.php';
        $error = false;
        if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
            $ketqua_lg = mysqli_query($ketnoisql, "Select `id`,`username`,`fullname`,`birthday` from `user` WHERE (`username` ='" . $_POST['username'] . "' AND `password` = ('" . $_POST['password'] . "'))");
            if (!$ketqua_lg) {
                $error = mysqli_error($ketnoisql);
            } else {
                $user = mysqli_fetch_assoc($ketqua_lg);
                $_SESSION['dangnhap'] = $user;
            }
            mysqli_close($ketnoisql);
            if ($error !== false || $ketqua_lg->num_rows == 0) {
                ?>
                <div class="box-lo">
                    <h1>Thông báo</h1>
                    <h4><?= !empty($error) ? $error : "Thông tin đăng nhập không chính xác" ?></h4>
                    <a class="button button2" href="../User/login.php">Quay lại</a>
                </div>
                <?php
                exit;
            }
            ?>
        <?php } ?>
        <?php if (empty($_SESSION['dangnhap'])) { ?>
            <div class="box-lo">
                
                <h1>Đăng nhập tài khoản</h1><br>
                <form action="../User/login.php" method="Post" autocomplete="off">
                    <div class="nhomform">
                        <span>Username</span>
                        <input class="nhap" type="text" name='username' placeholder="Nhập Tên Tài Khoản" >
                    </div>
                    <div class="nhomform">
                        <span>Password</span>
                        <input class="nhap" type="password" name='password' placeholder="Mật Khẩu!" >
                    </div> 
                    <input class="button button2" type="submit" value="Đăng Nhập" /><br>                                      
                </form>
            </div>
            <?php
        } else {           
            chuyentrang("../index.php");  
            ?>                 
        <?php } ?>     
    </body>
</html>
