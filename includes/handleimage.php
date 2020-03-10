
<?php 
include("database_connections.php");

session_start();

//PROV - IMG
 
 if (isset($_POST['submit'])) {
    $pictures = $_FILES['pictures']['name'];


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
                header("location: ../index.php");
                $query_post = "INSERT INTO blog_posts(Title, Description, blog_content, Pictures, Category, date_posted, userID) VALUES ($title', '$description', '$blog_content', '$fileNewName', '$category', '$date_posted', '$userID');";
                $return = $dbh->exec($query_post);
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
?>