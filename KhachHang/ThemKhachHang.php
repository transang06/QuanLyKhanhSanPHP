<style>
    .thanhtrangthai{
        float: top;      
    }
    .noidung{
        margin: 30px auto;
        width: 50%;
    }    
</style>
<div class="thanhtrangthai">
    <a class='button button2' style="float:left" href="index.php?url=KhachHang/QuanLyKhachHang.php">Quay Lại</a> 
    
</div>  
<div class="noidung"> 

<form action= "" method="Post">
        <h2>Thêm Khách Hàng Mới</h2> 
    <div class="nhomform">
            <span>Số CMT</span>
            <input class="nhap" type="number" name='scmt' placeholder="Nhập số CMT">
    </div>
    <div class="nhomform">
            <span>Họ</span>
            <input class="nhap" type="text" name='ho' placeholder="Nhập họ">
    </div>
    <div class="nhomform">
            <span>Tên</span>
            <input class="nhap" type="text" name='ten' placeholder="Nhập tên">
    </div>
    <div class="nhomform">
            <span>Ngày Sinh</span>
            <input class="nhap" type="date" name='ngaysinh' >
    </div>
    <div class="nhomform">
            <span>Địa Chỉ</span>
            <input class="nhap" type="text" name='diachi' placeholder="Nhập địa chỉ">
    </div>
    <div class="nhomform">
            <span>SĐT</span>
            <input class="nhap" type="tel" name='sdt' placeholder="Nhập SĐT">
    </div>
    <div class="nhomform">
            <span>Giới Tính</span>
            <select class="nhap"  style="padding: 0;padding-left: 20px;" name="gioi">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
                <option value="Khác">Khác</option> 
            </select>
    </div>
    <div class="nhomform">
            <span>Note</span>
            <input class="nhap" name='note' value="Không Ghi Chú">
    </div>    
    <input type="hidden" name='GN' value="<?php echo date("y/m/d G.i:s", time());?>"/> 
    <input class="button button2" value="Thêm" type="submit"/>    
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
        $GN = $_POST['GN'];
        $note = $_POST['note'];
        $sql = "INSERT INTO khachhang ( `SCMT`, `Ho`,`Ten`,`NgaySinh`, `DiaChi`,`SDT`,`GioiTinh`,`NgayGN`,`CNLanCuoi`,`Note`) VALUES ('$scmt','$ho','$ten','$ngaysinh','$diachi','$sdt','$gioi','$GN','$GN','$note')";
        mysqli_query($ketnoisql,$sql);   
        chuyentrang("index.php?url=KhachHang/QuanLyKhachHang.php");
        }
?>
</div>
    
    
    

