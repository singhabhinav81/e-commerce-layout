<?php
  require_once('include/init.php');
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Online E-commerce</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
  <div class="container">
  <a href="index.php" class="navbar-brand">Online E-commerce</a>
  <ul class="nav navbar-nav">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Men<span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Shirts</a></li>
        <li><a href="#">T-Shirts</a></li>
        <li><a href="#">Jeans</a></li>
        <li><a href="#">Shoes</a></li>
        <li><a href="#">Acessories</a></li>
      </ul>
    </li>
  </ul>
  <ul class="nav navbar-nav">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Women<span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Shirts</a></li>
        <li><a href="#">T-Shirts</a></li>
        <li><a href="#">Jeans</a></li>
        <li><a href="#">Shoes</a></li>
        <li><a href="#">Acessories</a></li>
      </ul>
    </li>
  </ul>
  <ul class="nav navbar-nav">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Kids<span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Shirts</a></li>
        <li><a href="#">T-Shirts</a></li>
        <li><a href="#">Jeans</a></li>
        <li><a href="#">Shoes</a></li>
        <li><a href="#">Acessories</a></li>
      </ul>
    </li>
  </ul>
  </div>
</nav>
<!--background-image -->

<div id="background-image">
  <img class="mySlides" src="images/image0.jpg">
 <img class="mySlides" src="images/image1.jpg">
 <img class="mySlides" src="images/image2.jpg">
 <img class="mySlides" src="images/image3.jpg">
 <img class="mySlides" src="images/image4.jpg">
</div>
<div id="lorem">
<p>
  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
  Why do we use it?
  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
</p>
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length){myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
<div class="col-md-2"></div>
</div>
<!--featured products here -->
<div class="col-md-8">
  <div class="row">
    <h2 class="text-center">Featured Products</h2>
    <div class="col-md-3">
      <h4>Levis Jeans Men</h4>
      <img src="images/levis.jpg" alt="levis jeans" id="images"/>
      <p class="list-prize text-danger">List Price: <s>$24</s></p>
      <p class="price">Our Price: $19</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
    </div>

    <div class="col-md-3">
      <h4>Guess Jeans Women</h4>
      <img src="images/guess.jpg" alt="Guess Jeans" id="images"/>
      <p class="list-prize text-danger">List Price: <s>$30</s></p>
      <p class="price">Our Price: $26</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
    </div>
    <div class="col-md-3">
      <h4>Madame Top </h4>
      <img src="images/madame.jpg" alt="Madame Tops" id="images"/>
      <p class="list-prize text-danger">List Price: <s>$20</s></p>
      <p class="price">Our Price: $17</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
    </div>

    <div class="col-md-3">
      <h4>Boss Hoodie Men</h4>
      <img src="images/hoodies.jpg" alt="Boss Hugo" id="images"/>
      <p class="list-prize text-danger">List Price: <s>$22</s></p>
      <p class="price">Our Price: $18</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
    </div>
    <div class="col-md-3">
      <h4>Nike Shoes Men</h4>
      <img src="images/nike.jpg" alt="Nike Shoes" id="images"/>
      <p class="list-prize text-danger">List Price: <s>$34</s></p>
      <p class="price">Our Price: $30</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>
    </div>
    <div class="col-md-3">
      <h4>Casio Watch Men</h4>
      <img src="images/casio.jpg" alt="Casio Watch" id="images"/>
      <p class="list-prize text-danger">List Price: <s>$34</s></p>
      <p class="price">Our Price: $29</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Details</button>
    </div>

    <div class="col-md-3">
      <h4>Levis Shirt Men</h4>
      <img src="images/shirt.jpg" alt="levis Shirt" id="images"/>
      <p class="list-prize text-danger">List Price: <s>$20</s></p>
      <p class="price">Our Price: $17</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-7">Details</button>
    </div>
  </div>
  <footer class="text-center" id="footer">
     &copy; Copyright 2017-2018 E-commerce Website
  </footer>
</div>
<!-- include details -->
<?php
      include 'details-modal-LevisJeans.php';
      include 'details-modal-GuessJeans.php';
      include 'details-modal-MadameTops.php';
      include 'details-modal-BossHugo.php';
      include 'details-modal-NikeShoes.php';
      include 'details-modal-CasioWatch.php';
      include 'details-modal-LevisShirt.php';
 ?>
 <!--end of product details -->
</body>
</html>
