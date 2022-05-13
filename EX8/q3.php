 <?php 

class Book{

    public $author, $title, $publisher;

    function __construct($a, $t, $p) {
        $this -> author = $a;
        $this -> title = $t;
        $this -> publisher = $p;
        
    }
}

class book_info extends Book{

    public $price, $Stock_available;

    function __construct($a, $t, $p, $amt, $s){
        $this -> author = $a;
        $this -> title = $t;
        $this -> publisher = $p;
        $this -> price = $amt;
        $this -> Stock_available = $s;

    }

    public function show(){
        echo "<b>Book Details: </b><br>";
        echo "<br>Title: ".$this->title;
        echo "<br>Author: ".$this->author;
        echo "<br>Publisher: ".$this->publisher;
        echo "<br>Price: ".$this->price." Rupees.";
        echo "<br>Stock Available: ".$this->Stock_available." books <br><br>";
    }

}

$BookInfo1 = new book_info("Dennis Kincaid", "SHIVAJI: The Grand Rebel", "Rupa Publications, India", 263, 500);
$BookInfo2 = new book_info("Jocab Abbott", "Alexander the Great", "Fingerprint! Publishing", 109, 32);
$BookInfo3 = new book_info("Justin Lnager", "The Power of Passion", "Garry Allen Pty Ltd", 1500, 5);
$BookInfo1->show();
$BookInfo2->show();
$BookInfo3->show();
?>
