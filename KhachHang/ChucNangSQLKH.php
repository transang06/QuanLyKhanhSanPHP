    <form style="float:right; margin-top: 20px;margin-right: 20px"  action="" method="post">             
     <div class="nhomform">
    <span>Tìm</span>
    <select class="nhap"  style="padding:0" name="timtheo">               
        <option value="IDKH">ID Khách Hàng</option>
        <option value="Ho">Họ Khách Hàng</option>
        <option value="Tên">Tên Khách Hàng</option>
        <option value="NgaySinh">Ngày Sinh</option>
        <option value="DiaChi">Địa Chỉ </option>
        <option value="TGgiaNhap">Thời Gian Gia Nhập</option> 
        <option value="TGCapNhat">Thời Gian Cập Nhật</option>        
    </select> 
    <input class='button2' type="submit" value="Chọn">
    </div>
</form>
<?php 
$sql = 'select * from khachhang';
$thongbao=""; 
if(isset($_POST['timtheo'])){
    $timtheo= $_POST['timtheo'];     
        switch ($timtheo){         
        case 'IDKH':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="number" name='keywordidkh' placeholder="Nhập ID Khách Hàng">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php           
            break;
        case 'Ho':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="text" name='keywordHo' placeholder="Nhập Họ Khách Hàng">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
         case 'Tên':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="text" name='keywordTen' placeholder="Nhập Tên Khách Hàng">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
        case 'NgaySinh':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform"> 
                <span>Ngày</span>
                <input class="nhap" type="date" name='keywordNgaySinh'>
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
        case 'DiaChi':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="text" name='keywordDiaChi' placeholder="Nhập Địa Chỉ">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
        case 'TGgiaNhap':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">
                <span>Tháng</span>                
                <input class="nhap" style="padding:0" type="month" name='keywordGiaNhap'>
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
        case 'TGCapNhat':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">
                <span>Tháng</span>
                <input class="nhap" style="padding:0" type="month" name='keywordCapNhat'>
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;        
    }}
     if(isset($_POST['keywordidkh'])){
            $keyword= $_POST['keywordidkh'];
            $sql = "select * from khachhang where MaKH LIKE '%$keyword%'";         
            $thongbao="với ID là '$keyword'";}
    if(isset($_POST['keywordHo'])){
            $keyword= $_POST['keywordHo'];
            $sql = "select * from khachhang where Ho LIKE '%$keyword%'";         
            $thongbao="với Họ là '$keyword'";}
    if(isset($_POST['keywordTen'])){
            $keyword= $_POST['keywordTen'];
            $sql = "select * from khachhang where Ten LIKE '%$keyword%'";         
            $thongbao="với Tên là '$keyword'";}
    if(isset($_POST['keywordNgaySinh'])){
            $keyword= $_POST['keywordNgaySinh'];
            $sql = "select * from khachhang where NgaySinh LIKE '%$keyword%'";         
            $thongbao="với Ngày Sinh là '$keyword'";}
    if(isset($_POST['keywordDiaChi'])){
            $keyword= $_POST['keywordDiaChi'];
            $sql = "select * from khachhang where DiaChi LIKE '%$keyword%'";         
            $thongbao="với Địa Chỉ tại '$keyword'";}        
    if(isset($_POST['keywordGiaNhap'])){
            $keyword= $_POST['keywordGiaNhap'];
            $sql = "select * from khachhang where NgayGN LIKE '%$keyword%'";         
            $thongbao="với Thời Gian Gia Nhập là '$keyword'";}
    if(isset($_POST['keywordCapNhat'])){
            $keyword= $_POST['keywordCapNhat'];
            $sql = "select * from khachhang where CNlanCuoi LIKE '%$keyword%'";         
            $thongbao="với Thời Gian Cập Nhật Lần Cuối là '$keyword'";}
?>     
<form style="float:right; margin-top: 20px;margin-right: 20px"  action="" method="post"> 
     <div class="nhomform">
    <span>Xếp</span>
    <select class="nhap"  style="padding:0" name="kieusx">
        <option value="TangID">Tăng dần theo ID</option>
        <option value="GiamID">Giảm dần theo ID</option>
        <option value="TangHo">Tăng dần theo Họ</option>
        <option value="GiamHo">Giảm dần theo Họ</option>
        <option value="TangTen">Tăng dần theo Tên</option>
        <option value="GiamTen">Giảm dần theo Tên</option>
        <option value="TangNgaySinh">Tăng dần theo Ngày Sinh</option>
        <option value="GiamNgaySinh">Giảm dần theo Ngày Sinh</option>
        <option value="TangDiaChi">Tăng dần theo Địa Chỉ</option>
        <option value="GiamDiaChi">Giảm dần theo Địa Chỉ</option>
        <option value="TangGiaNhap">Tăng dần theo Thời Gian Gia Nhập</option>
        <option value="GiamGiaNhap">Giảm dần theo Thời Gian Gia Nhập</option>
        <option value="TangCapNhat">Tăng dần theo Thời Gian Cập Nhật</option>
        <option value="GiamCapNhat">Giảm dần theo Thời Gian Cập Nhật</option>
    </select> 
    <input class='button2' type="submit" value="Sắp Xếp">
    </div>
</form> 
<?php   
    if(isset($_POST['kieusx'])){
    $kieu= $_POST['kieusx'];     
        switch ($kieu){         
        case 'TangID':
            $sql = 'select * from khachhang ORDER BY MaKH ASC'; 
            $thongbao="Xắp Sếp Tăng dần theo ID";
            break;
        case 'GiamID':
            $sql = 'select * from khachhang ORDER BY MaKH DESC';
            $thongbao="Xắp Sếp Giảm dần theo ID";
            break;
         case 'TangHo':
            $sql = 'select * from khachhang ORDER BY Ho ASC';
            $thongbao="Xắp Sếp Tăng dần theo Họ";
            break;
        case 'GiamHo':
            $sql = 'select * from khachhang ORDER BY Ho DESC';
            $thongbao="Xắp Sếp Giảm dần theo Họ";
            break;
         case 'TangTen':
            $sql = 'select * from khachhang ORDER BY Ten ASC';
            $thongbao="Xắp Sếp Tăng dần theo Tên ";
            break;
        case 'GiamTen':
            $sql = 'select * from khachhang ORDER BY Ten DESC';
            $thongbao="Xắp Sếp Giảm dần theo Tên";
            break;           
        case 'TangNgaySinh':
            $sql = 'select * from khachhang ORDER BY NgaySinh ASC';
            $thongbao="Xắp Sếp Tăng dần theo Ngày Sinh";
            break;
        case 'GiamNgaySinh':
            $sql = 'select * from khachhang ORDER BY NgaySinh DESC';
            $thongbao="Xắp Sếp Giảm dần theo Ngày Sinh";
            break;
        case 'TangDiaChi':
            $sql = 'select * from khachhang ORDER BY DiaChi ASC';
            $thongbao="Xắp Sếp Tăng dần theo Địa Chỉ";
            break;
        case 'GiamDiaChi':
            $sql = 'select * from khachhang ORDER BY DiaChi DESC';
            $thongbao="Xắp Sếp Giảm dần theo Địa Chỉ";
            break;
         case 'TangGiaNhap':
            $sql = 'select * from khachhang ORDER BY NgayGN ASC';
            $thongbao="Xắp Sếp Tăng dần theo Thời Gian Gia nhập";
            break;
        case 'GiamGiaNhap':
            $sql = 'select * from khachhang ORDER BY NgayGN DESC';
            $thongbao="Xắp Sếp Tăng dần theo Thời Gian Gia nhập";
            break; 
         case 'TangCapNhat':
            $sql = 'select * from khachhang ORDER BY CNLanCuoi ASC';
            $thongbao="Xắp Sếp Tăng dần theo Thời Gian Cập Nhật";
            break;
        case 'GiamCapNhat':
            $sql = 'select * from khachhang ORDER BY CNLanCuoi DESC';
            $thongbao="Xắp Sếp Tăng dần theo Thời Gian Cập Nhật";
            break;
    }}      
?>