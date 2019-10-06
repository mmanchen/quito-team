<!DOCTYPE html>

<html lang="en">
   <head>
      <meta charset="utf-8">
      <title> Home | Assignment 4: Odd Student Out</title>
	  <link rel="stylesheet" type="text/css" href="css/styles.css">
	  <script src="js/menu-highlighter.js"></script>
   </head>

   <body>
   <div class="wrap">
  <div id="arrow-left" class="arrow"></div>
  <div id="slider">
    <div class="slide slide1">
      <div class="slide-content">
      <?php include "inc/nav.php"; ?>
        <span>One Student Out</span>
      </div>
    </div>
    <div class="slide slide2">
      <div class="slide-content">
        <span>Image Two</span>
      </div>
    </div>
    <div class="slide slide3">
      <div class="slide-content">
        <span>Image Three</span>
      </div>
    </div>
  </div>
  <div id="arrow-right" class="arrow"></div>
</div>
      <header>
         <a href="index.php">
         <img href="index.php" src="images/computer.png" alt="computer">
         </a>
      </header>

      <main>
         
         <h1>Odd Student Out: Two DMS, One CS</h1>
         <h2>We have two DMS majors in Kat and Jennifer. We have one CS major in Dewey. What makes them different?</h2>
         <p>The University of Rochester has both majors. Our DMS major focuses on an interdisciplinary approach to the liberal arts, a tradition of expertise in imagining and entrepreneurship, and a University-wide commitment to supporting digital technology and the arts. Our CS major focuses on giving students a solid and rigorous background in computer science principles including the requisite mathematical foundations and to expose students to the problems and solution techniques used in the various areas of the discipline.</p>

         <p>Kat believes her major is important as the "world becomes more digitized and driven by technology." Jennifer finds her major fascinating because it is the "composition of turning the ideas that she has in her head into digital pieces." Dewey thinks his major allows people to "work holistically as humans to advance in technology." Learn more about them by clicking on their names.</p>

         <!--Citation: Rochester DMS Program: https://www.sas.rochester.edu/dms/undergraduate/index.html
         Citation: Rochester CS Program: https://www.cs.rochester.edu/undergraduate/index.html-->
      </main>

      <footer>CSC 174: Advanced Front-end Web Design and Development</footer>
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