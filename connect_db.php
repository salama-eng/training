<?php 
class connection{
// Database connection details
public $host = "localhost";
public $dbname = "reviews_project";
public $username = "root";
public $password = "";
public $pdo = "";

public function __construct() {
  try {
  $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
  $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}


// this function is used to to show one product details
function product($id = 1)
{
  $id = 1; 
  $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = :id");
  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
  $stmt->execute();

  $products = $stmt->fetch(PDO::FETCH_ASSOC);
  if ($products) {
    return $products;
  } else {
      return [];
  }
}

// this function is used to to show product comments and rates
function comments($product_id = 1)
{
  $id = 1; 
  $stmt = $this->pdo->prepare("SELECT * FROM reviews WHERE product_id = :product_id");
  $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
  $stmt->execute();
  // Fetch a single row
  $comments = $stmt->fetchALl(PDO::FETCH_ASSOC);

  // Display the user data
  if ($comments) {
    return $comments;
  } else {
      return [];
  }

}

function saveReview($product_id)
{
  print_r('sssssssssssss');
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $commit = $_POST['review'];

    try {
        $stmt = $this->pdo->prepare("INSERT INTO reviews (product_id, commit) VALUES (:product_id, :review)");
        $stmt->bindParam(':commit', $commit, PDO::PARAM_STR);
        $stmt->bindParam(':product_id', $product_id, PDO::PARAM_STR);
        $stmt->execute();
        echo "Review saved successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
}
}

?>