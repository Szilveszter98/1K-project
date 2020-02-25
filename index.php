<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="mainText">Welcome!</h1> </br>
    <h1 class="middleText">Please log in or register to see the blog's content</h1>

<?php 
if (isset($_GET['err']) && $_GET['err'] == true){
    echo "error";
}



?>
<center><a href="views/loginForm.php"> Log in </a> <hr>
<a href="views/signupForm.php"> Register new user</a> </center>
    
</body>
</html>