<?php 
		session_start();
		
		if (isset($_REQUEST['lg'])) {
			$x=$_REQUEST['lg'];
		};
		if (isset($x))
		{	
			$lg="EN";
			$lg=$x;

		}
		else 
		{
			$lg="FR";
		};
		switch ($lg)
		{
			case "FR":
				
				define("GTIT", "Project Gestion de Stock");
				define("titr1","Ajoutez votre produit :");
				define("titr2","Base de donne");
				define("titr3","misea a jour votre proudit");
				define("LIB_IDP","Id du prouduit");
				define("LIB_CODE","Code de produit");
				define("LIB_DES","Désignation du produit");
				define("LIB_Prix","Prix d'achat du produit");
				define("LIB_Marge","bénéficiaire du produit");
				define("LIB_Quantite","Quantité en stock du produit");
				define("LIB_Seuil", "Seuil de ravitaillement du produit");
				define("LIB_IDf", "ID du fournisseur");
				define("LIB_SAVE","Sauvegarder");
				
				define("LIB_INFO","tout les info est obligatoire");
				define("LIB_DEL","La ligne a été supprimer avec succes. Vous serez rediriger vers la base dans 2 secondes.");
				define("update","Mise a jour");
				break;
			case "EN":
				
				define("GTIT", "Stock Management Project");
				define("titr1","Add your product");
				define("titr3","Update your product");
				define("titre2","Data base");
				define("LIB_IDP","Product ID");
				define("LIB_CODE","Product code");
				define("LIB_DES","Product designation");
				define("LIB_Prix","Product purchase price");
				define("LIB_Marge","Product profit margin");
				define("LIB_Quantite","Product stock quantity");
				define("LIB_Seuil", "Product restocking threshold");
				define("LIB_IDf","Supplier ID");
				define("LIB_SAVE","Save");
				define("LIB_INFO","All info required");
				define("LIB_DEL","Line deleted succesfully, you'll be redirected to your database in 2 seconds.");
				define('update','Update');
				break;
		};
		
