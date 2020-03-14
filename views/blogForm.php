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

<h1 class="mainText"> MILLHOUSE BLOG'S </h1>
<h3 class="midText"> Start writing your blog! </h3>

<div class="writeBlogForm">
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
<br />
<input class="submitWritePost" type="submit" name="submit" value="submit" />
<br />
<br />
<div class="blogformLink">
<a href='../blog.php'>Tillbaka</a>
</div>
</form> </div></center>

</div>
</body>
</html>

<?php 
?>