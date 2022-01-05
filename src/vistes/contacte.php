<html>
  <head>
  <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/contacte.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Hotel Cendrassos - Contacte</title>
  </head>
  <body>
    <header>
      <?php include("../src/vistes/nav.php") ?>
    </header>
    <container>
     <div class="container-contact">
        <div class="phone">
          <h1>Truca'ns!</h1>
          <p>
            Els nostres representants estan disponibles durant tot el dia per a brindar-te informació sobre nosaltres i sobre l'hotel Cendrassos a tot el món, 
            així com per a respondre a les teves preguntes, realitzar reserves i atendre les teves sol·licituds. En aquesta pàgina trobaràs la informació de contacte. 
            Esperem la teva crida. Per a gestionar la teva sol·licitud o pregunta correctament, 
            l'Hotel Cendrassos processarà les teves dades personals en conseqüència. 
          </p>
          <h2>Telèfons de contacte:</h2>
            <ul>
              <li>Atenció al client: +34 972 000 000</li>
              <li>Recepció: +34 972 000 000</li>
              <li>Reserves: +34 972 000 000</li>
              <li>Servei tècnic web: +34 972 000 000</li>
            </ul>
        </div>
        <div class="address">
          <h1>Contacta'ns!</h1>
          info@hotelcendrassos.net<br>
          Carrer Pelai Martínez 1,<br> 
          17600 Figueres, <br>
          Girona, España
        </div>
      </div>
      <div class="container-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2952.225568806812!2d2.9624965152091383!3d42.27370804854348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ba8dd91251e3ff%3A0xe8dfb11cd9cdef78!2sInstitut%20Cendrassos!5e0!3m2!1ses!2ses!4v1636984720958!5m2!1ses!2ses" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>  
    </container>
    <footer>
      <?php include("../src/vistes/footer.php") ?>
    </footer>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaDnX3jjJ0BFXAHygHCP_aqEqFtVI1Tik&callback=initMap&libraries=&v=weekly"
      async
    ></script>
    <script src="js/map.js"></script>
  </body>
</html>