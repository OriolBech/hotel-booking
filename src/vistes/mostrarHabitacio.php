<html>
  <head>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/room.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Hotel Cendrassos - Habitació <?php echo $habitacioActual['nom']; ?></title>
  </head>
  <body>
    <header>
      <?php include("../src/vistes/nav.php") ?>
    </header>
    <container>
      <div class="container-box">
      <h1>Habitació <?php echo $habitacioActual['nom']; ?></h1>
        <!-- Images used to open the lightbox -->
        <div class="row">
          <div class="column">
            <img src="img/habitacions/<?php echo "{$habitacioActual['id']}"?>/1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
          </div>
          <div class="column">
            <img src="img/habitacions/<?php echo "{$habitacioActual['id']}"?>/2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
          </div>
          <div class="column">
            <img src="img/habitacions/<?php echo "{$habitacioActual['id']}"?>/3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
          </div>
          <div class="column">
            <img src="img/habitacions/<?php echo "{$habitacioActual['id']}"?>/4.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
          </div>
        </div>
        <div class="click-room">
          Clica a la foto per veure més...
</div>

        <!-- The Modal/Lightbox -->
        <div id="myModal" class="modal">
          <span class="close cursor" onclick="closeModal()">&times;</span>
          <div class="modal-content">

            <div class="mySlides">
              <div class="numbertext">1 / 4</div>
              <img class="demo" src="img/habitacions/<?php echo "{$habitacioActual['id']}"?>/1.jpg"  onclick="currentSlide(1)">
            </div>

            <div class="mySlides">
              <div class="numbertext">2 / 4</div>
              <img class="demo" src="img/habitacions/<?php echo "{$habitacioActual['id']}"?>/2.jpg"  onclick="currentSlide(2)">
            </div>

            <div class="mySlides">
              <div class="numbertext">3 / 4</div>
              <img class="demo" src="img/habitacions/<?php echo "{$habitacioActual['id']}"?>/3.jpg"  onclick="currentSlide(3)">
            </div>

            <div class="mySlides">
              <div class="numbertext">4 / 4</div>
              <img class="demo" src="img/habitacions/<?php echo "{$habitacioActual['id']}"?>/4.jpg"  onclick="currentSlide(4)">
            </div>

            <!-- Next/previous controls -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Caption text -->
            <div class="caption-container">
              <p id="caption"></p>
            </div>

            <!-- Thumbnail image controls -->
            <div class="column">
            <img class="demo" src="img/habitacions/<?php echo "{$habitacioActual['id']}"?>/1.jpg"  onclick="currentSlide(1)">
            </div>

            <div class="column">
            <img class="demo" src="img/habitacions/<?php echo "{$habitacioActual['id']}"?>/2.jpg"  onclick="currentSlide(2)">
            </div>

            <div class="column">
              <img class="demo" src="img/habitacions/<?php echo "{$habitacioActual['id']}"?>/3.jpg"  onclick="currentSlide(3)">
            </div>

            <div class="column">
              <img class="demo" src="img/habitacions/<?php echo "{$habitacioActual['id']}"?>/4.jpg"  onclick="currentSlide(4)">
            </div>
          </div>
        </div>
      <div class="container-room-one">
        <div class="container-room-info-book">
          <div class="container-room-info">
          <p><?php echo $habitacioActual['descripcio']; ?></p>
          </div>
        </div>
      </div>
      <div class="container-room-two">
      <h1>Serveis</h1>
        <div class="container-room-services">
          <div class="container-room-services-col">
            <ul>
                <?php echo $habitacioActual['serveis'];  ?>
            </ul>
          </div>
          
          
        </div>    
      </div>
    </div>
    </container>
    <footer>
      <?php include("../src/vistes/footer.php") ?>
    </footer> 
    <script>
      // Open the Modal
      function openModal() {
        document.getElementById("myModal").style.display = "block";
      }

      // Close the Modal
      function closeModal() {
        document.getElementById("myModal").style.display = "none";
      }

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