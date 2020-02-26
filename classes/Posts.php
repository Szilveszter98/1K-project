<?php 


include("includes/database_connection.php");


class blogposts {
    private $databaseHandler;
    private $order = "desc";

    private $posts;


    public function __construct($dbh){
        $this->databaseHandler = $dbh;

    }

    public function fetchALL(){
        $quary ="SELECT   Title, Description,	Pictures,	Category,	Date,	!!!AdminID!!!!  FROM blog_posts ORDER BY date_posted $order";

        $return_array = $this->databaseHandler->quary($quary);
        $return_array= $return_array->fetch(PDO::FETCH_ASSOC);
        $this->posts = $return_array;
    }

    public function getPosts(){
        return $this->posts;
        
    }
}

?>