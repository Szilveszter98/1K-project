<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<h1>
Blog
<form method="POST" action="includes/handleblog.php">
Title:<input type="text" name="title"required><br/>
Description: <input type="text" name="description" required></br >
<textarea name="blog_contant" rows="10" cols="100"></textarea></br >
Picture: <input type="text" name="picture" ></br >
Category: <input type="text" name="category" required></br >

<br/>
<input type="submit" value="Send" /></h1>
<hr>
</form></center>
</body>
</html>

<?php 
?>