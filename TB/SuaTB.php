<?php     
    $maTB=$_GET["maTB"]; 
    $sql = "SELECT * FROM thongbao WHERE MaTB=$maTB";  
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
    <a class="button button2" style="float:left" href='index.php?url=TB/QuanLyTB.php'>Quay Lại</a>
    <a class='button button2' style="float:right" onclick="return confirm('Bạn có chắc chắn xóa mục này không?')" href="index.php?url=TB/XoaTB.php&maTB=<?php echo $dulieu[0]?>">Xóa Thông Báo</a>

</div>  
<div class="noidung"> 
<form action= "" method="Post">
    <h2>Cập nhật dữ liệu Thông báo</h2> <br>       
        <div class="nhomform">
            <span>Nội Dung</span>
            <input class="nhap"  type="text" name='NoiDung' value="<?php echo $dulieu[1] ?>">
        </div>        
        <input class="button button2" value="Cập Nhật" type="submit"/>
</form>
<?php
if(isset($_POST['NoiDung'])){        
        $noidung= $_POST['NoiDung'];        
        $sqlsuaTB = "UPDATE thongbao SET `NoiDung`='$noidung' WHERE `MaTB` = '$maTB'";
        mysqli_query($ketnoisql,$sqlsuaTB);
        ?>                    
            <script>         
               alert("Chức Mừng\nBạn Đã Cập Nhật Thành Công");         
            </script>                
        <?php
        chuyentrang("index.php?url=TB/QuanLyTB.php");
 }
?> 

</div>
