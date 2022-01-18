<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Youtube</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
<style>

/* Slideshow container */
.slideshow-container {
  max-width: 504px;
  position: absolute;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover {
  background-color: #00c3e3;
  opacity: .5;
}
.next:hover {
  background-color: #ff4554;
  opacity: .5;
}


/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

</style>
</head>

<body class="bg_yt">

	<!--h1 tags | page marker-->
	<a style= "text-decoration: none;" href="https://www.youtube.com/c/tekoii?sub_confirmation=1">
	<h1 id="yt_head">Youtube</h1>
	</a>
	
	<!--Nav-->
	&#10024;
    <a id="tk_link" href="index.html">tekoii</a>
    &#9654;&#65039;
	<a id="yt_link" href="youtube.php">youtube</a>
	&#127912;
	<a id="da_link" href="deviantart.php">deviant art</a>
	&#128172;
	<a id="fb_link" href="https://www.facebook.com/tekoiiyt">facebook</a>

	<br><br>
	
	<!--Text-->
	&#9654;&#65039;
	<em><span>Subscribe to my</span></em>&nbsp;
	<a id="yt_link" href=https://www.youtube.com/c/tekoii?sub_confirmation=1>youtube</a>
	<span>. I appreciate your support!</span>
	&#10084;&#65039;

  <br><br>

<div class="slideshow-container">

<!--Stock Video Creatives-->
<div class="mySlides">
  <div class="numbertext">1 / 4</div>
    <iframe width="504" height="283.5" src="https://www.youtube.com/embed/Q4wgHE8LLOI?list=PLiPG08Bbu2DIrI3wUyohdXwML2ll94DJk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div class="text"></div>
</div>

<!--LM3-->
<div class="mySlides">
  <div class="numbertext">2 / 4</div>
    <iframe width="504" height="283.5" src="https://www.youtube.com/embed/a2vxBbVUkzM?list=PLiPG08Bbu2DI8Jup5eQ84ERyEc8lhdKro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div class="text"></div>
</div>

<!--Smash-->
<div class="mySlides">
  <div class="numbertext">3 / 4</div>
    <iframe width="504" height="283.5" src="https://www.youtube.com/embed/x0j0ge4eSCo?list=PLiPG08Bbu2DJwC2Wyv-gO7uZzdaXS42qy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div class="text"></div>
</div>

<!--RL-->
<div class="mySlides">
  <div class="numbertext">4 / 4</div>
    <iframe width="504" height="283.5" src="https://www.youtube.com/embed/2hRkO4fUWow?list=PLiPG08Bbu2DJRtnzs9aH0JwJ0Wnppaw3m" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div class="text"></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<!--functions-->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
 
}
</script>
	
</body>
</html>