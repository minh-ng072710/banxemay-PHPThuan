  	<div class="left">
    	<?php
			if(isset($_GET['ac'])){
				$tam=$_GET['ac'];
			}else{
				$tam='';
			}if($tam=='them'){
				include('modules/quanlyloaixemay/them.php');
			}if($tam=='sua'){
				include('modules/quanlyloaixemay/sua.php');
			}
		?>
    </div>
   	<div class="right">
    	<?php
    		include('modules/quanlyloaixemay/lietke.php');
		?>
    </div>