<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
include("classes/Posts.php");
include("includes/database_connection.php");
include("classes/comments.php");
session_start();

$blog_postsID = (!empty($_GET['ID']) ? $_GET['ID'] : "");
$query = "SELECT * FROM blog_posts WHERE ID=:id LIMIT 1";
    $id = $_GET['id'];
    $sth = $dbh->prepare($query);
    $sth->bindParam(':id', $id);
    $return = $sth->execute();


   



    $post= $sth->fetch();



    echo "<p>";
      
    echo "<span>  Namn: </span>" . " " . $post['userID']. "<br/>";
    echo "<span>  Title: </span>" . " " . $post['Title']. "<br/>";
    echo "<span>  Description: </span>" . " " . $post['Description']. "<br/>";
    echo "<span</span>" . " " . $post['blog_content']. "<br/>";
    echo "<span></span>" . " " . $post['Pictures']. "<br/>";
    echo "<span> Category: </span>" . " " . $post['Category']. "<br/>";
    
    echo "<span>  Posted:    </span>" . " " . $post['date_posted']. "<br/>";
  

    
    if(isset($_SESSION['Role']) && $_SESSION['Role'] == 'Admin'){
        print_r($post['ID']);
        echo "<a href='includes/handleblog.php?action=delete&id=" . $post['ID'] . "'>Delete</a></br>";
        echo "<a href='includes/editpost.php?action=update&id=" . $post['ID'] . "'>Update</a>";


       



   
    
        
    } 
  /*  // echo "<input type='hidden' name='blog_postsID' value='<?php echo  $post['ID'];?>'>";
   // echo "<a href=\"uppgift1.php?action=delete&id=" . $post['id'] . "\" >Delete!</a>";
    echo "<hr/>"; */



    echo "</p>";

    echo "<h1> Write a comment</h1>";
    include("views/commentForm.php");

echo "<h1>Comments</h1>";
    $comment_query = "SELECT * FROM comments WHERE blog_postsID=:blog_postsID ";
    $id = $_GET['id'];
    $sth = $dbh->prepare($comment_query);
    $sth->bindParam(':blog_postsID', $id);
    $return = $sth->execute();


   



while($comment= $sth->fetch()){

  
    echo "<span class>  Namn: </span>" . " " . $comment['userID']. "<br/>";
    echo "<span> Comment: </span>" . " " . $comment['Comment']. "<br/>"; 
    echo "<span>  Date:    </span>" . " " . $comment['date_posted']. "<br/>";
    if(isset($_SESSION['Role']) && $_SESSION['Role'] == 'Admin'){
        echo "<a href='includes/handlecomments.php?action=deletecomment&id=" . $post['ID'] . "'>Delete Comment</a></br>";
 
    }
    echo "<hr/>";
   
    } 

      

    


?>
    
</body>
</html>