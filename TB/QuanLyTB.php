<style>  
    .thanhtrangthai{
        float: top; 
        height: 10%;
        padding: 20px;
    }
    .noidung{
        margin: 30px auto;     
    } 
</style>
<div class="thanhtrangthai"> 
<form action= "" method="Post">    
            <div class="nhomform">
                <input class="nhap" type="text"  name='ThongBao' placeholder="Nhập Thông Báo">
                <input class="button2" value="Thêm Thông Báo" type="submit"/>
            </div> 
        </form>   
    <?php
    if(!empty($_POST['ThongBao'])){
        $TB = $_POST['ThongBao'];               
        $sqlTB = "INSERT INTO `thongbao`(`NoiDung`) VALUES ('$TB')";
        mysqli_query($ketnoisql,$sqlTB); 
        ?> 
        <script>         
               alert("Thông Báo\n Thêm Thông Báo thành công ");         
        </script>
        <?php        
        }?> 
</div>
    <div class="noidung">
<table class="tableHT">
<h2>Danh Sách Thông Báo</h2><br>  
        <tr>
            <th>ID Thông Báo</th>
            <th>Nội Dung</th> 
            <th>Sửa</th> 
        </tr>
    <?php    
        $sqlTB ="SELECT * FROM Thongbao";
        $thucthi = mysqli_query($ketnoisql,$sqlTB);      
        while(($dulieu = mysqli_fetch_array($thucthi))){
            echo"<tr>";
            echo"<td>";
            echo $dulieu[0];
            echo "</td>";
            echo"<td>";
            echo $dulieu[1];
            echo "</td>";            
            echo"<td>";
            echo "<a href='index.php?url=TB/SuaTB.php&maTB=$dulieu[0]'><img src='image/edit.png' width='32px'/></a></a>";
            echo "</td>"; 
           echo "</tr>";
        }    
    ?>  
    </table>        
</div>
</div>
