<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 

include("classes/Posts.php");
include("includes/database_connection.php");

session_start();
if(isset($_SESSION['username'])){
    echo "<h1><center>hej  " . $_SESSION['username'] . "!<br/>";
    echo "<a href='includes/logout.php'>Logga ut!</center></h1></a>";
}else{
    echo "<h1><center>något gick fel!<center></h1>";
    echo "<a href='views/loginForm.php'>Please try again!</a>";
}

if(isset($_SESSION['Role']) && $_SESSION['Role'] == 'Admin'){
    echo "admin";
echo "<a href='blogWriter.php'>Write a blog!</a> || <a href='blog.php'>To the blogs!</a>";
    
} 
/* else{
    echo "user";
} */ 


/* include("classes/Posts.php");

$Posts = new blogposts($dbh);
$Posts->fetchAll();

foreach($Posts->getPosts() as $post){
    
    echo "<span>  Namn: </span>" . " " . $row['namn']. "<br/>";
    echo "<span>  Message: </span>" . " " . $row['Message']. "<br/>";
    echo "<span>  Posted:    </span>" . " " . $row['Date_posted']. "<br/>";
    echo "<a href=\"uppgift1.php?action=delete&id=" . $row['id'] . "\" >Delete!</a>";
    echo "<hr/>";
}


 */

include("classes/comments.php");
include("views/commentForm.php");

/* $Comments = new blogcomments($dbh);
$Comments->fetchAll();

    foreach( $Comments->getComments() as $comment ) {
        echo "<hr />";
        echo "<h3>inlägg:</h3>";
      
        echo $comment ['comment']. "<br />";
        echo "<br />";
        echo $comment ['date_posted'] . "<br />";
        echo "<a href=\"handlecomments.php?action=delete&id=" . $comment['id'] ."\">Delete!</a>";


    } */

    $Posts = new blogposts($dbh);
    $Posts->fetchAll();
    
    foreach($Posts->getPosts() as $post){
  
    echo "<span>  Namn: </span>" . " " . $post['userID']. "<br/>";
    echo "<span>  Title: </span>" . " " . $post['Title']. "<br/>"; 
    echo "<span>  Description:    </span>" . " " . $post['Description']. "<br/>";
    echo "<span>  Content:    </span>" . " " . $post['blog_content']. "<br/>";
    echo "<span>  Date:    </span>" . " " . $post['date_posted']. "<br/>";
    echo "<span>  picture:    </span>" . " " . $post['Pictures']. "<br/>";
    echo "<span>  Category:    </span>" . " " . $post['Category']. "<br/>";
    
    echo "<hr/>";
    
    

    }

    $Comments = new blogcomments($dbh);
    $Comments->fetchAll();
    
    foreach($Comments->getComments() as $comment){
  
    echo "<span>  Namn: </span>" . " " . $comment['userID']. "<br/>";
    echo "<span> Comment: </span>" . " " . $comment['Comment']. "<br/>"; 
    echo "<span>  Date:    </span>" . " " . $comment['date_posted']. "<br/>";
 
    echo "<hr/>";
    
    

    }

?>
<body>
</body>
</html>