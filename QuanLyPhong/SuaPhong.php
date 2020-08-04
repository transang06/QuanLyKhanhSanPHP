<?php     
    $maLP=$_GET["maLP"]; 
    $sql = "SELECT * FROM phong WHERE MaLP=$maLP";  
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
    <a class="button button2" style="float:left" href='index.php?url=QuanLyPhong/QuanLyPhong.php'>Quay Lại</a>
    <a class='button button2' style="float:right" onclick="return confirm('Bạn có chắc chắn xóa mục này không?')" href="index.php?url=QuanLyPhong/XoaPhong.php&maLP=<?php echo $dulieu[0]?>">Xóa Phòng</a>

</div>  
<div class="noidung"> 

<form action= "" method="Post">
    <h2>Cập nhật dữ liệu cho Phòng "<?php echo $dulieu[1] ?>"</h2> <br>       
        <div class="nhomform">
            <span>Tên Loại Phòng</span>
            <input class="nhap" type="text" name='TenLoaiPhongs' value="<?php echo $dulieu[1] ?>">
        </div>
        <div class="nhomform">
            <span>Vị Trí</span>
            <input class="nhap" type="text" name='ViTris' value="<?php echo $dulieu[2] ?>">
        </div>
        <div class="nhomform">
            <span>Đơn Giá(giờ</span>
            <input class="nhap" type="text" name='gias' value="<?php echo $dulieu[3] ?>" >
        </div>
        <div class="nhomform">
            <span>Note</span>
            <input class="nhap" type="text" name='Notes' value="<?php echo $dulieu[4] ?>">
        </div>
        <input class="button button2" value="Cập Nhật" type="submit"/>
</form>
<?php
if(isset($_POST['TenLoaiPhongs'])&& isset($_POST['gias'])){        
        $ten = $_POST['TenLoaiPhongs'];
        $vitri = $_POST['ViTris'];
        $gia = $_POST['gias'];
        $note = $_POST['Notes'];
        $sqlsua = "UPDATE phong SET `TenLoaiPhong`='$ten', `ViTri`='$vitri',`DonGia`='$gia',`Note`='$note' WHERE `MaLP` = '$maLP'";
        mysqli_query($ketnoisql,$sqlsua);
        ?>                    
            <script>         
               alert("Chức Mừng\nBạn Đã Cập Nhật Thành Công Thông Tin Cho Phòng <?php echo $ten?>");         
            </script>                
        <?php
        chuyentrang("index.php?url=QuanLyPhong/QuanLyPhong.php");
 }
?> 

</div>
