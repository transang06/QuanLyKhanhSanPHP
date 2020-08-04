<?php
    include 'ketnoi_db.php';
    $maDV=$_GET["maDV"];    
    $sql = "SELECT * FROM dichvu WHERE MaDV=$maDV";  
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
    <a class='button button2' style="float:left" href="index.php?url=DichVu/DichVu.php">Quay Lại</a>
    <a class='button button2' style="float:right" onclick=\"return confirm('Bạn có chắc chắn xóa mục này không?');\" href='index.php?url=DichVu/XoaDV.php&maDV=<?php echo $dulieu[0]?>'>Xóa dịch vụ này</a>
</div>  
<div class="noidung"> 
    <h2>Sửa Dịch Vụ</h2>
    <form action= "" method="Post">
        <div class="nhomform">
            <span>Tên Dịch Vụ</span>
            <input class="nhap" type="text" name='tendv' value="<?php echo $dulieu[1] ?>">
        </div>
        <div class="nhomform">
            <span>Đơn Giá</span>
            <input class="nhap" type="text" name='giadv' value="<?php echo $dulieu[2] ?>">
        </div>
        <div class="nhomform">
            <span>Note</span>
            <input class="nhap" type="text" name='note' value="<?php echo $dulieu[3] ?>" >
        </div>
    <input class='button button2' value="Cập Nhật" type="submit"/>
  
</form>
<?php
    if(isset($_POST['tendv'])&& $_POST['giadv']){
        $tendv = $_POST['tendv'];
        $giadv = $_POST['giadv'];
        $note = $_POST['note'];        
        $sql = "UPDATE dichvu SET `TenDV`='$tendv',`GiaDV`='$giadv',`Note`='$note' WHERE MaDV=$maDV";
        mysqli_query($ketnoisql,$sql);   
        chuyentrang("index.php?url=DichVu/DichVu.php");
        }
?>
</div>  

    
    
    

