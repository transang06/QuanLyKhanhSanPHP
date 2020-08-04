<?php  
    $maKH=$_GET["maKH"];    
    $sql = "SELECT * FROM khachhang WHERE MaKH=$maKH";  
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
        width: 40%;
    }    
</style>
<div class="thanhtrangthai">
    <a class='button button2' style="float:left" href="index.php?url=KhachHang/QuanLyKhachHang.php">Quay Lại</a> 
    <a class='button button2'style='float:right' onclick=\"return confirm('Bạn có chắc chắn xóa mục này không?');\" href='index.php?url=KhachHang/XoaKH.php&maKH=<?php echo $dulieu[0]?>'>Xóa khách hàng</a>
    
</div>  
<div class="noidung"> 
<h2>Sửa Thông Tinh Khách Hàng <?php echo $dulieu[3] ?> </h2>
<form action= "" method="Post">
    <div class="nhomform">
            <span>Số CMT</span>
            <input class="nhap" name='scmt' value="<?php echo $dulieu[1] ?>">
    </div>
    <div class="nhomform">
            <span>Họ</span>
            <input class="nhap" type="text" name='ho' value="<?php echo $dulieu[2] ?>">
    </div>
    <div class="nhomform">
            <span>Tên</span>
            <input class="nhap" type="text" name='ten' value="<?php echo $dulieu[3] ?>">
    </div>
    <div class="nhomform">
            <span>Ngày Sinh</span>
            <input class="nhap" type="date" name='ngaysinh' value="<?php echo $dulieu[4] ?>">
    </div>
    <div class="nhomform">
            <span>Địa Chỉ</span>
            <input class="nhap" type="text" name='diachi'  value="<?php echo $dulieu[5] ?>">
    </div>
    <div class="nhomform">
            <span>SĐT</span>
            <input class="nhap" type="tel" name='sdt' value="<?php echo $dulieu[6] ?>">
    </div>
    <div class="nhomform">
            <span>Giới Tính</span>
            <select class="nhap" name="gioi">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
                <option value="Khác">Khác</option> 
            </select>
    </div>
    <div class="nhomform">
            <span>Note</span>
            <input class="nhap" name='note' value="<?php echo $dulieu[10] ?>">
    </div>
    <input type="hidden" name='CN' value="<?php echo date("y/m/d G.i:s", time());?>"/> 
    <input class="button button2" value="Cập Nhật" type="submit"/> 
</form>
<?php
    if(isset($_POST['scmt'])&& $_POST['ten']){
        $scmt = $_POST['scmt'];
        $ho = $_POST['ho'];
        $ten = $_POST['ten'];
        $ngaysinh = $_POST['ngaysinh'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $gioi = $_POST['gioi'];
        $cnhat = $_POST['CN']; 
        $note = $_POST['note'];
        $sql =  "UPDATE khachhang SET  `SCMT`='$scmt', `Ho`='$ho',`Ten`='$ten',`NgaySinh`='$ngaysinh' ,`DiaChi`='$diachi',`SDT`='$sdt',`GioiTinh`='$gioi',`CNLanCuoi`='$cnhat',`Note`='$note' WHERE `MaKH`=$maKH";
        mysqli_query($ketnoisql,$sql);   
        chuyentrang("index.php?url=KhachHang/QuanLyKhachHang.php");
        }

?>
</div> 



    
    
    

