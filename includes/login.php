<?php 
include("database_connection.php");



//Login 

$username = $_POST['username'];
$password = md5($_POST['password']);

//Taking information to inlogning from database
$query = "SELECT ID, username, Password, Role FROM user WHERE username='$username' AND Password='$password'";

$return = $dbh->query($query);


$row = $return->fetch(PDO::FETCH_ASSOC);





//if sats, if something is wrong 
if(empty($row)){
   
    header("location:../blog.php?err=true");
    echo "Du kan inte logga in";
} else {
  //sending information to blog.php
  
    session_start();

    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['Role']= $row['Role'];
    $_SESSION['ID']= $row['ID'];


    


    


    header("location:../blog.php");





    
}

 


?>