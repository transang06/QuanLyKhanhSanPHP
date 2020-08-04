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
    .tren{
        width: 100%;}
    .them{ 
        padding: 30px;
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
    <div class="tren"> 
        <a class="button button2" href="index.php?url=QuanLyPhong/PhongCheckin.php">Phòng Hiện Có Khách</a>
        <a class="button button2" href="index.php?url=QuanLyPhong/DSPhongTrong.php">Phòng Còn Trống</a> 
        <a class="button button2" href="index.php?url=QuanLyPhong/PhongCanDon.php">Phòng Cần Dọn</a>       
    </div>
    <div class="them">
        <?php 
        include("ThemPhong.php"); 
        ?> 
    </div>
</div> 
<div class="right"> 
<div class="thanhtrangthai"> 
<?php 
    include("ChucNangPhong/ChucNangSQLPhong.php"); 
?>
</div>
    <div class="noidung">
<table class="tableHT">
<h2>Danh Sách Phòng <?php echo $thongbao ?></h2><br>  
        <tr>
            <th>ID Phòng</th>
            <th>Tên Loại Phòng</th>       
            <th>Vị Trí</th>
            <th>Đơn Giá</th>
            <th>Ghi Chú</th>
            <th>Sửa</th> 
        </tr>
    <?php
        $thucthi = mysqli_query($ketnoisql,$sql);      
        while(($dulieu = mysqli_fetch_array($thucthi))){
            echo"<tr>";
            echo"<td>";
            echo $dulieu[0];
            echo "</td>";
            echo"<td>";
            echo $dulieu[1];
            echo "</td>";
            echo"<td>";
            echo $dulieu[2];
            echo "</td>";       
            echo"<td>";
            echo number_format($dulieu[3]);
            echo "</td>";
            echo"<td>";
            echo $dulieu[4];
            echo "</td>"; 
            echo"<td>";
            echo "<a href='index.php?url=QuanLyPhong/SuaPhong.php&maLP=$dulieu[0]'><img src='image/edit.png' width='32px'/></a></a>";
            echo "</td>"; 
           echo "</tr>";
        }    
    ?>  
    </table>        
</div>
</div>


 
    