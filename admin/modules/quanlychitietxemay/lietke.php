<?php
	$sql_hangxm="select * from hangxemay,chitietxemay where hangxemay.id_hangxm=chitietxemay.id_hangxm order by id_xemay desc";
	$run_hangxm=mysqli_query($conn,$sql_hangxm);
	$sql_loaixm="select * from loaixemay,chitietxemay where loaixemay.id_loaixm=chitietxemay.id_loaixm order by id_xemay desc";
	$run_loaixm=mysqli_query($conn,$sql_loaixm);
?>
<table width="100%" border="1">
  <tr>
    <td><div align="center">ID</div></td>
    <td><div align="center">Tên xe máy</div></td>
    <td><div align="center">Hãng xe máy</div></td>
    <td><div align="center">Loại xe máy</div></td>
    <td><div align="center">Giá</div></td>
    <td><div align="center">Mô tả</div></td>
    <td><div align="center">Hình ảnh</div></td>
    <td><div align="center">Thứ tự</div></td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
  <?php 
  	$i=0;
  		
			while($dong_hangxm=mysqli_fetch_array($run_hangxm)){
				$dong_loaixm=mysqli_fetch_array($run_loaixm);
  ?>
  <tr>
    <td><div align="center"><?php echo $i; ?></div></td>
    <td><div align="center"><?php echo $dong_hangxm['tenxemay'] ?></div></td>
    <td><div align="center"><?php echo $dong_hangxm['tenhangxm']; ?></div></td>
    <td><div align="center"><?php echo $dong_loaixm['loaixm']; ?></div></td>
    <td><div align="center"><?php echo $dong_hangxm['gia']; ?></div></td>
    <td><div align="center"><?php echo $dong_hangxm['mota']; ?></div></td>
    <td><div align="center"><img src="modules/quanlychitietxemay/uploads/<?php echo $dong_hangxm['hinhanh'] ?>" width="60" height="60"></div></td>
    <td><div align="center"><?php echo $dong_hangxm['thutu']; ?></div></td>
    <td><div align="center"><a href="index.php?quanly=quanlychitietxemay&ac=sua&id=<?php echo $dong_hangxm['id_xemay']?>">Sửa</a></div></td>
    <td><div align="center"><a href="modules/quanlychitietxemay/xuly.php?id=<?php echo $dong_hangxm['id_xemay']?>">Xóa</a></div></td>
  </tr>
  <?php
  	$i++;
	}
	
  ?>
</table>
