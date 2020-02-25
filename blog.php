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
    echo "hej  " . $_SESSION['username'] . "!<br/>";
    echo "<a href='includes/logout.php'>Logga ut!</a>";
}else{
    echo "något gick fel!";
    echo "<a href='includes/login.php'>tillbaka till inloggningen!</a>";
}
   






?>





<body>
    
</body>
</html>