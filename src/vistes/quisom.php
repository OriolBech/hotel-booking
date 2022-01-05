<html>
  <head>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/quisom.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Hotel Cendrassos - Qui som</title>
  </head>
  <body>
    <header>
      <?php include("../src/vistes/nav.php") ?>
    </header>
    <container>
    <div class="container-one">
      <div class="profile-quisom">
        <div class="profile-img">
          <img src="img/quisom/oriol.svg">
        </div>
        <div class="profile-info">
          <h1>Oriol Bech</h1>
          <p>Estudiant de 2n DAW.</p>
          <h2>Contacte:</h2>
          <ul>
            <li><img src="img/socialmedia/github.svg"> <a href="https://github.com/OriolBech" target="blank">Github</a></li>
            <li><img src="img/socialmedia/linkedin.svg"> <a href="https://www.linkedin.com/in/oriol-bech-abad-131b9a1b5/" target="blank">Linkedin</a></li>
            <li><img src="img/socialmedia/twitter.svg"> <a href="https://twitter.com/oriol_bech" target="blank">Twitter</a></li>
          </ul>
        </div>
      </div>
      <div class="profile-quisom">
        <div class="profile-img">
          <img src="img/quisom/adrian.svg">
        </div>
        <div class="profile-info">
          <h1>Adrián Pons</h1>
          <p>Estudiant de 2n DAW.</p>
          <h2>Contacte:</h2>
          <ul>
            <li><img src="img/socialmedia/github.svg"> <a href="https://github.com/sleyvenn" target="blank">Github</a></li>
            <li><img src="img/socialmedia/linkedin.svg"> <a href="https://www.linkedin.com/in/adri%C3%A1n-pons-luengo-7b05b6200/" target="blank">Linkedin</a></li>
            <li><img src="img/socialmedia/twitter.svg"> <a href="https://twitter.com/sleyvenn" target="blank">Twitter</a></li>
          </ul>
        </div>
      </div>
    </div>
    </container>
    <footer>
      <?php include("../src/vistes/footer.php") ?>
    </footer>
    
    <script src="js/slider.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script>
      $(function () {
        var dateFormat = "dd/mm/yy",
          from = $("#entrada")
            .datepicker({
              defaultDate: "+1w",
              changeMonth: true,
              numberOfMonths: 1,
            })
            .on("change", function () {
              to.datepicker("option", "minDate", getDate(this));
            }),
          to = $("#sortida")
            .datepicker({
              defaultDate: "+1w",
              changeMonth: true,
              numberOfMonths: 2,
            })
            .on("change", function () {
              from.datepicker("option", "maxDate", getDate(this));
            });

        function getDate(element) {
          var date;
          try {
            date = $.datepicker.parseDate(dateFormat, element.value);
          } catch (error) {
            date = null;
          }

          return date;
        }
        
      });

    </script>
  </body>
</html>