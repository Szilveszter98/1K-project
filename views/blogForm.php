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
<form action="includes/handleblog.php" method="POST" >
Title:<input type="text" name="title"required><br/>
Description: <input type="text" name="description" required></br >
<textarea name="blog_content" rows="10" cols="100"></textarea></br >
Picture: <input type="file" name="pictures" ></br >
Category: <input type="text" name="category" required></br >


<br/>
<input type="submit" name="submit" value="Send" /></h1>
<hr>
</form></center>
</body>
</html>

<?php 
?>