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

<!-- Inputs to registeration -->
<div class="container">
<center>
<h1 class="mainTextRegister"> Please register an account to view the blog's!</h1>    

<form class="registerForms" method="POST" action="../includes/signup.php">
Username:<br />
<input type="text" name="username"required>
<br />

First name:<br /> 
<input type="text" name="firstName" required>
<br />
Last name: <br />
<input type="text" name="lastName" required>
<br />

Password: <br />
<input type="password" name="password"required>
<br />
E-mail: <br />
<input type="email" name="email" required>
<br />

<b>
<input class="registerSubmit" type="submit" value="Register" /></b>
</form>

</center>

</div> 
</body>
</html>

    

