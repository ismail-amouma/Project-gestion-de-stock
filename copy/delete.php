<?php 
include('connection.php');
$x=$_REQUEST['ID_Prouduit'];

$query=mysqli_query($con,"SELECT * from dse where ID_Prouduit='$x'");
$res=mysqli_fetch_assoc($query);
		

mysqli_query($con,"DELETE from dse where matricule='$x'");

header( "refresh:2;url=index.php" ); 
echo 'La ligne a été supprimer avec succes. Vous serez rediriger vers la base dans 2 secondes.'; 


?>