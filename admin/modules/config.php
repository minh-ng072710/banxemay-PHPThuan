<?php
	$tenmaychu='localhost';
	$tentaikhoan='ducquoc';	
	$pass='admin';
	$csdl='webbanxemay';
	$conn= new MySQLi($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Không kết nối được cơ sở dữ liệu');
	mysqli_select_db($conn,$csdl);
?>