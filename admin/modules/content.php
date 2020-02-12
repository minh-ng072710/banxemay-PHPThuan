<div class="content">
		<?php
			if(isset($_GET['quanly'])){
				$tam=$_GET['quanly'];
			}else{
				$tam='';
			}if($tam=='quanlyhangxemay'){
				include('modules/quanlyhangxemay/main.php');
			}if($tam=='quanlychitietxemay'){
				include('modules/quanlychitietxemay/main.php');
			}if($tam=='quanlyloaixemay'){
				include('modules/quanlyloaixemay/main.php');	
			}
		?>

    </div>
    <div class="clear"></div>