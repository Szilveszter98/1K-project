<?php 

include("database_connection.php");
session_start();

if(isset($_GET['action']) && $_GET['action'] == "deletecomment"){
    
    
    $postID = $_GET['id'];
    $comment_query = "DELETE FROM comments WHERE blog_postsID=" . $_GET['id'];  
    $exequte_comment =  $dbh->exec($comment_query);
    
    header("location:../blog.php");
     


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
echo "your comment is posted!";
print_r($blog_postsID);

}
}

?>