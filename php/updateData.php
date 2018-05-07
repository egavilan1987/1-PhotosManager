<?php 

	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$a_name=$_POST['name'];
	$a_description=$_POST['description'];

	$sql="UPDATE albums set name='$a_name',
							description='$a_description'
						where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>