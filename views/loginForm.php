
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">




<center>
<div class="headerWrapperSignIn">    
<h3 class="mainTextsignIn">Please enter your username and password<h3> 
</div>
<div class="loginPageForms">
<div class="usernameForm">    
<form method="POST" action="../includes/login.php">
Username:<br>
<input type="text" name="username" required><br/>
</div>

<div class="passwordForm">
Password:<br>
<input type="password" name="password" required><br />
</div>


<input class="submit" type="submit" value="Log in" />

<p class="account">Dont have an account?</p>
<b>
<a class="signUp" href="signupForm.php">Sign up</a>
</b>


</form>
</center>

</div>

</div>
    
</body>
</html>

