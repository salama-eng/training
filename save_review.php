<?php 
 require_once "connect_db.php";

class save_review extends connection{
// Database connection details
public $pdo;
public function __construct() {
 
  try {
    $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
}

public function saveReview($product_id)
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $review = $_POST['review'];
        $product_id = $_GET['product_id'];

        try {
            $stmt = $this->pdo->prepare("INSERT INTO reviews (product_id, comment) VALUES (:product_id, :comment)");
            $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
            $stmt->bindParam(':comment', $review, PDO::PARAM_STR);
            $stmt->execute();
            echo "Review saved successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

}
(new save_review())->saveReview($product_id);

?>