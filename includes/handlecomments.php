<?php 

include("database_connection.php");
session_start();

if(isset($_GET['action']) && $_GET['action'] == "deletecomment"){
    
    $commentsID= $_GET['id'];
    $comment_query = "DELETE FROM comments WHERE comments.ID=" . $_GET['id'];  
    $exequte_comment =  $dbh->exec($comment_query);
 
    
    echo "<h1>The comment is now deleted</h1>";
    echo "<h1><a href='../blog.php'>Back to the blogs!</a></h1>";
     


}else{
$comment = ( !empty($_POST['comment']) ? $_POST['comment'] : "");
$comment = htmlspecialchars($comment);
$blog_postsID = (!empty($_POST['blog_postsID']) ? $_POST['blog_postsID'] : "");
$userID = $_SESSION['ID'];


$errors = false;
$errorcomments ="";

if(isset($_GET['action']) && $_GET['action']){
if ( empty($comment) ) {
    $errorcomments .= "Du måste skriva ett meddelande! <br />";
    $errors = true;
} 



if ($errors==true) {
    echo $errorcomments;
    echo '<a href="../blog.php">Gå tillbaka</a>';
    die;
}

}else{


$query = "INSERT INTO comments (Comment, userID, blog_postsID) VALUES('$comment', $userID, '$blog_postsID');";
$return = $dbh->exec($query);
if(!$return){
    print_r($dbh->errorInfo());
}



echo "Your comment is posted!";
echo "<h1><a href='../post.php?id={$_POST['blog_postsID']}'>Back to the blog!</a></h1>";

 
 


}
}

?>