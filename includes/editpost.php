<?php
    include("database_connection.php");
    $a = "";
    $blog_postsID = (!empty($_GET['ID']) ? $_GET['ID'] : "");
    if(!empty($_GET['ID'])) {
        $blog_postID = $_GET['ID'];
    }
    if(!empty($_GET['action'])) {
        $a = $_GET['action']; 
    }

    if($a == "update") {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        echo "Updated";
    }
$query="UPDATE * FROM blog_posts WHERE ID=:id";
$return = $dbh->exec($query);
if(!$return){
    print_r($dbh->errorInfo());
}
echo "<a href='blog.php'>Back to blogs</a>";
?>
<br />
<b>Uppdatera inlägg #<?php echo $post_ID; ?>:</b><br />
<form action="editpost.php?action=update" method="POST">
<input type="text" name="title" placeholder="Titeln här..." /><br />
<textarea name="textContent" rows="10" cols="50">Text content här...</textarea><br />
<input type="hidden" name="blog_postsID" value="<?php echo $post['ID'];?>">
<input type="submit" />

</form>