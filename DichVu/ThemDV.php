<style>
    .dem{
        padding: 30px;        
    }
</style>
<div class="dem">
<form action= "" method="Post">
    <h2>Thêm Dịch Vụ Mới</h2> 
    <div class="nhomform">
            <span>Tên Dịch Vụ</span>
            <input class="nhap" type="text"  name='tendv' placeholder="Nhập tên dịch vụ">
    </div>
    <div class="nhomform">
            <span>Đơn Giá</span>
            <input class="nhap" type="text" name='giadv' placeholder="Nhập giá dịch vụ" >
    </div>
    <div class="nhomform">
            <span>Note</span>
            <input class="nhap" type="text" name='note' value="Không ghi chú">
    </div>       
    <input class="button button2" value="Thêm Dịch Vụ" type="submit"/> 
</form>
<?php
    if(!empty($_POST['tendv'])&& $_POST['giadv']){
        $tendv = $_POST['tendv'];
        $giadv = $_POST['giadv'];
        $note = $_POST['note'];        
        $sql = "INSERT INTO dichvu ( `TenDV`, `GiaDV`,`Note`) VALUES ('$tendv','$giadv','$note')";
        mysqli_query($ketnoisql,$sql);   
        chuyentrang("index.php?url=DichVu/DichVu.php");
        }
?>
</div>

    
    
    

