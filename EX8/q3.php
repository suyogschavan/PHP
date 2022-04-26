 <?php 

class book{
    public function __construct() {
        $this-> author = "Dennis Kincaid";
        $this-> title = "Shivaji: The Grand Rebel";
        $this-> permission = "Don't Know";
    }
}

class book_info extends book{
    
    public function show(){
        
        echo "Author of the Book : <b>{$this->author}</b>";
        echo "<br>Title of the Book :<b> {$this->title}</b>";
        echo "<br>Permission of the Book : <b> {$this->permission}</b>";
        
    }
}

$obj = new book_info;
$obj->show();
?>
