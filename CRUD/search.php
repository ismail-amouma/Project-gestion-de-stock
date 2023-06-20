<?php
include('multi.php');
include('connection.php');
?>

<html>
<head>
    <style>
    html {
        scroll-behavior: smooth;
    }

    .highlight {
        background-color: #1BBA93;
    }
    .highlight1 {
        background-color: red;
    }

    .styled-table {
        border: none;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.20);
        border-radius: 10px;
    }

    .styled-table thead tr {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        background-color: #009879;
        color: #fff;
        text-align: center;
        border: none;
    }

    .styled-table th,
    .styled-table td {
        padding: 10px 15px;
        border: none;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #fff;
    }

    .styled-table tbody tr:nth-of-type(odd) {
        background-color: #fff;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #f3f3f3;
        border: none;
    }

    .btn {
        padding: 6px 7px;
        background-color: #1BBA93;
        font-size: 17px;
        border: none;
        border-radius: 8px;
        color: #ecfffa;
        cursor: pointer;
    }
    .btn1 {
        background-color: #1BBA93;
        font-size: 17px;
        border: none;
        border-radius: 8px;
        color: #ecfffa;
        cursor: pointer;
    }
    .btn:hover {
        background-color: #169c7b;
        color: white;
    }
    .search-bar {
        display: flex;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        margin: 90px auto;
        width: 40%;
        height: 40px;
        background-color: #fff;
        border: 1px solid #dddddd;
        border-radius: 8px;
        padding: 5px 15px;
        font-size: 16px;
        color: #333;
        transition: 0.4s;
    }
    .inp {
        width: 80%;
        height: 100%;
        border: none;
        outline: none;
        font-size: 16px;
        padding-left: 20px;
        color: #333;
    }
    .img {
        width: auto;
        height: 60%;
        margin:  auto;
    }
    .bt2{
        margin: 0 0 0 10px;
        background-color: red;
        font-size: 17px;
        border: none;
        border-radius: 8px;
        color: #ecfffa;
        cursor: pointer;
        padding: 10px 10px;
        text-decoration: none;
    }
    </style>
</head>
<body style='background: linear-gradient(to bottom, #fff, #dddddd);'>
<form class="search-bar" method="POST" >
    <img class ="img" src="search-icon.png">
    <input placeholder ="Tape votre produit ..." class ="inp"type="text" name="search" id="search">
    <input type='submit' class='btn1' name='submit' value='Search'></a>
    <a class='bt2' href='database.php'>Cancel</a>
</form>

<table border='1' class='styled-table' style='width:50%;margin-top:50px auto;margin-left:auto;margin-right:auto;text-align: center;'>
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
if (isset($_GET['search_query'])) {
    $searchQuery = $_GET['search_query'];

    if (!empty($searchQuery)) {
        $sql = "SELECT * FROM dse WHERE ID_Prouduit LIKE '%$searchQuery%'
                OR Prod_Code LIKE '%$searchQuery%'
                OR Prod_Designation LIKE '%$searchQuery%'
                OR Prod_prix_A LIKE '%$searchQuery%'
                OR Prod_Marge LIKE '%$searchQuery%'
                OR Prod_Quantite_St LIKE '%$searchQuery%'
                OR Prod_Seuil LIKE '%$searchQuery%'
                OR ID_fornisseur LIKE '%$searchQuery%'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            $i = 1;
            while ($res = mysqli_fetch_assoc($result)) {
                $id = $res['ID_Prouduit'];
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . highlightSearchText($res['ID_Prouduit'], $searchQuery) . "</td>";
                echo "<td>" . highlightSearchText($res['Prod_Code'], $searchQuery) . "</td>";
                echo "<td>" . highlightSearchText($res['Prod_Designation'], $searchQuery) . "</td>";
                echo "<td>" . highlightSearchText($res['Prod_prix_A'], $searchQuery) . "</td>";
                echo "<td>" . highlightSearchText($res['Prod_Marge'], $searchQuery) . "</td>";
                echo "<td>" . highlightSearchText($res['Prod_Quantite_St'], $searchQuery) . "</td>";
                echo "<td>" . highlightSearchText($res['Prod_Seuil'], $searchQuery) . "</td>";
                echo "<td>" . highlightSearchText($res['ID_fornisseur'], $searchQuery) . "</td>";
                echo "<td><a href='update.php?id=$id'><input type='submit' class='btn' name='Update' value='Update'/></a></td>";
                echo "<td><a href='delete.php?id=$id'><input type='submit' class='btn' name='Delete' value='Delete'/></a></td>";
                echo "</tr>";
                $i++;
            }
        } else {
            echo "<tr><td colspan='11'>No results found.</td></tr>";
        }
    } 
    else 
    {
        echo "<tr><td colspan='11'>No search query provided.</td></tr>";
    }
} else {
    echo "<tr><td colspan='11'>No search query provided.</td></tr>";
}

function highlightSearchText($text, $searchQuery) {
    if ($text!=$searchQuery) {
        $highlightedText = str_ireplace($searchQuery, "<span class='highlight1'>$searchQuery</span>", $text);
        return $highlightedText;
    } else {
        $highlightedText = str_ireplace($searchQuery, "<span class='highlight'>$searchQuery</span>", $text);
        return $highlightedText;
    }
} 
?>
    </tbody>
</table>
</body>
</html>
