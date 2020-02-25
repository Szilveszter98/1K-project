<?php 
include("database_connection.php");





$username = $_POST['username'];
$password = ($_POST['password']);

$query = "SELECT ID, username, Password FROM user WHERE username='$username' AND Password='$password'";

$return = $dbh->query($query);


$row = $return->fetch(PDO::FETCH_ASSOC);





if(empty($row)){
   
    header("location:../blog.php?err=true");
    echo "Du kan inte logga in";
} else {
  
  
    session_start();

    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    


    header("location:../blog.php");





    
}

 


?>