<?php

include("includes/database_connection.php");



class blogcomments{
    private $databaseHandler;
    private $order = "desc";
    private $comments;

    public function __construct ($dbh) {
        $this->databaseHandler = $dbh;
    }

    public function fetchAll() {
        $query = "SELECT  Comment, date_posted, userID, blog_postsID FROM comments ";

        $return_array = $this->databaseHandler->query($query);
        $return_array = $return_array->fetchAll(PDO::FETCH_ASSOC);

        $this->comments = $return_array;
    }

    public function getComments() {
        return $this->comments;
    }

}
?>