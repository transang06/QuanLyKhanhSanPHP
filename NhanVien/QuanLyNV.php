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
    <div class="them">
        <?php 
        include("ThemNV.php"); 
        ?> 
    </div>
</div> 
<div class="right"> 
<div class="thanhtrangthai"> 
</div>
    <div class="noidung">
<table class="tableHT">
<h2>Danh Sách Nhân Viên</h2><br>  
        <tr>
            <th>Mã NV</th>
            <th>Tên Nhân Viên</th>       
            <th>SĐT</th>
            <th>Chức vụ</th>           
            <th>Sửa</th> 
        </tr>
    <?php    
        $sql = "SELECT * FROM nhanvien";
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
            echo $dulieu[3];
            echo "</td>"; 
            echo"<td>";
            echo "<a href='index.php?url=NhanVien/SuaNV.php&maNV=$dulieu[0]'><img src='image/edit.png' width='32px'/></a></a>";
            echo "</td>"; 
           echo "</tr>";
        }    
    ?>  
    </table> 
        </div>
    </div>
