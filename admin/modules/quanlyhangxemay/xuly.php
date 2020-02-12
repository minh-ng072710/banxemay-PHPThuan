<?php
	include('../config.php');
	$id=$_GET['id'];
	$tenhangxm=$_POST['tenhangxemay'];
	$thutu=$_POST['thutu'];
	if(isset($_POST['them'])){
		//them
		$sql="insert into hangxemay (tenhangxm,thutu) value ('$tenhangxm','$thutu')";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlyhangxemay&ac=them');
	}elseif($_POST['sua']){
		//sua
		$sql="update hangxemay set tenhangxm='$tenhangxm',thutu='$thutu' where id_hangxm='$id'";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlyhangxemay&ac=sua&id='.$id);
	}else{
		//xoa
		$sql="delete from hangxemay where id_hangxm='$id'";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlyhangxemay&ac=them');
	}
	
?>