<?php
include("database_connection.php");
session_start();


// Delete blogs
if(isset($_GET['action']) && $_GET['action'] == "delete"){
    $postID = $_GET['id'];
     $query = "DELETE FROM blog_posts WHERE id=" . $_GET['id'];" DELETE FROM comments WHERE id=" .$_GET['id'];
     $exequte = $dbh->exec($query);
   
     

  
  
     header("location:../blog.php");
  
  
}else{
// Creating blogs
$title = (!empty($_POST['title']) ? $_POST['title'] :"");
$description = (!empty($_POST['description']) ? $_POST['description'] : "");
$blog_content=(!empty($_POST['blog_content']) ? $_POST['blog_content'] : "");

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

}
 


//PROV - IMG
 
if (isset($_POST['submit'])) {
    if(!empty($_FILES['pictures']['name'])){
    $file = $_FILES['pictures'];



    $fileName = $_FILES['pictures']['name'];
    $fileTmpName = $_FILES['pictures']['tmp_name'];
    $fileSize = $_FILES['pictures']['size'];
    $fileError = $_FILES['pictures']['error'];
    $fileType = $_FILES['pictures']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt)); 

    $allowed = array('jpg', 'jpeg', 'png');

    


    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = '../uploads/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                
               
            } else {
                echo "Your pictures is to big!";
            }
        } else {
            echo "Det blev ett error vid uppladdningen av filen";
        }
    } else {
    echo "Du kan inte ladda upp filer av denna typ";
    }
}
if(empty(['pictures']['name'])){
    $newFileName = " ";
}
} 



$query ="INSERT INTO blog_posts (  Title, Description, blog_content, Pictures, Category, userID) VALUES(:Title , :Description , :blog_content, :fileNameNew, :category, :userID);";
$sth = $dbh->prepare($query);
    $sth->bindParam(':Title', $title);
    $sth->bindParam(':Description', $description);
    $sth->bindParam(':blog_content', $blog_content);
    $sth->bindParam(':fileNameNew', $fileNameNew);
    $sth->bindParam(':category', $category);
    $sth->bindParam(':userID', $userID);
$return = $sth->execute();
if(!$return){
    print_r($dbh->errorInfo());
}

header("location:../blog.php");

}
?>  