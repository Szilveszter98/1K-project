<?php 

// PHP SETTING
$host = "localhost";
$user = "root";
$pass = "";
$db = "Blogg";


// MAKE CONNECTION
try {
    $dsn = "mysql:host=$host;dbname=$db;";
    $dbh = new PDO($dsn, $user, $pass);
} catch(PDOException $e) {

    echo "Error!" . $e->getMessage() . "<br />";
    die();
}
?>