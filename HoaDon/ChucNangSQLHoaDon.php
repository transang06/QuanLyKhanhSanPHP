    <form style="float:right; margin-top: 20px;margin-right: 20px"  action="" method="post">             
     <div class="nhomform">
    <span>Tìm</span>
    <select class="nhap"  style="padding:0" name="timtheo">               
        <option value="IDHD">ID Hóa Đơn</option>
        <option value="TTKH">Thông Tin Khách Hàng</option>
        <option value="TTP">Thông Tin Loại Phòng</option>
        <option value="SL">Số Người Ở </option>
        <option value="TGCI">Thời Gian Check In</option> 
        <option value="TGCO">Thời Gian Check Out</option>
        <option value="TTT">Tổng Thanh Toán</option>  
    </select> 
    <input class='button2' type="submit" value="Chọn">
    </div>
</form>
<?php 
$sql = 'select * from phongcheckin where TongThanhToan != 0 ORDER BY TGBatDau DESC';
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
        case 'TGCI':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">
                <span>Ngày</span>
                <input class="nhap" type="date" name='keywordCI'>
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
        case 'TGCO':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">
                <span>Ngày</span>
                <input class="nhap" type="date" name='keywordCO'>
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
        case 'TTT':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="number" name='keywordTT' placeholder="Nhập số tiền">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
    }}
     if(isset($_POST['keywordid'])){
            $keyword= $_POST['keywordid'];
            $sql = "select * from phongcheckin where TongThanhToan != 0 and MaCI LIKE '%$keyword%'";         
            $thongbao="với ID Check In là '$keyword'";}
    if(isset($_POST['keywordkh'])){
            $keyword= $_POST['keywordkh'];
            $sql = "select * from phongcheckin where TongThanhToan != 0 and MaKH LIKE '%$keyword%'";         
            $thongbao="với ID Khách Hàng là '$keyword'";}
    if(isset($_POST['keywordp'])){
            $keyword= $_POST['keywordp'];
            $sql = "select * from phongcheckin where TongThanhToan != 0 and MaLP LIKE '%$keyword%'";         
            $thongbao="với ID Phòng là '$keyword'";}
    if(isset($_POST['keywordsl'])){
            $keyword= $_POST['keywordsl'];
            $sql = "select * from phongcheckin where TongThanhToan != 0 and SoNGuoi LIKE '%$keyword%'";         
            $thongbao="với Số Lượng Người ở là '$keyword'";}
    if(isset($_POST['keywordCI'])){
            $keyword= $_POST['keywordCI'];
            $sql = "select * from phongcheckin where TongThanhToan != 0 and TGBatDau LIKE '%$keyword%'";         
            $thongbao="với Thời Gian Nhận Phòng là '$keyword'";}
    if(isset($_POST['keywordCO'])){
            $keyword= $_POST['keywordCO'];
            $sql = "select * from phongcheckin where TongThanhToan != 0 and TimeCheckOut LIKE '%$keyword%'";         
            $thongbao="với Thời Gian Nhận Phòng là '$keyword'";}        
    if(isset($_POST['keywordTT'])){
            $keyword= $_POST['keywordTT'];
            $sql = "select * from phongcheckin where TongThanhToan != 0 and TongThanhToan LIKE '%$keyword%'";         
            $thongbao="với Thời Gian Nhận Phòng là '$keyword'";}                
?>     
<form style="float:right; margin-top: 20px;margin-right: 20px"  action="" method="post"> 
     <div class="nhomform">
    <span>Xếp</span>
    <select class="nhap"  style="padding:0" name="kieusx">
        <option value="TangID">Tăng dần theo ID Hóa Đơn</option>
        <option value="GiamID">Giảm dần theo ID Hóa Đơn</option>
        <option value="TangKH">Tăng dần theo ID Khách Hàng</option>
        <option value="GiamKH">Giảm dần theo ID Khách Hàng</option>
        <option value="TangP">Tăng dần theo ID Phòng</option>
        <option value="GiamP">Giảm dần theo ID Phòng</option>
        <option value="TangTI">Tăng dần theo thời gian check in </option>
        <option value="GiamTI">Giảm dần theo thời gian check in</option>
        <option value="TangTO">Tăng dần theo thời gian check out</option>
        <option value="GiamTO">Giảm dần theo thời gian check out</option>
        <option value="TangTT">Tăng dần theo giá trị hóa đơn</option>
        <option value="GiamTT">Giảm dần theo giá trị hóa đơn</option>
    </select> 
    <input class='button2' type="submit" value="Sắp Xếp">
    </div>
</form> 
<?php   
    if(isset($_POST['kieusx'])){
    $kieu= $_POST['kieusx'];     
        switch ($kieu){         
        case 'TangID':
            $sql = 'select * from phongcheckin where TongThanhToan != 0 ORDER BY MaCI ASC'; 
            $thongbao="Xắp Sếp Tăng dần theo ID";
            break;
        case 'GiamID':
            $sql = 'select * from phongcheckin where TongThanhToan != 0 ORDER BY MaCI DESC';
            $thongbao="Xắp Sếp Giảm dần theo ID";
            break;
         case 'TangKH':
            $sql = 'select * from phongcheckin where TongThanhToan != 0 ORDER BY MaKH ASC';
            $thongbao="Xắp Sếp Tăng theo ID Khách Hàng";
            break;
        case 'GiamKH':
            $sql = 'select * from phongcheckin where TongThanhToan != 0 ORDER BY MaKH DESC';
            $thongbao="Xắp Sếp Giảm dần theo ID Khách Hàng";
            break;
         case 'TangP':
            $sql = 'select * from phongcheckin where TongThanhToan != 0 ORDER BY MaLP ASC';
            $thongbao="Xắp Sếp Tăng dần theo ID Phòng";
            break;
        case 'GiamP':
            $sql = 'select * from phongcheckin where TongThanhToan != 0 ORDER BY MaLP DESC';
            $thongbao="Xắp Sếp Giảm dần theo ID Phòng";
            break;           
        case 'TangTI':
            $sql = 'select * from phongcheckin where TongThanhToan != 0 ORDER BY TGBatDau ASC';
            $thongbao="Xắp Sếp Tăng dần theo Thời Gian Check In";
            break;
        case 'GiamTI':
            $sql = 'select * from phongcheckin where TongThanhToan != 0 ORDER BY TGBatDau DESC';
            $thongbao="Xắp Sếp Giảm dần theo Thời Gian Check In";
            break;
        case 'TangTO':
            $sql = 'select * from phongcheckin where TongThanhToan != 0 ORDER BY TimeCheckOut ASC';
            $thongbao="Xắp Sếp Tăng dần theo Thời Gian Check Out";
            break;
        case 'GiamTO':
            $sql = 'select * from phongcheckin where TongThanhToan != 0 ORDER BY TimeCheckOut DESC';
            $thongbao="Xắp Sếp Giảm dần theo Thời Gian Check Out";
            break;
         case 'TangTT':
            $sql = 'select * from phongcheckin where TongThanhToan != 0 ORDER BY TongThanhToan ASC';
            $thongbao="Xắp Sếp Tăng dần theo Giá Trị Hóa Đơn";
            break;
        case 'GiamTT':
            $sql = 'select * from phongcheckin where TongThanhToan != 0 ORDER BY TongThanhToan DESC';
            $thongbao="Xắp Sếp Tăng dần theo Giá Trị Hóa Đơn";
            break;              
    }}      
?>