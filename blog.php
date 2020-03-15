<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">  
<center>

<?php 

include("classes/Posts.php");
include("includes/database_connection.php");



session_start();
if(isset($_SESSION['username'])){
    echo "<h1 class='blogHeaderText'><center>Hello  " . $_SESSION['username'] . "!<br/>";
    echo "<a id='signoutBlogPage' href='includes/logout.php'>Sign out</center></h1></a>";

    echo "<div id='titlesBlogPostsDiv'>";

    if(isset($_SESSION['Role']) && $_SESSION['Role'] == 'Admin'){
        echo "<h1><a href='views/blogForm.php'>Write a blog!</a></h1> ";
        
        
        
        
            
        } 


    $Posts = new blogposts($dbh);
    $Posts->fetchAll();
    
    foreach($Posts->getPosts() as $post){
  
    
    echo "<h1><a href='post.php?id={$post['ID']}'>{$post['Title']}</a></h1>";
   

    
    
    

    }

    echo "</div>";





 

}else{
    echo "<h1><center>något gick fel!<center></h1>";
    echo "<a href='views/loginForm.php'>Please try again!</a>";
    die;
}


    

   

?>
</center>
</div>
</body>
</html>