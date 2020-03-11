<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
<div class="headerWrapper">

<div class="headerText">
    <h1 class="mainText"> BLOG'S ONLINE</h1>
    <h2 class="midText">Please log in or register to see the blog's content</h2>
</div>

</div>


<div class="loginForms">
<div class="loginFormWrapper">
      
<b> 
<a class="loginForm" href="views/loginForm.php"> Log in </a> </b>
</div>
<div class="signupFormWrapper">
<b>
<a class="signupForm" href="views/signupForm.php"> Register new user</a> 
</b>
</div>
</div>

</div>

</body>
</html>

<?php 
if (isset($_GET['err']) && $_GET['err'] == true){
    echo "error";
}



?>
