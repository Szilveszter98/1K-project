<?php
include("database_connection.php");
session_start();

$title = (!empty($_POST['title']) ? $_POST['title'] :"");
$description = (!empty($_POST['description']) ? $_POST['description'] : "");
$blog_content=(!empty($_POST['blog_content']) ? $_POST['blog_content'] : "");
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
if( empty($lblog_content)){
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

    

$query =" INSERT blog_posts (  Title, Description, blog_content, Category, userID) VALUES('$title', '$description', '$blog_content', '$category', '$userID');";
$return = $dbh->exec($query);
if(!$return){
    print_r($dbh->errorInfo());
}
echo "IT works!";

}


?>