  	<div class="left">
    	<?php
			if(isset($_GET['ac'])){
				$tam=$_GET['ac'];
			}else{
				$tam='';
			}if($tam=='them'){
				include('modules/quanlychitietxemay/them.php');
			}if($tam=='sua'){
				include('modules/quanlychitietxemay/sua.php');
			}
		?>
    </div>
   	<div class="right">
    	<?php
    		include('modules/quanlychitietxemay/lietke.php');
		?>
    </div>