<?php
	$sql_chitiet="select * from chitietxemay where id_hangxm='$_GET[id]'";
	$query=mysqli_query($conn,$sql_chitiet);
?>

        	<p style="text-align:center; color:Blue; background:#F00; padding:10px">Chi tiết hãng xe máy</p>
            <div class="sanphamall">
            	<ul>
                	<?php
						while($dong_chitiet=mysqli_fetch_array($query)){
					?>
                	<li><a href="index.php?xem=chitietxemay&id=<?php echo $dong_chitiet['id_xemay']?>"><img src="admin/modules/quanlychitietxemay/uploads/<?php echo $dong_chitiet['hinhanh'] ?>" width="150" height="100" />
                    <p><?php echo $dong_chitiet['tenxemay'] ?></p>
                    <p style="color:red;">Giá sp: <?php echo $dong_chitiet['gia'] ?> đ</p>
                    <p style="color:red; text-align:center"> Chi tiết </p>
                    <?php
						}
					?>
                </ul>
                     
            </div>