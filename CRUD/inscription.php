<!DOCTYPE html>

<html >
    <head>
        <title>Page d'inscription</title>
    </head>

<?php 
include('connection.php');
include('multi.php');
extract($_REQUEST);
if(isset($save))
{
    $query="select * from dse  ";
    $sql=mysqli_query($con,$query);
    
    $row=mysqli_num_rows($sql);    

        $query1="INSERT INTO dse(ID_Prouduit,Prod_Code,Prod_Designation,Prod_prix_A,Prod_Marge,Prod_Quantite_St,Prod_Seuil,ID_fornisseur) VALUES ('$_ID_Prouduit','$_Prod_Code','$_Prod_Designation','$_Prod_prix_A','$_Prod_Marge','$_Prod_Quantite_St','$_Prod_Seuil','$_ID_fornisseur')";

        if(mysqli_query($con,$query1))
        {
            echo "<h3 style='color:blue;margin-left:auto;margin-right:auto;'>Vous êtes sauvegardé avec succes. <br></h3>";    
        }
        else
        {
            echo "Erreur pendant l'enregistrement, veuillez recomencer.";
        }
    }

?>

<body>
<style>
@import url('httpss://fonts.googleapis.com/css?family=Roboto');


.html { scroll-behavior: smooth; }  
    body {
                background-color;: #dddddd;
                font-family:"Roboto", sans-serif;
                height: 100vh;
                justify-content: center; 
                align-items: center;
            }
.signup-form {
            
            margin: 50px auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.20);
            font-family: "Roboto", sans-serif;
            width:650px;
            background:#f3f3f3;
            border-radius: 10px;
            border: 1px solid #cccccc;
}
.form-header  {
            margin-top:-20px;
            background-color: #009879;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
}
.form-header h1 {
            font-size: 30px;
            text-align:center;
            color:white;    ;
            padding:20px 0;
            border-bottom:1px solid #fffff;
}
.form-group{
  margin-bottom:20px;
}
.form-body .label-title {
  color:#1BBA93;
  font-size: 17px;
  font-weight: bold;
}
.form-body .form-input {
    font-size: 17px;
    box-sizing: border-box;
    width: 100%;
    height: 34px;
    padding-left: 10px;
    padding-right: 10px;
    color: #333333;
    text-align: left;
    border: 1px solid #d6d6d6;
    border-radius: 4px;
    background: white;
    outline: none;
}
.horizontal-group .left{
  float:left;
  width:45%;
  margin-left:20px;
}
.horizontal-group .right{
  float:right;
  width:45%;
  margin-right:20px;
}
input[type="file"] {
 outline: none;
 cursor:pointer;
 font-size: 17px;
}
#range-label {
 width:15%;
 padding:5px;
 background-color: #1BBA93;
 color:white;
 border-radius: 5px;
 font-size: 17px;
 position: relative;
 top:-8px;
}
::-webkit-input-placeholder {
 color:#d9d9d9;
}

.form-footer {
 clear:both;
}
.signup-form .form-footer  {
  background-color: #EFF0F1;

  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  padding:10px 40px;
  text-align: right;
  border-top: 1px solid #cccccc;

}

.form-footer span {
  float:left;
  margin-top: 10px;
  font-style: italic;
  font-weight: thin;
}

.btn {
   display:inline-block;
   padding:10px 20px;
   background-color: #1BBA93;
   font-size:17px;
   border:none;
   border-radius:5px;
   color: #bcf5e7 ;
   cursor:pointer;
}

.btn:hover {
  background-color: #169c7b;
  color:white;
}
</style>

<form class='signup-form' method="post">

    <div class="form-header">
        
        <h1> <?php echo titr1;?> </h1>
    </div>
    <div class="form-body">
        <div class="horizontal-group">
            <div class="form-group left">
                <label for="_ID_Prouduit" class="label-title"> <?php echo LIB_IDP;?></label>
                <input type="text" name="_ID_Prouduit" id="_ID_Prouduit"  class="form-input"  placeholder="entrer votre id du produit"/>
            </div>
            <div class="form-group right">
                <label for="_Prod_Code" class="label-title"><?php echo LIB_CODE;?></label>
                <input type="text" name="_Prod_Code" id="_Prod_Code" class="form-input"  placeholder="entrer votre Code du produit"/>
            </div>
        </div>
    </div>
    <div class="form-body">
        <div class="horizontal-group">
            <div class="form-group left">
                <label for="_Prod_Designation" class="label-title"><?php echo LIB_DES;?></label>
                <input type="text" name="_Prod_Designation" id="_Prod_Designation"  class="form-input"  placeholder="entrer votre destination du produit"/>
            </div>
            <div class="form-group right">
                <label for="_Prod_prix_A" class="label-title"><?php echo LIB_Prix;?></label>
                <input type="text" name="_Prod_prix_A" id="_Prod_prix_A" class="form-input"  placeholder="entrer votre prix d'achat du produit"/>
            </div>
        </div>
    </div>
    <div class="form-body">
        <div class="horizontal-group">
            <div class="form-group left">
                <label for="_Prod_Marge" class="label-title"><?php echo LIB_Marge;?></label>
                <input type="text" name="_Prod_Marge" id="_Prod_Marge"  class="form-input"  placeholder="entrer votre Marge bénéficiaire du produit"/>
            </div>
            <div class="form-group right">
            <label for="_Prod_Quantite_St" class="label-title"><?php echo LIB_Quantite;?></label>
            <input type="text" name="_Prod_Quantite_St" id="_Prod_Quantite_St"  class="form-input"  placeholder="Quantité en stock du produit"/>
        </div>
        <div class="form-body">
        <div class="horizontal-group">
            <div class="form-group left">
                <label for="_Prod_Seuil" class="label-title"><?php echo LIB_Seuil;?></label>
                <input type="text" name="_Prod_Seuil" id="_Prod_Seuil"  class="form-input"  placeholder="Seuil de ravitaillement du produit"/>
            </div>
            <div class="form-group right">
            <label for="_ID_fornisseur" class="label-title"><?php echo LIB_IDf;?></label>
            <input type="text" name="_ID_fornisseur" id="_ID_fornisseur"  class="form-input"  placeholder="_ID_fornisseur"/>
        </div>
    <div class="form-footer">
            <span><?php echo LIB_INFO;?></span>
            <button value="Sauvegarder" name ="save" type="submit" class="btn"><?php echo LIB_SAVE;?></button>
        </div>
    </form>
 </body>
</html>
