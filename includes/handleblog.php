<?php
include("database_connection.php");
session_start();



if(isset($_GET['action']) && $_GET['action'] == "delete"){
    // $id =(!empty($_GET['ID']) ? $_GET['ID'] : "");
    $postID = $_GET['id'];
     $query = "DELETE FROM blog_posts WHERE id=" . $_GET['id'];" DELETE FROM comments WHERE id=" .$_GET['id'];
     $exequte = $dbh->exec($query);
   
     

  
  
     header("location:../blog.php");
  
  
}else{

$title = (!empty($_POST['title']) ? $_POST['title'] :"");
$description = (!empty($_POST['description']) ? $_POST['description'] : "");
$blog_content=(!empty($_POST['blog_content']) ? $_POST['blog_content'] : "");
$pictures=(!empty($_POST['pictures']) ? $_POST['pictures'] : "");
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





$query =" INSERT blog_posts (  Title, Description, blog_content, Pictures, Category, userID) VALUES('$title', '$description', '$blog_content', '$pictures', '$category', '$userID');";
$return = $dbh->exec($query);
if(!$return){
    print_r($dbh->errorInfo());
}
echo "<h1>" . $_POST['title'] . "</h1> <br />";
echo "<h5>" . $_POST['description'] . "</h5> <br />";
echo "<p>" . $_POST['blog_content'] . "</p> <br />";
echo "<img src='uploads/" . $_POST['pictures'] . "'> <br />";
echo "<h5>" . $_POST['category'] . "</h5>";

}

}
?>