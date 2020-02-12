<?php
	$sql="select * from loaixemay order by id_loaixm desc";
	$run=mysqli_query($conn,$sql);
?>
<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Loại  xe máy</td>
    <td>Thứ tự</td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
 <?php
 	$i=0;
 	while($dong=mysqli_fetch_array($run)){
 ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['loaixm'] ?></td>
    <td><?php echo $dong['thutu'] ?></td>
    <td><a href="index.php?quanly=quanlyloaixemay&ac=sua&id= <?php echo $dong['id_loaixm'] ?>">Sửa</a></td>
    <td><a href="modules/quanlyloaixemay/xuly.php?id=<?php echo $dong['id_loaixm'] ?>">Xóa</a></td>
  </tr>
 <?php
 	$i++;
 	}
?>
</table>
