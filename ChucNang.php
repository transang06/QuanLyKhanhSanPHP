<?php
function chuyentrang($link)
{
?>
<script type="text/javascript">
        setTimeout(function(){
        window.location="<?php echo $link;?>";
        },100);
</script>
<?php
exit();
}
function chonphong() {
        include 'ketnoi_db.php';
        $sql = "SELECT phongtrong.MaLP,phong.TenLoaiPhong,phong.ViTri,phong.DonGia,phong.Note FROM phongtrong LEFT JOIN phong ON phongtrong.MaLP = phong.MaLP";
        $thucthi = mysqli_query($ketnoisql,$sql); 
        echo "<select class='nhap'style='padding: 0;padding-left: 20px;' name='MaLP'>";
        while($dulieu = mysqli_fetch_array($thucthi) ){
            echo "<option value=$dulieu[0]>";
            echo "ID: $dulieu[0] ",$dulieu[1]," Tại: " ,$dulieu[2], " Giá: ",$dulieu[3], " Note: ",$dulieu[4];            
        }
        echo "</select>";       
}
function chonallphong() {
        include 'ketnoi_db.php';
        $sql = "SELECT * FROM phong";
        $thucthi = mysqli_query($ketnoisql,$sql); 
        echo "<select name='MaLP'>";
        while($dulieu = mysqli_fetch_array($thucthi) ){
            echo "<option value=$dulieu[0]>";
            echo "ID: $dulieu[0] ",$dulieu[1]," Tại: " ,$dulieu[2], " Giá: ",$dulieu[3], " Note: ",$dulieu[4];            
        }
        echo "</select>";       
}
function ttphong($maP) {
        include 'ketnoi_db.php';
        $sql = "SELECT * FROM phong where MaLP=$maP";
        $thucthi = mysqli_query($ketnoisql,$sql); 
        $dulieu = mysqli_fetch_array($thucthi);
        echo "ID: $dulieu[0] ",$dulieu[1]," Tại: " ,$dulieu[2], " Giá: ",$dulieu[3], " Note: ",$dulieu[4]; 
}
function chonkh() {
        include 'ketnoi_db.php';
        $sql = "SELECT * FROM khachhang";
        $thucthi = mysqli_query($ketnoisql,$sql); 
        echo "<select class='nhap' style='padding: 0;padding-left: 20px;' name='MaKH'>";
        while($dulieu = mysqli_fetch_array($thucthi) ){
            echo "<option value=$dulieu[0]>";
            echo "ID: $dulieu[0]"," Tên: $dulieu[2] $dulieu[3]", " SDT: $dulieu[6]";            
        }
        echo "</select>";       
    }
function ThongTinKh() {
        include 'ketnoi_db.php';
        $sql = "SELECT * FROM khachhang";
        $thucthi = mysqli_query($ketnoisql,$sql); 
        $dulieu = mysqli_fetch_array($thucthi);   
        echo "ID: $dulieu[0]"," Tên: $dulieu[2] $dulieu[3]", " SDT: $dulieu[6]";            
    }
function ThongTinKhma($MaKH) {
        include 'ketnoi_db.php';
        $sql = "SELECT * FROM khachhang where MaKH=$MaKH";
        $thucthi = mysqli_query($ketnoisql,$sql); 
        $dulieu = mysqli_fetch_array($thucthi);   
        echo "ID: $dulieu[0]"," Tên: $dulieu[2] $dulieu[3]", " SDT: $dulieu[6]";            
    }    
function thongcheckin() {
        include 'ketnoi_db.php';
        $sql = "SELECT * FROM phongcheckin";
        $thucthi = mysqli_query($ketnoisql,$sql);         
        echo "ID: $dulieu[0]"," ID Khách Hàng: $dulieu[1] Mã Phòng $dulieu[3]", " Thời Gian Lập: $dulieu[4]";       
}    

function truyvandichvu() {
        include 'ketnoi_db.php';
        $sql = "SELECT * FROM dichvu";
        $thucthi = mysqli_query($ketnoisql,$sql); 
        echo "<select class='nhap' style='padding: 0;padding-left: 20px;' name='madv'>";
        while($dulieu = mysqli_fetch_array($thucthi) ){
            echo "<option value=$dulieu[0]>";
            echo "ID: $dulieu[0]"," $dulieu[1] Giá: $dulieu[2]";            
        }
        echo "</select>";       
    }  
    function thongtindv($madv) {
        include 'ketnoi_db.php';
        $sql = "SELECT * FROM dichvu where MaDV=$madv";
        $thucthi = mysqli_query($ketnoisql,$sql); 
        $dulieu = mysqli_fetch_array($thucthi);        
        echo "ID: $dulieu[0]"," $dulieu[1] Giá: $dulieu[2] $dulieu[3]";  
    } 
      function tiendv($madv,$sl) {
        include 'ketnoi_db.php';
        $sql = "SELECT * FROM dichvu where MaDV=$madv";
        $thucthi = mysqli_query($ketnoisql,$sql); 
        $dulieu = mysqli_fetch_array($thucthi);        
        return $dulieu[2] *$sl;  
    } 
       function sumtiendv($maci) {
        include 'ketnoi_db.php';
        $sql = "SELECT SUM(ThanhTien) FROM ctdv WHERE MaCI =$maci";
        $thucthi = mysqli_query($ketnoisql,$sql);
        $dulieu = mysqli_fetch_array($thucthi);        
        return $dulieu[0];
        } 
function ThoiGianLuuTru($timeCI) {
    include 'ketnoi_db.php';        
        $timeCO =date("y-m-d G:i:s", time());                   
        $diff = abs(strtotime($timeCO) - strtotime($timeCI));                   
        $days = floor(($diff) /(60*60*24));
        $hours = floor(($diff - $days*60*60*24 ) / (60*60));        
        $minutes = floor(($diff - $days*60*60*24 - $hours*60*60) / 60);
        $tonggio = floor(($diff) / (60*60));
        echo $days ," Ngày-",$hours," Giờ-",$minutes," Phút";
        return $tonggio;        
}
function TongGio($timeCI) {
        include 'ketnoi_db.php';        
        $timeCO =date("y-m-d G:i:s", time());                   
        $diff = abs(strtotime($timeCO) - strtotime($timeCI));              
        $tonggio = floor(($diff) / (60*60));
        return $tonggio;        
} 
?>
<script>
function printPage(id)
{
   var html="<html>";
   html+= document.getElementById(id).innerHTML;
   html+="</html>";
   var printWin = window.open('','','left=400px,top=150px,width=1000px,height=800x,toolbar=0,scrollbars=0,status=0');
   printWin.document.write(html);
   printWin.document.close();
   printWin.focus();
   printWin.print();
   printWin.close();
}
</script>