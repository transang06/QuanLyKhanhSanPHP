<style>
    .right{
        width: 70%;
        height: 100%;
        float: right;
        margin:auto 30px;
        overflow: auto; 
    }
    .left{        
        width: 25%;
        height: 100%;
        float: left;    
        text-align: center;
        border-right:  3px solid #848484;
    }   
    .cumTB{
            border: 2px solid #A9E2F3; 
            border-radius: 10px 0 0 10px;
            background-color: #FFFFFF;           
            padding: 10px;
            text-align: left;
            color: #3B0B0B;            
        }
         .thanhtrangthai{
            float: top; 
            height: 10%;
            margin: 20px;
        }      
</style>   
<div class="left">
<a class="button button2" style="min-width: 40%;" href='index.php?url=CheckIn/CheckIn.php'>Thủ Tục Nhận Phòng</a>
<a class="button button2" style="min-width: 40%;" href='index.php?url=QuanLyPhong/PhongCheckin.php'>Thanh Toán</a>
<a class="button button2" style="min-width: 40%;" href='index.php?url=QuanLyPhong/DSPhongTrong.php'>Phòng Trống</a>
<a class="button button2" style="min-width: 40%;" href='index.php?url=QuanLyPhong/PhongCheckin.php'>Phòng Đang Sử Dụng</a>
<a class="button button2" style="min-width: 40%;" href='index.php?url=KhachHang/QuanLyKhachHang.php'>Khách Hàng</a>
<a class="button button2" style="min-width: 40%;" href='index.php?url=DichVu/DichVu.php'>Xem Dịch Vụ</a>
<a class="button button2" style="min-width: 40%;" href='index.php?url=NhanVien/QuanLyNV.php'>Xem Nhân Viên</a>
<a class="button button2" style="min-width: 40%;" href='index.php?url=HoaDon/QuanLyHoaDon.php'>Xem Hóa Đơn</a>
<a class="button button2" style="min-width: 40%;" href='index.php?url=HoaDon/DoanhThu.php'>Báo Cáo Doanh Thu</a>
</div> 
<div class="right"> 
    <div class="thanhtrangthai">
        <form action= "" method="Post">    
            <div class="nhomform">
                <input class="nhap" type="text"  name='ThongBao' placeholder="Nhập Thông Báo">
                <input class="button2" value="Thêm Thông Báo" type="submit"/>
            </div> 
        </form>   
    <?php
    if(!empty($_POST['ThongBao'])){
        $TB = $_POST['ThongBao'];               
        $sqlTB = "INSERT INTO `thongbao`(`NoiDung`) VALUES ('$TB')";
        mysqli_query($ketnoisql,$sqlTB); 
        ?> 
        <script>         
               alert("Thông Báo\n Thêm Thông Báo thành công ");         
        </script>
        <?php        
        }?>    
    </div> 
<?php    
$sqlTB ="SELECT * FROM Thongbao";
$thucthi = mysqli_query($ketnoisql,$sqlTB);      
while(($dulieu = mysqli_fetch_array($thucthi))){
    ?>
        <p class="cumTB">
        <?php echo $dulieu[1]?> 
        </p>
    <?php              
}   
?>   
</div> 
