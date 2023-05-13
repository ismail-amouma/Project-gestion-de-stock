
<html>
	<head>
		<title>Page d'admin</title>
	</head>
	<body style='margin:0 auto;'>
	<style>

.topnav {
    background-color: #009879;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: space-between;


}

h1 {

    font-family : 'Tahoma' , sans-serif ; 
    color: #fff;
    font-size: 25;
    font-weight: bold; 
    text-align: left;
    margin-left: 40px;
    flex: 1;
}

.logo {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 2px solid #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 40px

}

.logo img {
    max-width: 100%;
    height: auto;
    border-radius: 50%;
    ; 

    
}

.language-links {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 40px
}

.language-link {
    color: #fff;
    padding: 14px 16px;
    text-align: center;
    text-decoration: none;
    font-family : 'Tahoma' , sans-serif ; 
    font-size: 18px;
}

.language-link:hover {
    background-color: #ddd;
    color: #333;
}
iframe.box {
    box-shadow:inset  
    0 8px 6px -6px rgba(0, 0, 0, 0.4);
 }
    
    


    </style>
<?php 
	include('multi.php');	

?>
<div class="topnav" enctype="multipart/form-data">
    <h1 ><?php echo GTIT; ?> </h1>

    <div class="language-links">
        <a href="index.php?lg='FR'" class="language-link">Français</a>
        <a href="index.php?lg='EN'" class="language-link">English</a>
    </div>
    <div class="logo">
        <img src="me.png" alt="Project gestion de stock logo">
    </div>
</div>
		<iframe class="box" src="inscription.php" width="100%" height="80%" frameborder="0"> </iframe>
        <iframe class="box" src="database.php" width="100%" height="100%" frameborder="0"> </iframe>

		
		
	</body>
</html>

