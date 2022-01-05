<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Exemple d'us de sessions</title>
  </head>
  <body>
    <?php include("cap.php"); ?>
    <div class="container">
      <div class="row mt-1 mb-3">
        <div class="col"><h1 >Exemple MVC</h1></div>
      </div>

      <?php if (isset($error) && $error != "") {?>
          <div class="alert alert-danger" role="alert">
                <?=$error;?>
          </div>
      <?php }?>

      <div class="row mt-1 mb-1">
        <div class="col">
            <p><?=$missatge?></p>
            <hr>
            <p>Exemple amb un MVC bàsic i utilitzant cookies i sessions per guardar la 
                informació de forma temporal.</p>
        </div>
      </div>
      
      
      <div class="row mt-5 mb-4">
        <div class="col">
          <div class="bg-light border rounded p-3">
          <h2>M07 - Desenvolupament web entorn servidor</h2>
          <p><h3>Professor: Dani Prados</h3></p>
          <p>Exemple d'arquitectura MVC, utilitzant sessions, cookies i la classe PDO. </p>
          
          </div>
        </div>
      </div>

    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>