<?php  require_once "controller.php";
$product = (new controller())->product(1);
$comments = (new controller())->comments(1);

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
  <img src="images/<?= $product['image']?>" alt="<?= $product['image']?>" width="400">
   <div class="card">
   <em>$<?= $product['price']?></em>
   <br>
    <h1><?= $product['name']?></h1>
    <p>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
    </p>
    <br>
    <p><?= $product['details']?></p>
    <h3>comments</h3>
    <div id="review-container">
       <?php foreach($comments as $comment ){ ?>
        <p> <?=  $comment['comment']?></p>
      <?php } ?>
    </div>
  

    <textarea id="review" name="review" required></textarea>
    <button  id="send_comment" class="btn"> send Comment <span class="fa fa-comment"></span></button> 



   
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
<script>
  
  document.getElementById('send_comment').addEventListener('click',  saveReview);

 function saveReview() {

    var review = document.getElementById('review').value;
    var productId = 1; // Replace with the actual product ID

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'save_review.php?action=&product_id=' + encodeURIComponent(productId), true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // Update the page with the new review
            var reviewContainer = document.getElementById('review-container');
            reviewContainer.innerHTML += '<div class="review"><p>' + "" + '</h3><p>' + review + '</p></div>';

            // Clear the input fields
            // document.getElementById('name').value = '';
            document.getElementById('review').value = '';
        }
    };
    xhr.send('review=' + encodeURIComponent(review));
}
</script>
