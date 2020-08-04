<?php     
    $maNV=$_GET["maNV"]; 
    $sql = "SELECT * FROM nhanvien WHERE MaNV=$maNV";  
    $thucthi = mysqli_query($ketnoisql,$sql);
    $dulieu = mysqli_fetch_array($thucthi);
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
    <a class="button button2" style="float:left" href='index.php?url=NhanVien/QuanLyNV.php'>Quay Lại</a>
    <a class='button button2' style="float:right" onclick="return confirm('Bạn có chắc chắn xóa mục này không?')" href="index.php?url=NhanVien/XoaNV.php&maNV=<?php echo $dulieu[0]?>">Xóa Nhân Viên</a>

</div>  
<div class="noidung"> 

<form action= "" method="Post">
    <h2>Cập nhật dữ liệu cho Nhân Viên "<?php echo $dulieu[1] ?>"</h2> <br>       
        <div class="nhomform">
            <span>Tên Nhân Viên</span>
            <input class="nhap" type="text" name='TenNhanVien' value="<?php echo $dulieu[1] ?>">
        </div>
        <div class="nhomform">
            <span>SĐT</span>
            <input class="nhap" type="text" name='SDTNV' value="<?php echo $dulieu[2] ?>">
        </div>
        <div class="nhomform">
            <span>Chức Vụ</span>
            <input class="nhap" type="text" name='ChucVu' value="<?php echo $dulieu[3] ?>" >
        </div>        
        <input class="button button2" value="Cập Nhật" type="submit"/>
</form>
<?php
if(isset($_POST['TenNhanVien'])&& isset($_POST['SDTNV'])){        
        $tennv = $_POST['TenNhanVien'];
        $sdtnv = $_POST['SDTNV'];        
        $ChucVu = $_POST['ChucVu'];
        $sqlsua = "UPDATE nhanvien SET `TenNV`='$tennv', `SDT`='$sdtnv',`ChucVu`='$ChucVu' WHERE `MaNV` = '$maNV'";
        mysqli_query($ketnoisql,$sqlsua);
        ?>                    
            <script>         
               alert("Chức Mừng\nBạn Đã Cập Nhật Thành Công Thông Tin Cho Phòng <?php echo $ten?>");         
            </script>                
        <?php
        chuyentrang("index.php?url=NhanVien/QuanLyNV.php");
 }
?> 

</div>
