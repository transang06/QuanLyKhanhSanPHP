<style>
    .right{
        width: 60%;
        height: 100%;
        float: right;    
        text-align: center;    
        overflow: auto; 
    }
    .left{        
        width: 38%;
        height: 100%;
        float: left;    
        text-align: center;
        border-right:  3px solid #848484;
    }
    .thanhtrangthai{
        float: top; 
        height: 10%;
    }
    .noidung{
        margin: 30px auto;     
    } 
</style>
<div class="left">
<?php 
    include("ThemDV.php"); 
?> 
</div> 
<div class="right">
    <div class="thanhtrangthai">
<?php 
    include("ChucNangSQLDichVu.php"); 
?> 
    </div>
    <div class="noidung">
<h2>Danh Sách Dịch Vụ <?php echo $thongbao ?></h2><br>
<table class="tableHT">
    <tr>
        <th>Mã</th>
        <th>Tên Dịch Vụ</th>
        <th>Đơn Giá</th>
        <th>Note</th>
        <th>Sửa</th>                      
    </tr>
<?php       
    $thucthi = mysqli_query($ketnoisql,$sql);   
    while($dulieu = mysqli_fetch_array($thucthi) ){
        echo"<tr>";
        echo"<td>";
        echo $dulieu[0];
        echo "</td>";
        echo"<td>";
        echo $dulieu[1];
        echo "</td>";
        echo"<td>";
        echo number_format($dulieu[2]);
        echo "</td>";
        echo"<td>";
        echo $dulieu[3];
        echo "</td>";        
        echo"<td>";
        echo "<a href='index.php?url=DichVu/SuaDV.php&maDV=$dulieu[0]'><img src='image/edit.png' width='32px'/></a>";
        echo "</td>";
        echo "</tr>";
    }
?>
</table>        
</div>
