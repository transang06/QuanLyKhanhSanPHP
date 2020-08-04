   <form style="float:right; margin-top: 20px;margin-right: 20px"  action="" method="post">             
     <div class="nhomform">
    <span>Tìm</span>
    <select class="nhap"  style="padding:0" name="timtheo">               
        <option value="IDP">ID Phòng</option>
        <option value="TP">Tên Phòng</option>
        <option value="VTP">Vị Trí Phòng</option>
        <option value="GP">Giá Phòng </option>
        <option value="GC">Ghi Chú</option>  
    </select> 
    <input class='button2' type="submit" value="Chọn">
    </div>
</form>
<?php 
$sql = "SELECT phongtrong.MaLP,phong.TenLoaiPhong,phong.ViTri,phong.DonGia,phong.Note FROM phongtrong LEFT JOIN phong ON phongtrong.MaLP = phong.MaLP";  
$thongbao=""; 
if(isset($_POST['timtheo'])){
    $timtheo= $_POST['timtheo'];     
        switch ($timtheo){         
        case 'IDP':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="number" name='keywordid' placeholder="Nhập ID Phòng">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php           
            break;
        case 'TP':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="text" name='keywordten' placeholder="Nhập Tên Phòng">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
         case 'VTP':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="number" name='keywordvitri' placeholder="Nhập Vị Trí Phòng">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
        case 'GP':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="number" name='keywordGia' placeholder="Nhập Giá Phòng">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
        case 'GC':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="text" name='keywordGC' placeholder="Nhập Ghi Chú">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
    }}
     if(isset($_POST['keywordid'])){
            $keyword= $_POST['keywordid'];
            $sql = "SELECT phongtrong.MaLP,phong.TenLoaiPhong,phong.ViTri,phong.DonGia,phong.Note FROM phongtrong LEFT JOIN phong ON phongtrong.MaLP = phong.MaLP where phong.MaLP LIKE '%$keyword%'";         
            $thongbao="với ID là '$keyword'";}
    if(isset($_POST['keywordten'])){
            $keyword= $_POST['keywordten'];
            $sql = "SELECT phongtrong.MaLP,phong.TenLoaiPhong,phong.ViTri,phong.DonGia,phong.Note FROM phongtrong LEFT JOIN phong ON phongtrong.MaLP = phong.MaLP where phong.TenLoaiPhong LIKE '%$keyword%'";         
            $thongbao="với tên là '$keyword'";}
    if(isset($_POST['keywordvitri'])){
            $keyword= $_POST['keywordvitri'];
            $sql = "SELECT phongtrong.MaLP,phong.TenLoaiPhong,phong.ViTri,phong.DonGia,phong.Note FROM phongtrong LEFT JOIN phong ON phongtrong.MaLP = phong.MaLP where phong.ViTri LIKE '%$keyword%'";         
            $thongbao="với Vị Trí ở '$keyword'";}
    if(isset($_POST['keywordGia'])){
            $keyword= $_POST['keywordGia'];
            $sql = "SELECT phongtrong.MaLP,phong.TenLoaiPhong,phong.ViTri,phong.DonGia,phong.Note FROM phongtrong LEFT JOIN phong ON phongtrong.MaLP = phong.MaLP where phong.DonGia LIKE '%$keyword%'";         
            $thongbao="với Đơn giá là '$keyword'";}
     if(isset($_POST['keywordGC'])){
            $keyword= $_POST['keywordGC'];
            $sql = "SELECT phongtrong.MaLP,phong.TenLoaiPhong,phong.ViTri,phong.DonGia,phong.Note FROM phongtrong LEFT JOIN phong ON phongtrong.MaLP = phong.MaLP where phong.Note LIKE '%$keyword%'";         
            $thongbao="với Note là  ' $keyword '";}        
?>     
<form style="float:right; margin-top: 20px;margin-right: 20px"  action="" method="post">             
     <div class="nhomform">
    <span>Xếp</span>
    <select class="nhap"  style="padding:0" name="kieusx">               
        <option value="TangID">Tăng dần theo ID Phòng</option>
        <option value="GiamID">Giảm dần theo ID Phòng</option>
        <option value="TangT">Tăng dần theo Tên Phòng </option>
        <option value="GiamT">Giảm dần theo Tên Phòng</option>
        <option value="TangVT">Tăng dần theo Vị Trí</option>
        <option value="GiamVT">Giảm dần theo Vị Trí</option>
        <option value="TangG">Tăng dần theo mức Giá Phòng</option>
        <option value="GiamG">Giảm dần theo mức Giá Phòng</option>
    </select> 
    <input class='button2' type="submit" value="Sắp Xếp">
    </div>
</form> 
<?php   
    if(isset($_POST['kieusx'])){
    $kieu= $_POST['kieusx'];     
        switch ($kieu){         
        case 'TangID':
            $sql = 'select * from phong ORDER BY MaLP ASC'; 
            $thongbao="Xắp Sếp Tăng dần theo ID";
            break;
        case 'GiamID':
            $sql = 'select * from phong ORDER BY MaLP DESC ';
            $thongbao="Xắp Sếp Giảm dần theo ID";
            break;
         case 'TangT':
            $sql = 'select * from phong ORDER BY TenLoaiPhong ASC'; 
            $thongbao="Xắp Sếp Tăng theo Tên Loại Phòng";
            break;
        case 'GiamT':
            $sql = 'select * from phong ORDER BY TenLoaiPhong DESC ';
            $thongbao="Xắp Sếp Giảm dần theo Tên Loại Phòng";
            break;
         case 'TangVT':
            $sql = 'select * from phong ORDER BY ViTri ASC'; 
            $thongbao="Xắp Sếp Tăng dần theo Vị Trí Phòng";
            break;
        case 'GiamVT':
            $sql = 'select * from phong ORDER BY ViTri DESC ';
            $thongbao="Xắp Sếp Giảm dần theo Vị Trí Phòng";
            break;           
        case 'TangG':
            $sql = 'select * from phong ORDER BY DonGia ASC'; 
            $thongbao="Xắp Sếp Tăng dần theo mức Giá Phòng";
            break;
        case 'GiamG':
            $sql = 'select * from phong ORDER BY DonGia DESC ';
            $thongbao="Xắp Sếp Giảm dần theo mức Giá Phòng";
            break;                  
    }}      
    ?>