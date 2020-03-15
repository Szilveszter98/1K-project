<?php





class blogcomments{
    private $databaseHandler;
    private $order = "desc";
    private $comments;

    public function __construct ($dbh) {
        $this->databaseHandler = $dbh;
    }

    public function fetchAll() {

        

       $query_comments = "SELECT * FROM comments WHERE blog_postsID=:blog_postsID ";

        $return_array = $this->databaseHandler->query($query_comments);
        $return_array = $return_array->fetchAll(PDO::FETCH_ASSOC);

        $this->comments = $return_array;
    }

    public function getComments() {
        return $this->comments;
    }

}
?>