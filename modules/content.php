<div class="content">
    	<div class="left"> 
        	<?php
            	include("modules/left/danhsach.php");
			?>
        </div>
        <div class="right">
        	<?php
            	if(isset($_GET['xem'])){
					$tam=$_GET['xem'];
				}else{
					$tam='';
				}if($tam=='chitiethangxemay'){
					include("modules/right/chitiethangxemay.php");
				}elseif($tam=='chitietxemay'){
					include("modules/right/chitietxemay.php");
				}elseif($tam=='chitietloaixemay'){
					include("modules/right/chitietloaixemay.php");
				}else{
					include("modules/right/tatcasanpham.php");
				}
			?>
        </div>      
        <div class="clear"> </div>
    </div>