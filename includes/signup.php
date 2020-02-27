<?php 


include("../includes/database_connection.php");




$username = (!empty($_POST['username']) ? $_POST['username'] : "");
$first_name = (!empty($_POST['firstName']) ? $_POST['firstName'] : "");
$last_name = (!empty($_POST['lastName']) ? $_POST['lastName'] : "");
$email = (!empty($_POST['email']) ? $_POST['email'] : "");
$password = (!empty($_POST['password']) ? md5($_POST['password']) : "");


//kollar om username finns redan    
$query_username = "SELECT * from user where username = '$username'";

$sth_username = $dbh->prepare($query_username);
$return_username= $sth_username->execute();

//kollar om email finn redan
$query_email = "SELECT * from user where email = '$email'";

$sth_email = $dbh->prepare($query_email);
$return_email= $sth_email->execute();







if($sth_username->rowcount() > 0){
    
    echo "<center><h2> Användarnamnet eller mailen finns redan i systemet</h2></center>";
    echo "<center><a href='../views/signupForm.php'>Please try again!</a></center>";
    die;
} else{
    $query =" INSERT INTO user (username, firstName,lastName, email, password) VALUES('$username','$first_name','$last_name', '$email','$password');";
    $return = $dbh->exec($query);
    if(!$return){
        print_r($dbh->errorInfo());
    }
    echo "Welcome '$username'! Nu är du registrerad!";
}




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
if( empty($email)){
        $errorMessages.= "Du måste ange email";
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






?>