<?php 
class connection{
// Database connection details
public $host = "localhost";
public $dbname = "reviews_project";
public $username = "root";
public $password = "";

public function __construct() {
  try {
  $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected to the database successfully!";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}


  // Prepare and execute a SELECT query
  // $stmt = $pdo->prepare("SELECT * FROM users");
  // $stmt->execute();

  // // Fetch the results
  // $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>