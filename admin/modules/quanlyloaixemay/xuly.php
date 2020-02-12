<?php
	include('../config.php');
	$id=$_GET['id'];
	$tenloaixm=$_POST['tenloaixemay'];
	$thutu=$_POST['thutu'];
	if(isset($_POST['them'])){
		//them
		$sql="insert into loaixemay (loaixm,thutu) value ('$tenloaixm','$thutu')";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlyloaixemay&ac=them');
	}elseif($_POST['sua']){
		//sua
		$sql="update loaixemay set loaixm='$tenloaixm',thutu='$thutu' where id_loaixm='$id'";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlyloaixemay&ac=sua&id='.$id);
	}else{
		//xoa
		$sql="delete from loaixemay where id_loaixm='$id'";
		mysqli_query($conn,$sql);
		header('location:../../index.php?quanly=quanlyloaixemay&ac=them');
	}
	
?>