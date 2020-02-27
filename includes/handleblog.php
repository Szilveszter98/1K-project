<?php
include("database_connection.php");
session_start();

$title = (!empty($_POST['title']) ? $_POST['title'] :"");
$description = (!empty($_POST['description']) ? $_POST['description'] : "");
$blog_contant=(!empty($_POST['blog_contant']) ? $_POST['blog_contant'] : "");
//pictures=(!empty)
$category=(!empty($_POST['category']) ? $_POST['category'] : "");

$userID = $_SESSION['ID']; 

$errors= false;
$errorMessages= "";


if(isset($_GET['action']) && $_GET['action']){
if(empty($title)){
    $errorMessages.="Your blog most have a title!";
    $errors = true;
}
if( empty($description)){
    $errorMessages.= "You need to write a description";
    $errors= true;
    }
if( empty($lblog_contant)){
    $errorMessages.= "You need to write content";
    $errors= true;
    }
if( empty($category)){
        $errorMessages.= "Please write a category";
        $errors= true;
        }
if($errors= true){
    echo $errorMessages;
   
    die;
}

} else {

    

$query =" INSERT blog_posts (  Title, Description, blog_contant, Category, userID) VALUES('$title', '$description', '$blog_contant', '$category', '$userID');";
$return = $dbh->exec($query);
if(!$return){
    print_r($dbh->errorInfo());
}
echo "IT works!";

}


?>