<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Hotel Cendrassos - Admin</title>
  </head>
  <body>
  
    <?php include("../src/vistes/admin/nav.php"); ?>


    <div class="row h-100">
      <div class="col bg-secondary sidebar">
        <?php include("../src/vistes/admin/sidebar.php"); ?>
      </div>
      <div class="col-10">
        <h2>Reserves</h2>
        <a href='index.php?r=formReserva' class='btn btn-primary'>Afegir</a>
        <?php
          echo "<table class='table'><th scope='col'>ID</th><th scope='col'>Ocupants</th><th scope='col'>Data Reserva</th><th scope='col'>Data Entrada</th><th scope='col'>Data Sortida</th><th scope='col'>Preu</th><th scope='col'>Num Targeta</th><th scope='col'>Usuari</th><th scope='col'>Habitacio</th></tr>";
          foreach($allReserves as $row){
              echo "<tr>";
              echo "<td scope='row'>{$row['id']}</td><td>{$row['ocupants']}</td><td>{$row['data_reserva']}</td><td>{$row['data_entrada']}</td><td>{$row['data_sortida']}</td><td>{$row['preu']}</td><td>{$row['num_targeta']}</td><td>{$row['usuari']}</td><td>{$row['habitacio']}</td>";
              echo "<td><a href='index.php?r=formReserva&amp;reserva="?><?php echo $row['id']?> <?php echo "' class='btn btn-warning'>editar</a>&nbsp;&nbsp;&nbsp;<a href='index.php?r=deleteReserva&amp;reserva="?><?php echo $row['id']?><?php echo "' class='btn btn-danger'>Esborrar</a></td>";
          }
          echo "</table>";
        ?>
      </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>