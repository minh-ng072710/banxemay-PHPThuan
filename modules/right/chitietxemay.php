<?php
	$sql_chitiet="select * from chitietxemay where id_xemay='$_GET[id]'";
	$query=mysqli_query($conn,$sql_chitiet);
?>
<p style="text-align:center; color:Blue; background:#F00; padding:10px">Chi tiết xe máy</p>
            <div class="sanphamall">
            	<ul>
                	<?php
						while($dong_chitiet=mysqli_fetch_array($query)){
							$id_hangxm=$dong_chitiet['id_hangxm'];
							$id_loaixm=$dong_chitiet['id_loaixm'];
					?>
                	<li><a href="index.php?xem=chitietxemay&id=<?php echo $dong_chitiet['id_xemay']?>"><img src="admin/modules/quanlychitietxemay/uploads/<?php echo $dong_chitiet['hinhanh'] ?>" width="150" height="100" />
                    <p>Tên xe máy: <?php echo $dong_chitiet['tenxemay'] ?></p>
                    <p style="color:red;">Giá sp: <?php echo $dong_chitiet['gia'] ?> đ</p>
                    <p>Mô tả: <?php echo $dong_chitiet['mota'] ?></p>
                    <?php
						$sql_hangxm="select * from hangxemay where hangxemay.id_hangxm='$id_hangxm'";
						$query_hangxm=mysqli_query($conn,$sql_hangxm);
						$dong_hangxm=mysqli_fetch_array($query_hangxm);
					?>
                    <p>Hãng xe máy: <?php echo $dong_hangxm['tenhangxm'] ?></p>
                    <?php
						$sql_loaixm="select * from loaixemay where loaixemay.id_loaixm='$id_loaixm'";
						$query_loaixm=mysqli_query($conn,$sql_loaixm);
						$dong_loaixm=mysqli_fetch_array($query_loaixm);
					?>
                    <p>Loại xe máy: <?php echo $dong_loaixm['loaixm'] ?></p>
                    <?php
						}
					?>
                </ul>
                </div>
                