<?php
	$sql="select * from chitietxemay where id_xemay=$_GET[id]";
	$run=mysqli_query($conn,$sql);
	$dong=mysqli_fetch_array($run);
?>
<form action='modules/quanlychitietxemay/xuly.php?id=<?php echo $dong['id_xemay']?>' method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa chi tiết xe máy</div></td>
  </tr>
  <tr>
    <td>Tên xe máy</td>
    <td><input type="text" name="tenxm" value="<?php echo $dong['tenxemay'] ?>"> </td>
  </tr>
  <tr>
    <td>Giá xe máy</td>
    <td><input type="text" name="giaxm" value="<?php echo $dong['gia'] ?>"></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><input type="text" name="thutu" value="<?php echo $dong['thutu'] ?>"></td>
  </tr>
  <?php
  		$sql_hangxm="select * from hangxemay";
		$run_hangxm=mysqli_query($conn,$sql_hangxm);
  ?>
  <tr>
    <td>Hãng xe máy</td>
    <td><select name="hangxm">
	<?php
		while($dong_hangxm=mysqli_fetch_array($run_hangxm)){
			if($dong['id_hangxm']==$dong_hangxm['id_hangxm']){
	?>
    	<option selected="selected" value="<?php echo $dong_hangxm['id_hangxm']?>"><?php echo $dong_hangxm['tenhangxm']?>
        </option>
        <?php
		}else{
		?>
        <option value="<?php echo $dong_hangxm['id_hangxm']?>"><?php echo $dong_hangxm['tenhangxm']?>
        </option>
		<?php
		}
		}
		?>
    </select> </td>
  </tr>
  <?php
  		$sql_loaixm="select * from loaixemay";
		$run_loaixm=mysqli_query($conn,$sql_loaixm);
  ?>
  <tr>
    <td>Loại xe máy</td>
    <td><select name="loaixm">
	<?php
		while($dong_loaixm=mysqli_fetch_array($run_loaixm)){
			if($dong['id_loaixm']==$dong_loaixm['id_loaixm']){
	?>
    	<option selected="selected" value="<?php echo $dong_loaixm['id_loaixm']?>"><?php echo $dong_loaixm['loaixm']?>
        </option>
        <?php
		}else{
		?>
        <option value="<?php echo $dong_loaixm['id_loaixm']?>"><?php echo $dong_loaixm['loaixm']?>
        </option>
		<?php
		}
		}
		?>
    </select> </td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"><img src="modules/quanlychitietxemay/uploads/<?php echo $dong['hinhanh'] ?>" width="80" height="80" /></td>
  </tr>
  <tr>
    <td>Mô tả</td>
    <td><textarea name="motaxm" rows="15" cols="40" ><?php echo $dong['mota']?></textarea></td>
  </tr>
  <tr>
    <td colspan="2"><form name="form1" method="post" action="">
      <div align="center">
        <input type="submit" name="sua" id="sua" value="Sửa">
      </div>
    </form></td>
  </tr>
</table>
</form>