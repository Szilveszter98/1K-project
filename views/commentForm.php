 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <?php 
      
        $blog_postsID = (!empty($_GET['ID']) ? $_GET['ID'] : "");
     ?>
     <form method="POST" action="includes/handlecomments.php">
     <input type="hidden" name="blog_postsID" value="<?php echo $post['ID'];?>">
    <textarea name="comment" cols="60" rows="10" placeholder="Tap to comment"></textarea> <br />
    <br />
    <input type="submit" value="skicka!" />
    </form>
 </body>
 </html>
    
    