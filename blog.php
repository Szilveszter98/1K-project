<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
include("includes/database_connection.php");

session_start();
if(isset($_SESSION['username'])){
    echo "<h1><center>hej  " . $_SESSION['username'] . "!<br/>";
    echo "<a href='includes/logout.php'>Logga ut!</center></h1></a>";
}else{
    echo "<h1><center>något gick fel!<center></h1>";
    echo "<a href='views/loginForm.php'>Please try again!</a>";
}
   



$Posts = new blogposts($dbh);
$Posts->fetchAll();

foreach($Posts->getPosts() as $post){
    
    echo "<span>  Namn: </span>" . " " . $row['namn']. "<br/>";
    echo "<span>  Message: </span>" . " " . $row['Message']. "<br/>";
    echo "<span>  Posted:    </span>" . " " . $row['Date_posted']. "<br/>";
    echo "<a href=\"uppgift1.php?action=delete&id=" . $row['id'] . "\" >Delete!</a>";
    echo "<hr/>";
}


?>





<body>
    
</body>
</html>