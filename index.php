<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Assignment 04 | Odd Student Out </title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body class="z-pattern">
  <div class="wrap">
      <div id="arrow-left" class="arrow"></div>
        <div id="slider">
          <div class="slide slide1">
              <div class="slide-content">
            <header class="persistent">
              <div class="container">
                <section class="primary">
                  <!--<a href=""> <img src="quito.png" alt=""></a>-->
                  <a href="index.php"> <img src="images/rochester.png" alt="rochester"></a>
                </section>
                <section class="strong">
                    <h3>University of Rochester Students</h3>
                </section>
              </div> <!--.container-->
            </header>

            <main>
              <div class="big-text"> <!--protect it from the flex property-->
                <h1>Odd Student Out</h1>
                <h2>DMS & CS</h2>
              </div>
            </main>

            <footer class="persistent">
              <div class="container">
                <section class="weak">
                  Two DMS Students. One CS Student.
                </section>
                <section class="terminal">
                  <nav class= "main-menu">
                      <ul>
                        <li>
                          <a href="info.php"> Learn More... </a>
                        </li>
                      </ul>
                    </nav>
                </section>
              </div> <!--.container-->
            </footer>
          </div> <!--slide-content-->
        </div><!--slide slide1-->

        <div class="slide slide2">
              <div class="slide-content">
            <header class="persistent">
              <div class="container">
                <section class="primary">
                  <a href="index.php"> <img src="images/rochester.png" alt="rochester"></a>
                </section>
                <section class="strong">
                    <h3>University of Rochester Students</h3>
                </section>
              </div> <!--.container-->
            </header>

            <div class="section2">
              <div class="big-text"> <!--protect it from the flex property-->
                <h1>Odd Student Out</h1>
                <h2>DMS & CS</h2>
              </div>
            </main>

            <footer class="persistent">
              <div class="container">
                <section class="weak">
                  Two DMS Students. One CS Student.
                </section>
                <section class="terminal">
                  <nav class= "main-menu">
                      <ul>
                        <li>
                          <a href="info.php"> Learn More... </a>
                        </li>
                      </ul>
                    </nav>
                </section>
              </div> <!--.container-->
            </footer>
          </div> <!--slide-content-->
        </div><!--slide slide2-->

        <div class="slide slide3">
              <div class="slide-content">
            <header class="persistent">
              <div class="container">
                <section class="primary">
                  <a href="index.php"> <img src="images/rochester.png" alt="rochester"></a>
                </section>
                <section class="strong">
                    <h3>University of Rochester Students</h3>
                </section>
              </div> <!--.container-->
            </header>

            <div class="section-2">
              <div class="big-text"> <!--protect it from the flex property-->
                <h1>Odd Student Out</h1>
                <h2>DMS & CS</h2>
              </div>
            </div>

            <footer class="persistent">
              <div class="container">
                <section class="weak">
                  Two DMS Students. One CS Student.
                </section>
                <section class="terminal">
                  <nav class= "main-menu">
                      <ul>
                        <li>
                          <a href="info.php"> Learn More... </a>
                        </li>
                      </ul>
                    </nav>
                </section>
              </div> <!--.container-->
            </footer>
          </div> <!--slide-content-->
        </div><!--slide slide1-->
      </div><!--slider-->
      <div id="arrow-right" class="arrow"></div>
    </div><!--wrap-->

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
