  	<div class="left">
    	<?php
			if(isset($_GET['ac'])){
				$tam=$_GET['ac'];
			}else{
				$tam='';
			}if($tam=='them'){
				include('modules/quanlyhangxemay/them.php');
			}if($tam=='sua'){
				include('modules/quanlyhangxemay/sua.php');
			}
		?>
    </div>
   	<div class="right">
    	<?php
    		include('modules/quanlyhangxemay/lietke.php');
		?>
    </div>