<form action="modules/quanlychitietxemay/xuly.php" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Thêm chi tiết xe máy</div></td>
  </tr>
  <tr>
    <td>Tên xe máy</td>
    <td><input type="text" name="tenxm"> </td>
  </tr>
  <tr>
    <td>Giá xe máy</td>
    <td><input type="text" name="giaxm"></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><input type="text" name="thutu"></td>
  </tr>
  <?php
  		$sql="select * from hangxemay";
		$run=mysqli_query($conn,$sql);
  ?>
  <tr>
    <td>Hãng xe máy</td>
    <td><select name="hangxm">
	<?php
		while($dong=mysqli_fetch_array($run)){
	?>
    	<option value="<?php echo $dong['id_hangxm']?>"><?php echo $dong['tenhangxm']?>
        </option>
        <?php
		}
		?>
    </select></td>
  </tr>
  <?php
  		$sql="select * from loaixemay";
		$run=mysqli_query($conn,$sql);
  ?>
  <tr>
    <td>Loại xe máy</td>
    <td><select name="loaixm">
	<?php
		while($dong=mysqli_fetch_array($run)){
	?>
    	<option value="<?php echo $dong['id_loaixm']?>"><?php echo $dong['loaixm']?>
        </option>
        <?php
		}
		?>
    </select></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"></td>
  </tr>
  <tr>
    <td>Mô tả</td>
    <td><textarea name="motaxm" rows="15" cols="40"></textarea></td>
  </tr>
  <tr>
    <td colspan="2"><form name="form1" method="post" action="">
      <div align="center">
        <input type="submit" name="them" id="them" value="Thêm">
      </div>
    </form></td>
  </tr>
</table>
</form>