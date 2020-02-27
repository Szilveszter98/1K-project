<?php 


include("includes/database_connection.php");






class blogposts {
    private $databaseHandler;
    private $order = "desc";
    private $posts;

    public function __construct($dbh) {
        
        $this->databaseHandler = $dbh;

    }

    public function fetchAll() {
        $query ="SELECT Title, Description, blog_content, Category, Pictures, date_posted, userID  FROM blog_posts ";

        $return_array = $this->databaseHandler->query($query);
        $return_array = $return_array->fetchAll(PDO::FETCH_ASSOC);

        $this->posts = $return_array;
    }

    public function getPosts() {
        return $this->posts;
    }


}