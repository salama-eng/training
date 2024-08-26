<?php  require_once("connect_db.php");
  echo "Connection failed: ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>reviews</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  @import url('https://fonts.googleapis.com/css2?family=Almarai:wght@300&family=Courgette&family=Great+Vibes&family=Rubik:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Almarai:wght@300&family=Courgette&family=Great+Vibes&family=Rubik:wght@300&display=swap');
</style>
</head>
<body>
 
<div class="topnav" id="myTopnav">
  <a href="index.html" class="active">Home</a>
  
  <a href="booking.html">page1</a>
  <a href="contact.html">page2</a>
  <a href="about.html">page3</a>
  <a class="login-btn" href="login.html">
  <i class="fa fa-sign-in"></i>Login</a>
</div>

<section class="container">
  <img src="images/produc.png" alt="" width="400">
   <div class="card">
   <em>$63.00</em>
   <?php  require_once("connect_db.php");
  echo "Connection failed: ";
?>
   <br>
    <h1>Body Hero Dry Touch Oil Mist</h1>
    <p>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
    </p>
    <br>
    <p>Niacinamide and Vitamin C are two anti-aging superstars but not usually formulated together because of their different pH levels.</p>
   <button class="btn">Order Now</button> 
  </div>
</section>

<footer>
  @copyright 2024
</footer>
</body>
<style>
 .card{
  text-align: left;
 display: flex;
 flex-direction: column;
 align-items: flex-start;
 justify-content: center;
 padding: 1em;
 width: 40%;
 font-size: 1.3em;
 height: 85vh;
 }
.btn{
  width: 100%;
  margin: 2em 0em;
}
 em{
  color: var(--pink) ;
  font-weight: bolder;
  font-size: 1.2em;
 }
 .card p{
  text-align: left;
 }
 .checked{
  color: rgb(255, 128, 10);
 }
</style>
</html>
<!-- https://beautycenterr.com/ -->
<!-- https://numberonebeautycenter.com/bath-body-care/ -->