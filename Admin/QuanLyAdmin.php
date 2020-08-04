<ani_dangnhap>  
    <a href="index.php?url=User/taotaikhoan.php" > <img src="image/login.png" width="130" height="130" alt="logologin" /></a>
</ani_dangnhap>    
<div>       
    <h2>Danh Sách Admin</h2>
<table class="tableHT">
    <tr>
        <th>ID Admin</th>
        <th>Tên Đăng Nhập</th>
        <th>Tên Đầy Đủ</th>
        <th>Ngày Sinh</th>
        <th>Ngày Tạo</th>
        <th>Cập Nhật Lần Cuối</th> 
        <th>Sửa</th>   
    </tr>
<?php    
    $sql = 'select * from user';
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
        echo $dulieu[3];
        echo "</td>";
         echo"<td>";
        echo $dulieu[4];
        echo "</td>";
        echo"<td>";
        echo $dulieu[5];
        echo "</td>";
        echo"<td>";
        echo $dulieu[6];
        echo "</td>";        
        echo"<td>";
        echo "<a href='index.php?url=Admin/SuaAdmin.php&maAD=$dulieu[0]'><img src='image/edit.png' width='32px'/></a>";
        echo "</td>";
        echo "</tr>";
    }
?>
</table>        
</div> 
