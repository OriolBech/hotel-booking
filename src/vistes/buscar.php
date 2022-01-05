<html>
  <head>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/buscar.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Hotel Cendrassos - Cercar</title>
  </head>
  <body>
    <header>
      <?php include("../src/vistes/nav.php") ?>  
    </header>
    <container>
    <div class="info-reserva">
        <div class="info-reserva-fields"><b>Data d'entrada:</b> <?=$data_entrada?></div> 
        <div class="info-reserva-fields"><b>Data de sortida:</b> <?=$data_sortida?></div>
        <div class="info-reserva-fields"><b>Ocupants:</b> <?=$ocupants?></div>
    </div>
    <?php
      if(empty($allHabitacions)) {
        echo "<h3>No hi ha cap habitació desponible en les dates seleccionades</h3>";
      } else {
        foreach($allHabitacions as $row){
          echo "<div class='search-result'>
                    <div class='search-img'>
                      <img src='img/habitacions/{$row['id']}/1.jpg'>
                    </div>
                    <div class='search-box'>
                      <div class='search-info'>
                        <h1><a href='./index.php?r=mostrarHabitacio&habitacio={$row['id']}' target='blank'>Habitació {$row['nom']}</a></h1>
                        <p>{$row['descripcio']}..</p>
                      </div>
                      <a href='./index.php?r=validarConfirmacio&dataentrada={$data_entrada}&datasortida={$data_sortida}&ocupants={$ocupants}&habitacio={$row['id']}'>
                        <div class='search-button'>
                          <p>Reservar per {$row['preu']} €/nit<p>
                        </div>
                        </a>
                        
                    </div>    
                </div> ";
            }
      }
        ?>
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