<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<div class="containerPost">      
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


    
    echo "<div class='blogPostedDiv'>";
     echo "<center>";
    echo "<span>  Namn: </span>" . " " . $post['userID']. "<br/>";
    echo "<span class='postedTitle'>" . " " . $post['Title']. "</br></span><br/>";
    echo "<span>  Description: </span>" . " " . $post['Description']. "<br/>";
    echo "<span class='blogContent'>" . " " . $post['blog_content']. "</span><br/>";
    echo '<img src=" uploads/'. $post['Pictures'].'" alt="post image"/><br />';
    echo "</center>";
echo "<div id='categoryPostedDiv'>";
echo "<span> Category: </span>" . " " . $post['Category']. "<br/>";
    
    echo "<span>  Posted:    </span>" . " " . $post['date_posted']. "<br/>";
    
    echo "<br/>";

    
    if(isset($_SESSION['Role']) && $_SESSION['Role'] == 'Admin'){
        
        echo "<a class='deleteBtn' href='includes/handleblog.php?action=delete&id=" . $post['ID'] . "'>Delete</a></br>";
        echo "<a class='updateBtn' href='views/editForm.php?action=update&id=" . $post['ID'] . "'>Update</a>";





echo "</div>";
   
    
        
    } 
  /*  // echo "<input type='hidden' name='blog_postsID' value='<?php echo  $post['ID'];?>'>";
   // echo "<a href=\"uppgift1.php?action=delete&id=" . $post['id'] . "\" >Delete!</a>";
    echo "<hr/>"; */



    echo "</div>";

    echo "<div class='commentsPostedDiv'>";

    echo "<p> Write a comment</p>";
    include("views/commentForm.php");

    echo "<p>Comments</p>";
   $comment_query = "SELECT * FROM comments join user on comments.userID = user.ID WHERE blog_postsID=:blog_postsID ";
    $id = $_GET['id'];

    $sth = $dbh->prepare($comment_query);
    $sth->bindParam(':blog_postsID', $id);
    
    
    $return = $sth->execute(); 


   


while($comment= $sth->fetch()){

    echo"<div class='postedCommentsDiv'>";
    echo "<span class>  Namn: </span>" . " " . $comment['firstName']. " " . $comment['lastName']."<br/>";
    echo "<span> Comment: </span>" . " " . $comment['Comment']. "<br/>"; 
    echo "<span class='commentDate'> " . " " . $comment['date_posted']. "<br/> </span>";
    if(isset($_SESSION['Role']) && $_SESSION['Role'] == 'Admin'){
        
        echo "<a class='deleteComment' href='includes/handlecomments.php?action=deletecomment&id=" . $comment['ID'] . "'>Delete Comment</a></br>";
        
    }
    echo "<hr/>";
   
    } 

    echo "</div>";
    echo "</div>";

      
    echo "<h1><a href='blog.php'>Back to the blogs!</a></h1>";
    


?>

</div>    
</body>
</html>