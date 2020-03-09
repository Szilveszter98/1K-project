<?php

include("includes/database_connection.php");
session_start();
class blogcomments{
    private $databaseHandler;
    private $order = "desc";
    private $comments;

    public function __construct ($dbh) {
        $this->databaseHandler = $dbh;
    }

    public function fetchAll() {
        $POSTID=$_SESSION['blog_postsID'];
        $query = "SELECT * FROM comments JOIN blog_posts ON comments.blog_postsID = blog_posts.ID WHERE blog_postsID = $POSTID ";

        $return_array = $this->databaseHandler->query($query);
        $return_array = $return_array->fetchAll(PDO::FETCH_ASSOC);

        $this->comments = $return_array;
    }

    public function getComments() {
        return $this->comments;
    }

}


?>