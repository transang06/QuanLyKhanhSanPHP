 <form action= "" method="Post">
        <h2>Thêm Nhân Viên Mới Mới</h2>        
        <div class="nhomform">
            <span>Tên Nhân Viên</span>
            <input class="nhap" type="text" name='TenNhanVien' placeholder="Nhập tên nhân viên">
        </div>
        <div class="nhomform">
            <span>Số Điện Thoại</span>
            <input class="nhap" type="tel" name='SDT' placeholder="Nhập Số điện thoại">
        </div>
        <div class="nhomform">
            <span>Chức Vụ</span>
            <input class="nhap" type="text" name='Chucvu' placeholder="Nhập chức vụ" >
        </div>        
        <input class="button button2" value="Thêm Nhân Viên" type="submit"/>
</form>
<?php
    if(isset($_POST['TenNhanVien'])&& !empty($_POST['TenNhanVien'])&& isset($_POST['SDT']) && !empty($_POST['SDT']) && isset($_POST['Chucvu'])&& !empty($_POST['Chucvu'])){        
        $tennv = $_POST['TenNhanVien'];
        $SDTnv = $_POST['SDT'];
        $ChucVu = $_POST['Chucvu'];
        $sqlthem = "INSERT INTO nhanvien ( `TenNV`,`SDT`,`ChucVu`) VALUES ('$tennv','$SDTnv','$ChucVu')";
        mysqli_query($ketnoisql,$sqlthem);        
        }
?>

    


    
    

