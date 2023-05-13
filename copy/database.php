<?php
include('multi.php');
include('connection.php');

if(isset($_REQUEST['save']))
{
    $_ID_Prouduit = $_REQUEST['_ID_Prouduit'];
    $_Prod_Code = $_REQUEST['_Prod_Code'];
    $_Prod_Designation = $_REQUEST['_Prod_Designation'];
    $_Prod_prix_A = $_REQUEST['_Prod_prix_A'];
    $_Prod_Marge = $_REQUEST['_Prod_Marge'];
    $_Prod_Quantite_St = $_REQUEST['_Prod_Quantite_St'];
    $_Prod_Seuil = $_REQUEST['_Prod_Seuil'];
    $_ID_fornisseur = $_REQUEST['_ID_fornisseur'];

    // Check if the product code already exists in the database
    $query = "SELECT * FROM dse WHERE Prod_Code='$_Prod_Code'";
    $sql = mysqli_query($con, $query);
    $row = mysqli_num_rows($sql);

    if($row == 1) {
        echo "<h3 style='color:red;margin-left:auto;margin-right:auto'>Cet étudiant éxiste deja dans la base de donnée !</h3>";
    } else {
        $query1 = "INSERT INTO dse (ID_Prouduit, Prod_Code, Prod_Designation, Prod_prix_A, Prod_Marge, Prod_Quantite_St, Prod_Seuil, ID_fornisseur) 
            VALUES ('$_ID_Prouduit', '$_Prod_Code', '$_Prod_Designation', '$_Prod_prix_A', '$_Prod_Marge', '$_Prod_Quantite_St', '$_Prod_Seuil', '$_ID_fornisseur')";
        
        if(mysqli_query($con, $query1)) {
            echo "<h3 style='color:blue;margin-left:auto;margin-right:auto;'>Etudiant sauvegardé avec succes. <br></h3>";
        } else {
            echo "Erreur pendant l'enregistrement, veuillez recomencer.";
        }
    }
}

echo "<br/>";     
?>

<body>      
    <link rel="stylesheet" type="text/css" href="style.css?v=5">
    <table border='1' class='styled-table' style='width:50%;margin-left:auto;margin-right:auto;text-align: center;'>
        <thead>
            <tr>
                <th style='width:30px'>No</th>
                <th><?php echo LIB_IDP; ?></th>
                <th><?php echo LIB_CODE; ?></th>
                <th><?php echo LIB_DES; ?></th>
                <th><?php echo LIB_Prix; ?></th>
                <th><?php echo LIB_Marge; ?></th>
                <th><?php echo LIB_Quantite; ?></th>
                <th><?php echo LIB_Seuil; ?></th>
                <th><?php echo LIB_IDf; ?></th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = mysqli_query($con, "SELECT * FROM dse");
            $i = 1;
            while($res = mysqli_fetch_assoc($sql))
            {
                $id = $res['ID_Prouduit'];
                echo "<tr>";
                echo "<td>".$i."</td>";
                echo "<td>".$res['ID_Prouduit']."</td>";
                echo "<td>".$res['Prod_Code']."</td>";
                echo "<td>".$res['Prod_Designation']."</td>";
                echo "<td>".$res['Prod_prix_A']."</td>";
                echo "<td>".$res['Prod_Marge']."</td>";
                echo "<td>".$res['Prod_Quantite_St']."</td>";
                echo "<td>".$res['Prod_Seuil']."</td>";
                echo "<td>".$res['ID_fornisseur']."</td>";
                echo "<link rel='stylesheet' type='text/css' href='style.css?v=5'>";
                echo "<td><a href='update.php?id=$id'><input type='submit' class='btn' name='Update' value='Update'/></a></td>";
                echo "<td><a href='delete.php?id=$id'><input type='submit' class ='btn' name='Delete' value='Delete'/></a></td>"; 
                $i=$i +1;
                    }
                    ?>
                </tbody>
            </table>
                </body>
        </html>