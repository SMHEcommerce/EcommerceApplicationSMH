<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/11d17d7d47.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="{{ mix('css/app.css') }}">

     <!--Styles concerning navBAR -->
     <link rel="stylesheet" href="css/navbar.css">
     <link rel="stylesheet" href="css/navbarcss.css">
    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
<x-jet-banner/>
<div class="min-h-screen bg-grey-100">
@livewire('navigation-menu')

</div>
<!--transparent black div -->
<div class="transparent">
<!-- Container for the image gallery -->
<div class="container" style="margin-top: -46%; max-width: 1280px;">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="images/1.jpg"class="center" >
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="images/coral.jpg" class="center">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="images/nocilla.jpg" class="center">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="images/rani.jpg" class="center" >
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="images/4.jpg" class="center">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="images/3.jpg" class="center" >
  </div>

<!--the text above the images-->
<div class="centered">Bon Shopping !!
</div>
<!-- The form -->
<div class="centeredSEARCH">
<div class="input-group rounded">
  <input type="search" class="form-control rounded" placeholder="Rechercher.." aria-label="Search"
    aria-describedby="search-addon" />
  <span class="input-group-text border-0" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
</div>
</div>
  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)" style="color:white;">&#10094;</a>
  <a class="next" onclick="plusSlides(1)" style="color:white;">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/1.jpg"  onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/coral.jpg"  onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/nocilla.jpg"  onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/rani.jpg"  onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/4.jpg" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/3.jpg"  onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>
</div>
<script>
    var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
    </script>





</body>
</html>