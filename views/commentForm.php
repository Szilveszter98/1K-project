 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="../css/style.css">
 </head>
 <body>
     <!-- inputs to create a comment -->
     <form method="POST" action="includes/handlecomments.php">
     <input type="hidden" name="blog_postsID" value="<?php echo $post['ID'];?>">
    <textarea name="comment" cols="60" rows="10" placeholder="Tap to comment"></textarea> <br />
    <br />
    <input class="sendCommentBtn" type="submit" value="send!" />
    </form>
 </body>
 </html>
    
    