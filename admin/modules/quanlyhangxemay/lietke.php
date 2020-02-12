<?php
	$sql="select * from hangxemay order by id_hangxm desc";
	$run=mysqli_query($conn,$sql);
?>
<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Tên  xe máy</td>
    <td>Thứ tự</td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
 <?php
 	$i=0;
 	while($dong=mysqli_fetch_array($run)){
 ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tenhangxm'] ?></td>
    <td><?php echo $dong['thutu'] ?></td>
    <td><a href="index.php?quanly=quanlyhangxemay&ac=sua&id= <?php echo $dong['id_hangxm'] ?>">Sửa</a></td>
    <td><a href="modules/quanlyhangxemay/xuly.php?id=<?php echo $dong['id_hangxm'] ?>">Xóa</a></td>
  </tr>
 <?php
 	$i++;
 	}
?>
</table>
