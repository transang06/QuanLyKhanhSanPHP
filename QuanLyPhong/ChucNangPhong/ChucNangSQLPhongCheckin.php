    <form style="float:right; margin-top: 20px;margin-right: 20px"  action="" method="post">             
     <div class="nhomform">
    <span>Tìm</span>
    <select class="nhap"  style="padding:0" name="timtheo">               
        <option value="IDHD">ID Check In</option>
        <option value="TTKH">Thông Tin Khách Hàng</option>
        <option value="TTP">Thông Tin Loại Phòng</option>
        <option value="SL">Số Người Ở </option>
        <option value="TGNP">Thời Gian Nhận Phòng</option>  
    </select> 
    <input class='button2' type="submit" value="Chọn">
    </div>
</form>
<?php 
$sql = 'select * from phongcheckin where TongThanhToan = 0 ORDER BY TGBatDau DESC';
$thongbao=""; 
if(isset($_POST['timtheo'])){
    $timtheo= $_POST['timtheo'];     
        switch ($timtheo){         
        case 'IDHD':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="number" name='keywordid' placeholder="Nhập ID Check In">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php           
            break;
        case 'TTKH':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="number" name='keywordkh' placeholder="Nhập ID Khách Hàng">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
         case 'TTP':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="number" name='keywordp' placeholder="Nhập ID Phòng">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
        case 'SL':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="number" name='keywordsl' placeholder="Nhập số lượng người">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
        case 'TGNP':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">
                <span>Ngày</span>
                <input class="nhap" type="date" name='keywordtg'>
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
    }}
     if(isset($_POST['keywordid'])){
            $keyword= $_POST['keywordid'];
            $sql = "select * from phongcheckin where TongThanhToan = 0 and MaCI LIKE '%$keyword%'";         
            $thongbao="với ID Check In là '$keyword'";}
    if(isset($_POST['keywordkh'])){
            $keyword= $_POST['keywordkh'];
            $sql = "select * from phongcheckin where TongThanhToan = 0 and MaKH LIKE '%$keyword%'";         
            $thongbao="với ID Khách Hàng là '$keyword'";}
    if(isset($_POST['keywordp'])){
            $keyword= $_POST['keywordp'];
            $sql = "select * from phongcheckin where TongThanhToan = 0 and MaLP LIKE '%$keyword%'";         
            $thongbao="với ID Phòng là '$keyword'";}
    if(isset($_POST['keywordsl'])){
            $keyword= $_POST['keywordsl'];
            $sql = "select * from phongcheckin where TongThanhToan = 0 and SoNGuoi LIKE '%$keyword%'";         
            $thongbao="với Số Lượng Người ở là '$keyword'";}
     if(isset($_POST['keywordtg'])){
            $keyword= $_POST['keywordtg'];
            $sql = "select * from phongcheckin where TongThanhToan = 0 and TGBatDau LIKE '%$keyword%'";         
            $thongbao="với Thời Gian Nhận Phòng là '$keyword'";}        
?>     
<form style="float:right; margin-top: 20px;margin-right: 20px"  action="" method="post">             
     <div class="nhomform">
    <span>Xếp</span>
    <select class="nhap"  style="padding:0" name="kieusx">               
        <option value="TangIDHD">Tăng dần theo ID Check In</option>
        <option value="GiamIDHD">Giảm dần theo Check In</option>
        <option value="TangKH">Tăng dần theo Mã Khách Hàng </option>
        <option value="GiamKH">Giảm dần theo Mã Khách Hàng</option>
        <option value="TangP">Tăng dần theo ID Phòng</option>
        <option value="GiamP">Giảm dần theo ID Phòng</option>
        <option value="TangSL">Tăng dần theo Số Người Ở</option>
        <option value="GiamSL">Giảm dần theo Số Người Ở</option>
        <option value="TangTG">Tăng dần theo Thời Gian Nhận Phòng</option>
        <option value="GiamTG">Giảm dần theo Thời Gian Nhận Phòng</option>
    </select> 
    <input class='button2' type="submit" value="Sắp Xếp">
    </div>
</form> 
<?php   
    if(isset($_POST['kieusx'])){
    $kieu= $_POST['kieusx'];     
        switch ($kieu){         
        case 'TangIDHD':
            $sql = 'select * from phongcheckin where TongThanhToan = 0 ORDER BY MaCI ASC'; 
            $thongbao="Xắp Sếp Tăng dần theo ID Check In";
            break;
        case 'GiamIDHD':
            $sql = 'select * from phongcheckin where TongThanhToan = 0 ORDER BY MaCI DESC ';
            $thongbao="Xắp Sếp Giảm dần theo ID Check In";
            break;
         case 'TangKH':
            $sql = 'select * from phongcheckin where TongThanhToan = 0 ORDER BY MaKH ASC'; 
            $thongbao="Xắp Sếp Tăng dần theo Mã Khách Hàng";
            break;
        case 'GiamKH':
            $sql = 'select * from phongcheckin where TongThanhToan = 0 ORDER BY MaKH DESC ';
            $thongbao="Xắp Sếp Giảm dần theo Mã Khách Hàng";
            break;
         case 'TangP':
            $sql = 'select * from phongcheckin where TongThanhToan = 0 ORDER BY MaLP ASC'; 
            $thongbao="Xắp Sếp Tăng dần theo ID Phòng";
            break;
        case 'GiamP':
            $sql = 'select * from phongcheckin where TongThanhToan = 0 ORDER BY MaLP DESC ';
            $thongbao="Xắp Sếp Giảm dần theo ID Phòng";
            break;           
        case 'TangSL':
            $sql = 'select * from phongcheckin where TongThanhToan = 0 ORDER BY SoNguoi ASC'; 
            $thongbao="Xắp Sếp Tăng dần theo Số Người Ở";
            break;
        case 'GiamSL':
            $sql = 'select * from phongcheckin where TongThanhToan = 0 ORDER BY SoNguoi DESC ';
            $thongbao="Xắp Sếp Giảm dần theo Số Người Ở";
            break;
        case 'TangTG':
            $sql = 'select * from phongcheckin where TongThanhToan = 0 ORDER BY TGBatDau ASC'; 
            $thongbao="Xắp Sếp Tăng dần theo Thời Gian Nhận Phòng";
            break;
        case 'GiamTG':
            $sql = 'select * from phongcheckin where TongThanhToan = 0 ORDER BY TGBatDau DESC ';
            $thongbao="Xắp Sếp Giảm dần theo Thời Gian Nhận Phòng";
            break;
    }}      
    ?>