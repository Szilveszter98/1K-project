<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<center>
<h1 class="textToWritePost">
Blog
<form method="POST" action="../includes/handleblog.php" >
Title:<input type="text" name="title"required><br/>
Description: <input type="text" name="description" required><br />
<textarea name="blog_content" rows="20" cols="100"></textarea><br />
Picture: <input class="submitWritePostFile" type="file" name="pictures" ><br />
Category: <input type="text" name="category" required><br />
<h1><a href='blog.php'>Tillbaka</a></h1>
<br/>
<input class="submitWritePost" type="submit" name="submit" value="Send" /></h1>
<hr>
</form></center>
</body>
</html>

<?php 
?>