<html>
  <head>
  <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">    
  </head>
  <body>
    <header>
      <?php include("../src/vistes/nav.php") ?>

      <div class="header-slider">

        <div class="mySlides fade">
          <img src="img/slider1.jpg">
        </div>
      
        <div class="mySlides fade">
          <img src="img/slider2.jpg" >
        </div>
      
        <div class="mySlides fade">
          <img src="img/slider3.jpg">
        </div>
    
      </div>
    
      <div class="slider-form">
        <form action="index.php" method="post">
        <input type="hidden" name="r" value="buscar">
          <div class="form-check">
            <input type="text"  id="entrada" name="data_entrada" placeholder="mm/dd/yyyy"autocomplete="off" required>
            <input type="text" id="sortida" name="data_sortida" placeholder="mm/dd/yyyy" autocomplete="off" required>
          </div>
          <div class="form-part2">
            <div class="form-persones">
              <label for="ocupants">PERSONES</label>
              <select id="persones" name="ocupants" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div class="form-search">
            <button id="cercar" type="submit" value="Cercar">Cercar</button>
            </div>
          </div>
        </form>
      </div>
    </header>   
    <container>
      <div class="container-two">
          <?php
            foreach($allHabitacions as $row){
              echo "<div class='room'>
                      <a href='./index.php?r=mostrarHabitacio&habitacio={$row['id']}'>
                        <div class='room-img'>
                            <img src='img/habitacions/{$row['id']}/1.jpg'>
                        </div>
                        <div class='room-info'>
                          <h3>
                            Habitació {$row['nom']}
                          </h3>
                          <div class='description'>
                            {$row['descripcio']}
                          </div>
                          <div class='price'>
                            {$row['preu']} € / nit
                          </div>
                          </a>
                        </div>
                      </div>";
                }
          ?>
      </div>
      <div class="container-one">
        <div class="container-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2952.225568806812!2d2.9624965152091383!3d42.27370804854348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ba8dd91251e3ff%3A0xe8dfb11cd9cdef78!2sInstitut%20Cendrassos!5e0!3m2!1ses!2ses!4v1636984720958!5m2!1ses!2ses" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="container-info">
          <h1>Hotel Cendrassos</h1>
          <p>
            Des de la seva creació el 1994, l'equip de l'Hotel Cendrassos treballa amb cura per oferir-vos una estada perfecta. 
            En el nostre compromís de cuidar fins a l'últim detall i oferir-vos un allotjament el més agradable possible, durant els darrers anys, hem renovat els nostres espais 
            i les habitacions.
          </p>
          <p>
            Com a resultat d'aquests esforços, confiem que la vostra estada sigui d'allò més agradable.
          </p>          
          
        </div>
      </div> 
    </container>
    <footer>
      <?php include("../src/vistes/footer.php") ?>
    </footer>
    
    <script src="js/slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script src="js/booking-date.js"></script>
  </body>
</html>