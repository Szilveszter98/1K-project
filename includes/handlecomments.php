<?php 

include("database_connection.php");
session_start();


$comment = ( !empty($_POST['comment']) ? $_POST['comment'] : "");
$comment = htmlspecialchars($comment);

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


$query = "INSERT INTO comments (Comment, userID) VALUES('$comment', $userID);";
$return = $dbh->exec($query);
if(!$return){
    print_r($dbh->errorInfo());
}
echo "your comment is posted!";

}


?>