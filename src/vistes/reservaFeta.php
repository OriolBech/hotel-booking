<html>
  <head>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/reservaFeta.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Hotel Cendrassos - Confirmació de reserva</title>
  </head>
  <body>
    <header>
      <?php include("../src/vistes/nav.php") ?>
    </header>
    <container>
      <div class="info-reserva">
        <h1>Reserva confirmada</h1>
        <p>La reserva s'ha realitzat amb éxit.</p>
        <p>Pots descarregar el teu comprovant pdf a l'àrea client.</p>
        <span id="return"><a href='./'>Tornar al inici</a></span>
      </div> 
    </container>
    <footer>
      <?php include("../src/vistes/footer.php") ?>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="js/generateBono.js"></script>
  </body>
</html>