<html>
  <head>
  <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/habitacions.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Hotel Cendrassos - Habitacions</title>
  </head>
  <body>
    <header>
      <?php include("../src/vistes/nav.php") ?>
    </header>
    <container>
    <?php
      foreach($allHabitacions as $row){
        echo "<div class='search-result'>
                <div class='search-img'>
                <a href='./index.php?r=mostrarHabitacio&habitacio={$row['id']}'><img src='img/habitacions/{$row['id']}/1.jpg'></a>
                </div>
                <div class='search-box'>
                  <div class='search-info'>
                    <h1><a href='./index.php?r=mostrarHabitacio&habitacio={$row['id']}'>Habitació {$row['nom']}</a></h1>
                    <a href='./index.php?r=mostrarHabitacio&habitacio={$row['id']}'><p>{$row['descripcio']}..</p></a>
                  </div>
                  <h2><a href='./index.php?r=mostrarHabitacio&habitacio={$row['id']}'>Serveis</a></h2>
                  <div class='search-serveis'>
                    
                    <ul>
                    <a href='./index.php?r=mostrarHabitacio&habitacio={$row['id']}'><li>{$row['serveis']}</li></a>
                    </ul>
                  </div>
                </div>
                <div class='search-button'>
                  <h1><a href='./index.php?r=mostrarHabitacio&habitacio={$row['id']}'>{$row['preu']}</h1> <p>€/nit<p></a>
                </div>
              </div>";
          }
        ?>
    </container>
    <footer>
      <?php include("../src/vistes/footer.php") ?>
    </footer>
  </body>
</html>