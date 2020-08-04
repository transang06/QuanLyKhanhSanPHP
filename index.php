<?php
    session_start();
    include './ChucNang.php';
    include './ketnoi_db.php';
    include './User/trangThaiDangNhap.php';
    date_default_timezone_set("Asia/Ho_Chi_Minh");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">    
    <link rel="stylesheet" href="./Css/style_bocuc.css">   
    <link rel="shortcut icon" type="image" href="image/sss.png"/>
    <link href="Barlow_Condensed?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Admin Page</title>
</head>
<body>   
<body>   
 <!------------------------------------------------------------------------------------------------------------------>
    <div class="header">                
        <div class="sologan">
            <a style="text-decoration: none; color: #32373C;" href='index.php'>
                <h2>Reindeer Hotel Management</h2>
                <p>Hân Hạnh Chào Mừng Bạn Trở Lại Trang Quản Trị Hệ Thống Của Khách Sạn</p>                 
            </a>                        
      </div>
        <div class="chaoad">
            <a href="https://www.youtube.com/channel/UCmpMDrPL0iINRYHkiKLBUbw" target="_blank"><img src='image/iconyt.png' width='32px'/></a>
            <a href="https://www.facebook.com/ZutivenSoftware" target="_blank"><img src='image/iconfb.png' width='32px'/></a>
            <a href="mailto: Vansang10a6txqt@gmail.com" target="_blank"><img src='image/gmail.png' width='32px'/></a>
            <a href="tel:0349923955"><img src='image/call.png' width='32px'/></a>
            <a href="https://www.youtube.com/watch?v=ZNlij35YPDo" target="_blank"><img src='image/huongdan.png' width='32px'/></a>
                <?php
                $nameUser = $_SESSION['dangnhap'];                
                ?>
                <p>Chào Mừng Admin </p> 
                <p style="text-align: center">
                    <?php echo $nameUser['fullname']; ?>
                </p>  
        </div>
    </div>
 <!----------------------------------------------------------------------------------------------------------------->

<div class="thanhdieuhuong">     
    
<ul>
    <li>
        <a href='index.php'>Trang Chủ</a>        
    </li> 
   <li>
    <a href="index.php?url=QuanLyPhong/QuanLyPhong.php">Quản lý Phòng</a>
  </li> 
  <li>
    <a href="index.php?url=KhachHang/QuanLyKhachHang.php">Quản lý Khách Hàng</a>
  </li> 
  <li>
    <a href="index.php?url=DichVu/DichVu.php">Quản lý Dịch Vụ</a>
  </li> 
  <li>
    <a href="index.php?url=NhanVien/QuanLyNV.php">Quản lý Nhân Viên</a>
  </li>
   <li>
    <a href="index.php?url=TB/QuanLyTB.php">Quản lý Thông Báo</a>
  </li>
  <li>
    <a href="index.php?url=Admin/QuanLyAdmin.php">Quản lý Admin</a>
  </li>
   <li>
    <a href="index.php?url=HoaDon/QuanLyHoaDon.php">Quản lý Hóa Đơn</a>
  </li>
  <li>
    <a href="index.php?url=HoaDon/DoanhThu.php">Báo Cáo Doanh Thu</a>
  </li>
  <li>
    <a href="index.php?url=VeChungToi.php">Về Chúng Tôi</a>
  </li>
  
   <li style="float:right">
    <a href="index.php?url=User/logout.php">Đăng Xuất</a>
   </li> 
  
</ul> 
</div>

<!----------------------------------------------------------------------------------------------------------------->
<div class="thantrang">           
   <?php
   if(isset($_GET['url']))
       include ($_GET['url']);  
   else 
       include("Trangchu.php");
   ?>  
</div>
<!---------------------------------------------------------------------------------------------------------------------------->
  
</body>
</html>
