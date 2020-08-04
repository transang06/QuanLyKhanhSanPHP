    <form style="float:right; margin-top: 20px;margin-right: 20px"  action="" method="post">             
     <div class="nhomform">
    <span>Tìm</span>
    <select class="nhap"  style="padding:0" name="timtheo">               
        <option value="IDDV">ID Dịch Vụ</option>
        <option value="TenDv">Tên Dịch Vụ</option>
        <option value="GiaDV">Đơn Giá</option>
        <option value="Note">Note</option>       
    </select> 
    <input class='button2' type="submit" value="Chọn">
    </div>
</form>
<?php 
$sql = 'select * from dichvu';
$thongbao=""; 
if(isset($_POST['timtheo'])){
    $timtheo= $_POST['timtheo'];     
        switch ($timtheo){         
        case 'IDDV':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="number" name='keywordid' placeholder="Nhập ID">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php           
            break;
        case 'TenDv':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="text" name='keywordTen' placeholder="Nhập Tên Dịch Vụ">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
         case 'GiaDV':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="number" name='keywordGia' placeholder="Nhập Giá Dịch Vụ">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;
        case 'Note':
        ?>            
        <form style="float:right; margin-top: 20px;margin-right: 20px" action="" method="post">  
            <div class="nhomform">                
                <input class="nhap" type="text" name='keywordNote' placeholder="Nhập Ghi Chú">
                <input class='button2' type="submit" value="Tìm Kiếm">
            </div> 
        </form>
        <?php 
            break;       
    }}
     if(isset($_POST['keywordid'])){
            $keyword= $_POST['keywordid'];
            $sql = "select * from dichvu where MaDV LIKE '%$keyword%'";         
            $thongbao="với ID là '$keyword'";}
    if(isset($_POST['keywordTen'])){
            $keyword= $_POST['keywordTen'];
            $sql = "select * from dichvu where TenDV LIKE '%$keyword%'";         
            $thongbao="với Tên là '$keyword'";}
    if(isset($_POST['keywordGia'])){
            $keyword= $_POST['keywordGia'];
            $sql = "select * from dichvu where GiaDV LIKE '%$keyword%'";         
            $thongbao="với Giá là '$keyword'";}
    if(isset($_POST['keywordNote'])){
            $keyword= $_POST['keywordNote'];
            $sql = "select * from dichvu where Note LIKE '%$keyword%'";         
            $thongbao="với Note là '$keyword'";}    
?>     
<form style="float:right; margin-top: 20px;margin-right: 20px"  action="" method="post"> 
     <div class="nhomform">
    <span>Xếp</span>
    <select class="nhap"  style="padding:0" name="kieusx">
        <option value="TangID">Tăng dần theo ID</option>
        <option value="GiamID">Giảm dần theo ID</option>
        <option value="TangTen">Tăng dần theo Tên</option>
        <option value="GiamTen">Giảm dần theo Tên</option>
        <option value="TangGia">Tăng dần theo Giá</option>
        <option value="GiamGia">Giảm dần theo Giá</option>        
    </select> 
    <input class='button2' type="submit" value="Sắp Xếp">
    </div>
</form> 
<?php   
    if(isset($_POST['kieusx'])){
    $kieu= $_POST['kieusx'];     
        switch ($kieu){         
        case 'TangID':
            $sql = 'select * from dichvu ORDER BY MaDV ASC'; 
            $thongbao="Xắp Sếp Tăng dần theo ID";
            break;
        case 'GiamID':
            $sql = 'select * from dichvu ORDER BY MaDV DESC';
            $thongbao="Xắp Sếp Giảm dần theo ID";
            break;
        case 'TangTen':
            $sql = 'select * from dichvu ORDER BY TenDV ASC';
            $thongbao="Xắp Sếp Tăng dần theo Tên";
            break;
        case 'GiamTen':
            $sql = 'select * from dichvu ORDER BY TenDV DESC';
            $thongbao="Xắp Sếp Giảm dần theo Tên";
            break;
        case 'TangGia':
            $sql = 'select * from dichvu ORDER BY GiaDV ASC';
            $thongbao="Xắp Sếp Tăng dần theo Giá";
            break;
        case 'GiamGia':
            $sql = 'select * from dichvu ORDER BY GiaDV DESC';
            $thongbao="Xắp Sếp Giảm dần theo Giá";
            break;          
                 
    }}      
?>