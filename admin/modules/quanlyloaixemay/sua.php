	<?php
	$sql="select * from loaixemay where id_loaixm=$_GET[id]";
	$run=mysqli_query($conn,$sql);
	$dong=mysqli_fetch_array($run);
?>
<form action='modules/quanlyloaixemay/xuly.php?id=<?php echo $dong['id_loaixm']?>' method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa loại xe máy</div></td>
  </tr>
  <tr>
    <td width="114">Tên loại xe máy</td>
    <td width="200"><input type="text" name="tenloaixemay" value="<?php echo $dong['loaixm'] ?>"></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><input type="text" name="thutu" value="<?php echo $dong['thutu']?>"></td>
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