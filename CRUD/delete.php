<?php 
include('connection.php');
include('multi.php');
$x=$_REQUEST['id'];

$query=mysqli_query($con,"SELECT * from dse where ID_Prouduit='$x'");
$res=mysqli_fetch_assoc($query);
		

mysqli_query($con,"DELETE from dse where ID_Prouduit='$x'");

header( 'refresh:2;url=database.php?lg='. $lg); 
echo LIB_DEL; 


?>