<?php 

include("database_connection.php");

$comment = $_POST['comment'];
    
$comment = ( !empty($_POST['comment']) ? $_POST['comment'] : "");


$comment = htmlspecialchars($comment);


$errors = false;
$errorcomments ="";

if ( empty($comment) ) {
    $errorcomments .= "Du måste skriva ett meddelande! <br />";
    $errors = true;
} 



if ($errors==true) {
    echo $errorcomments;
    echo '<a href="../blog.php">Gå tillbaka</a>';
    die;
}



$query = "INSERT INTO comments (Comment) VALUES('$comment');";
$sth = $dbh->prepare($query);
//$sth->bindParam(':userID', $name);
$sth->bindParam(':comment', $comment);

$return = $sth->execute();

if(!$return) {
    print_r($dbh->errorInfo());
} else {
    header("location:blog.php");
}

print_r($return);


?>