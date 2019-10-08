<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title> Assignment 04 | Odd Student Out </title>
	  <link rel="stylesheet" type="text/css" href="css/styles.css">
   </head>


<main>
	
	<div class="wrap">
  <div id="arrow-left" class="arrow"></div>

  <div id="slider">
    <div class="slide slide1">
      <div class="slide-content">
        <body class= "z-pattern">
        <span>Odd Student Out</span>
        <h1>DMS & CS</h1>
        <header class = "persistent">
  <div class="container">
  <section class="primary">
    <a href=""> <img src="quito.png" alt=""></a>
  </section>
  <section class="strong">
    <a href=""> <img src="" alt=""></a>
    <a>University of Rochester students
    </a>
  </section>
</div>
</header>
        <footer class="persistent">
	<div class="container">
	<section class="weak">
		<nav class= "main-menu">
      <ul>
        <li>
          <a href="info.php"> Next Page </a>
        </li>
      </ul>
    </nav>
	</section>
	<section class="terminal">Kat and Jennifer are DMS Students. Dewey is a CS student.
	</section>
</div>
</footer>
      </div>
    </div>


    <div class="slide slide2">
            <div class="slide-content">
        <body class= "z-pattern">
        <span>Odd Student Out</span>
        <h1>DMS & CS</h1>
        <header class = "persistent">
  <div class="container">
  <section class="primary">
    <a href=""> <img src="quito.png" alt=""></a>
  </section>
  <section class="strong">
    <a href=""> <img src="" alt=""></a>
    <a>University of Rochester students
    </a>
  </section>
</div>
</header>
        <footer class="persistent">
  <div class="container">
  <section class="weak">
    <nav class= "main-menu">
      <ul>
        <li>
          <a href="info.php"> Next Page </a>
        </li>
      </ul>
    </nav>
  </section>
  <section class="terminal">Kat and Jennifer are DMS Students. Dewey is a CS student.
  </section>
</div>
</footer>
      </div>
    </div>


    <div class="slide slide3">
      <div class="slide-content">
        <body class= "z-pattern">
        <span>Odd Student Out</span>
        <h1>DMS & CS</h1>
        <header class = "persistent">
  <div class="container">
  <section class="primary">
    <a href=""> <img src="quito.png" alt=""></a>
  </section>
  <section class="strong">
    <a href=""> <img src="" alt=""></a>
    <a>University of Rochester students
    </a>
  </section>
</div>
</header>
        <footer class="persistent">
  <div class="container">
  <section class="weak">
    <nav class= "main-menu">
      <ul>
        <li>
          <a href="info.php"> Next Page </a>
        </li>
      </ul>
    </nav>
  </section>
  <section class="terminal">Kat and Jennifer are DMS Students. Dewey is a CS student.
  </section>
</div>
</footer>
      </div>
    </div>
  <div id="arrow-right" class="arrow"></div>
</div>
</main>

<script>
      let sliderImages = document.querySelectorAll(".slide"),
  arrowLeft = document.querySelector("#arrow-left"),
  arrowRight = document.querySelector("#arrow-right"),
  current = 0;

// Clear all images
function reset() {
  for (let i = 0; i < sliderImages.length; i++) {
    sliderImages[i].style.display = "none";
  }
}

// Init slider
function startSlide() {
  reset();
  sliderImages[0].style.display = "block";
}

// Show prev
function slideLeft() {
  reset();
  sliderImages[current - 1].style.display = "block";
  current--;
}

// Show next
function slideRight() {
  reset();
  sliderImages[current + 1].style.display = "block";
  current++;
}

// Left arrow click
arrowLeft.addEventListener("click", function() {
  if (current === 0) {
    current = sliderImages.length;
  }
  slideLeft();
});

// Right arrow click
arrowRight.addEventListener("click", function() {
  if (current === sliderImages.length - 1) {
    current = -1;
  }
  slideRight();
});

startSlide();

      </script>
</body>
</html> 