<?php
	$sql_hangxm="select * from hangxemay";
	$query_hangxm=mysqli_query($conn,$sql_hangxm);
?>

      	<p style="text-align:center; color:Blue; background:#F00; padding:10px">Danh Mục Hãng Xe Máy</p>
            <div class="danhsachhangxemay">
            	<ul>
                <?php
					while($dong_hangxm=mysqli_fetch_array($query_hangxm)){
				?>
                	<li> <a href="index.php?xem=chitiethangxemay&id=<?php echo $dong_hangxm['id_hangxm']?>"><?php echo $dong_hangxm['tenhangxm']?></a></li>
                   
                <?php
					}
				?>
                </ul>
            </div><!---Kết thúc hãng xe máy-->
<?php
	$sql_loaixm="select * from loaixemay";
	$query_loaixm=mysqli_query($conn,$sql_loaixm); 
?>
            <p style="text-align:center; color:Blue; background:#F00; padding:10px">Loại xe máy</p>
            <div class="danhsachhangxemay">
            	<ul>
                <?php
					while($dong_loaixm=mysqli_fetch_array($query_loaixm)){
				?>
                	<li> <a href="index.php?xem=chitietloaixemay&id=<?php echo $dong_loaixm['id_loaixm']?>"><?php echo $dong_loaixm['loaixm']?></a></li>
                 <?php
					}
				?>    
                </ul>
            </div><!---Kết thúc loại xe máy-->
       