<?php 


include("../includes/database_connection.php");



$username = $_POST['username'];
$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$password = md5($_POST['password']);


$username = (!empty($_POST['username']) ? $_POST['username'] : "");
$first_name = (!empty($_POST['firstName']) ? $_POST['firstName'] : "");
$last_name = (!empty($_POST['lastName']) ? $_POST['lastName'] : "");
$password = (!empty($_POST['password']) ? $_POST['password'] : "");
    
$errors= false;
$errorMessages= "";
if(isset($_GET['action']) && $_GET['action']){
if(empty($username)){
    $errorMessages.="Du måste ange ett användar namn!";
    $errors = true;
}
if( empty($first_name)){
    $errorMessages.= "Du måste ange first_name";
    $errors= true;
    }
if( empty($last_name)){
    $errorMessages.= "Du måste ange last_name";
    $errors= true;
    }
if( empty($password)){
$errorMessages.= "Du måste ange ett användar password!";
$errors= true;
}

if($errors= true){
    echo $errorMessages;
   
    die;
}

}

$query =" INSERT INTO user (username, firstName,lastName,password) VALUES('$username','$first_name','$last_name','$password');";
$return = $dbh->exec($query);
if(!$return){
    print_r($dbh->errorInfo());
}
echo "Nu är du registrerad!"


?>