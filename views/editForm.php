
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
//Getting ID to which blog we want to change
$blog_postsID = (!empty($_GET['ID']) ? $_GET['ID'] : "");
?>

<!-- Inputs to edit blogs -->
<br />
<b>Uppdatera inlägg #<?php echo $blog_postsID; ?>:</b><br />
<center>
<h1 class="textToWritePost">
<form method="POST" action="../includes/editpost.php?action=update&id=<?php echo $_GET['id'];?>" enctype="multipart/form-data">
Title:<input type="text" name="title"required><br/>
Description: <input type="text" name="description" required><br />
<textarea name="blog_content" rows="20" cols="100" required></textarea><br />
Picture: <input class="submitWritePostFile" type="file" name="pictures" ><br />
<input type="hidden" name="blog_postsID" value="<?php echo $_GET['ID'];?>">
Category: <input type="text" name="category" required><br />
<h1><a href='blog.php'>Tillbaka</a></h1>
<br/>
<input class="submitWritePost" type="submit" name="submit" value="submit"></h1>
<hr>
</form></center>

    
</body>
</html>


