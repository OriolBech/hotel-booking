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
        <h2>Habitacions</h2>
        <a href='index.php?r=formHabitacio' class='btn btn-primary'>Afegir</a>
        <?php
          echo "<table class='table'><tr><th scope='col'>ID</th><th scope='col'>Nom</th><th scope='col'>Preu</th><th scope='col'>m2</th><th scope='col'>Serveis</th><th scope='col'>Max Ocupants</th><th scope='col'>Total Habitacions</th></tr>";
          foreach($allHabitacions as $row){
              echo "<tr>";
              echo "<td scope='row'>{$row['id']}</td><td>{$row['nom']}</td><td>{$row['preu']}</td><td>{$row['m2']}</td><td>{$row['serveis']}</td><td>{$row['max_ocupants']}</td><td>{$row['n_total']}</td>";
              echo "<td><a href='index.php?r=formHabitacio&amp;habitacio="?><?php echo $row['id']?> <?php echo "' class='btn btn-warning'>editar</a>&nbsp;&nbsp;&nbsp;<a href='index.php?r=deleteHabitacio&amp;habitacio="?><?php echo $row['id']?><?php echo "' class='btn btn-danger'>Esborrar</a></td>";
          }
          echo "</table>";
        ?>
      </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>