<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$a_name=$_POST['name'];
	$a_description=$_POST['description'];

	$sql="INSERT into albums (
		name,
		description,
		createDate
		)values (
		'$a_name',
		'$a_description',
		NOW()
		)";
	echo $result=mysqli_query($conexion,$sql);

 ?>