<?php 
 require_once "connect_db.php";

class controller extends connection{
// Database connection details

public function __construct() {
 
}

function product($id = 1)
{
  return (new connection())->product($id);
}

function comments($product_id = 1)
{
  return (new connection())->comments($product_id );
}

}

?>