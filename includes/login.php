<?php 
$username = $_POST['userName'];
$password = $_POST['password'];

$username = (!empty($_POST['userName'])? $_POST['userName'] : "");
$password = (!empty($_POST['password'])? $_POST['password'] : "");

$errors=falese;
$errorMasseges="";
if(isset($_GET['action']) && $_GET['action']){
    if(empty($username)){
        $errorMasseges.="fyll";
        $errors = true;
    }
    if(empty($password)){
        $errorMasseges.="fyll";
        $errors = true;
    }
    if($errors= true){
        echo $errorMasseges;
        die;
    }
}
$quary =" SELECT ID, username, password FROM blogg WHERE username='$username' and password='$password'";

?>