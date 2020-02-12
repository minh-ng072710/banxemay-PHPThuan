<?php
	include('../config.php');
	$id=$_GET['id'];
	$tenxm=$_POST['tenxm'];
	$thutu=$_POST['thutu'];
	$gia=$_POST['giaxm'];
	$hangxm=$_POST['hangxm'];
	$loaixm=$_POST['loaixm'];
	$hinhanh=$_FILES['hinhanh']['name'];
	$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	$mota=$_POST['motaxm'];
	if(isset($_POST['them'])){
		//them
		$sql="insert into chitietxemay (tenxemay,thutu,gia,mota,hinhanh,id_hangxm,id_loaixm) value ('$tenxm','$thutu','$gia','$mota','$hinhanh','$hangxm','$loaixm')";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlychitietxemay&ac=them');
	}elseif($_POST['sua']){
		//sua
		if($hinhanh!=''){
			$sql="update chitietxemay set tenxemay='$tenxm',thutu='$thutu',gia='$gia',mota='$mota',hinhanh='$hinhanh',id_hangxm='$hangxm',id_loaixm='$loaixm' where id_xemay='$id'";
		}else{
			$sql="update chitietxemay set tenxemay='$tenxm',thutu='$thutu',gia='$gia',mota='$mota',id_hangxm='$hangxm',id_loaixm='$loaixm' where id_xemay='$id'";
		}
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlychitietxemay&ac=sua&id='.$id);
	}else{
		//xoa
		$sql="delete from chitietxemay where id_xemay='$id'";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlychitietxemay&ac=them');
	}
	
?>