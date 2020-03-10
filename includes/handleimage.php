
<?php 
include("database_connections.php");

session_start();

//PROV - IMG



 if(isset($_POST['submit'])) {
    $file = $_FILES['pictures'];
    $fileName = $FILES['pictures']['name'];
    $fileTmpName = $_FILES['pictures']['tmp_name'];
    $fileSize = $_FILES['pictures']['size'];
    $fileError = $_FILES['pictures']['error'];
    $fileType = $_FILES['pictures']['type'];
    
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 1000000){
                $fileNameNew = uniqid('', true). "." . $fileActualExt;
                $fileDestination = '../images/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $query_post = "INSERT INTO blog_posts(Title, Description, blog_content, Pictures, Category, date_posted, userID) VALUES ($title', '$description', '$blog_content', '$fileNewName', '$category', '$date_posted', '$userID');";
                $return = $dbh->exec($query_post);
                echo "Your file is uploaded!"
            } else {
                echo "Your file is too big"; 
            }


}else {
    echo " there was an errro uploading your file";
}
    } else {
        echo "you cannot upload files of this types of file";
    }


?>