<html>
	<head>
		<title>Update</title>
		
	</head>
	<body style="margin:0px">
		<div style="display: flex;flex-wrap: wrap;background-color: #80D376;border-bottom-width: 2px;border-bottom-style: solid;">
			<img id="insea" src="INSEA_logo.png" width="120" height="130">
			<H1 id="titre" style="margin: auto;"><legend align="center"> INSEA - Base de données</legend></H1>>
		</div>
		<br/>
<?php 
include('connection.php');
include('multi.php')
$_x=$_REQUEST['ID_Prouduit'];

$query=mysqli_query($con,"select * from dse where ID_Prouduit='$_x'");
$res=mysqli_fetch_assoc($query);

extract($res);

extract($_REQUEST);
if(isset($update)){

	$query="UPDATE dse SET ID_Prouduit='$_ID_Prouduit',Prod_Code='$_Prod_Code',Prod_Designation='$_Prod_Designation',Prod_prix_A='$_Prod_prix_A',Prod_Marge='$_Prod_Marge',Prod_Quantite_St='$_Prod_Quantite_St',Prod_Seuil='$_Prod_Seuil',ID_fornisseur='$_ID_fornisseur', where _ID_Prouduit='$__ID_Prouduit'";
	mysqli_query($con,$query);	
	
	header( "refresh:1;url=index.php" ); 
	echo '<h3 style="margin:auto;">Les données ont été modifiées avec succes.</h3>'; 

}

?>

		<form method="post" enctype="multipart/form-data">
			<table border="1" style='width:40%;margin-left:auto;margin-right: auto;'>
				<tr>
					<td>Entrez votre nom :</tD>
					<td><input type="text" value="<?php echo $_ID_Prouduit;?>" name="n"/></td>
				</tR>
				<tr>
					<td>Entrez votre prenom :</tD>
					<td><input type="text" value="<?php echo $_Prod_Code;?>" name="p"/></td>
				</tR>
				<tr>
					<td>Entrez votre matricule :</tD>
					<td><input type="text" value="<?php echo $_Prod_Designation;?>" name="mat"/></td>
				</tR>
				<tr>
					<td>Entrez votre date de naissance :</tD>
					<td><input type="date" value="<?php echo $_Prod_prix_A;?>"name="nai"/></td>
				</tR>
				<tr>
					<td>Entrez votre date d'inscription :</tD>
					<td><input type="date" value="<?php echo $_Prod_Marge;?>" name="ins"/></td>
				</tR>
				<tr>
					<td>Selectionnez votre niveau :</tD>
					<td><input type="date" value="<?php echo $_Prod_Quantite_St;?>" name="ins"/></td>
				</tR>
				<tr>
					<td>Selectionnez votre fillière :</tD>
					<td><input type="date" value="<?php echo $_Prod_Seuil;?>" name="ins"/></td>
				</tR>
				<tr>
					<td>Entrez votre sexe :</tD>
					<td><input type="date" value="<?php echo $_ID_fornisseur;?>" name="ins"/></td>
				</tR>
				</tR>
			</table>
		</form>
	</body>
</html>