<?php
include('multi.php');
include('connection.php');

if (isset($_POST['submit'])) {
    $searchQuery = $_POST['search'];
    header("Location: search.php?search_query=" . urlencode($searchQuery));
    exit();
}
?>

<html>
<head>
    <style>
    .styled-table {
        border: none;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        width: 40%;
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
        padding: 6px 5px;
        background-color: #1BBA93;
        font-size: 17px;
        border: none;
        border-radius: 8px;
        color: #ecfffa;
        cursor: pointer;
    }

    .btn1 {
        height: 80%;
        margin:  auto;
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
        margin: 50px auto;
        width: 60%;
        height: 40px;
        background-color: #fff;
        border: 1px solid #dddddd;
        border-radius: 100px;
        padding: 3px 5px;
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
        margin: auto;
    }
    </style>
</head>
<body style='background: linear-gradient(to bottom, #fff, #dddddd);'>

<form class="search-bar" method="post" action="database.php">
    <img class="img" src="search-icon.png">
    <input placeholder="Enter your search query..." class="inp" type="text" name="search" id="search">
    <button type="submit" class="btn1" name="submit">Search</button>
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
        $sql = mysqli_query($con, "SELECT * FROM dse");
        $i = 1;
        while ($res = mysqli_fetch_assoc($sql)) {
            $id = $res['ID_Prouduit'];
            echo "<tr>";
            echo "<td >" . $i . "</td>";
            echo "<td>" . $res['ID_Prouduit'] . "</td>";
            echo "<td>" . $res['Prod_Code'] . "</td>";
            echo "<td>" . $res['Prod_Designation'] . "</td>";
            echo "<td>" . $res['Prod_prix_A'] . "</td>";
            echo "<td>" . $res['Prod_Marge'] . "</td>";
            echo "<td>" . $res['Prod_Quantite_St'] . "</td>";
            echo "<td>" . $res['Prod_Seuil'] . "</td>";
            echo "<td>" . $res['ID_fornisseur'] . "</td>";
            echo "<td><a href='update.php?id=$id'><input type='submit' class='btn' name='Update' value='Update'/></a></td>";
            echo "<td><a href='delete.php?id=$id'><input type='submit' class ='btn' name='Delete' value='Delete'/></a></td>";
            echo "</tr>";
            $i = $i + 1;
        }
        ?>
    </tbody>
</table>
</body>
</html>
