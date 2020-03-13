<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">  
<center>
<p class="textToWritePost">
<h1> Start writing your blog! </h1>
<form method="POST" action="../includes/handleblog.php"enctype="multipart/form-data" >
Title:<input type="text" name="title"required><br/> <br/>
Description: <input type="text" name="description" required><br /> <br/>
<textarea name="blog_content" rows="20" cols="100"></textarea><br /> <br/>
Picture: <input class="submitWritePostFile" type="file" name="pictures" ><br /> <br/>
<label for="category">Choose a category:</label>
<select id="category" name="category">
  <option value="food">food</option>
  <option value="animals">animals</option>
  <option value="everyday">everyday</option>
  <option value="buisness">buisness</option>
</select>
<h1><a href='../blog.php'>Tillbaka</a></h1>
<br/>
<input class="submitWritePost" type="submit" name="submit" value="submit" /></p>

</form></center>

</div>
</body>
</html>

<?php 
?>