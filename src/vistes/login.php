<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>Hotel Cendrassos - Login</title>
  </head>
  <body>
    <header><?php include("../src/vistes/nav.php") ?></header>
    <container>

        <div class="container-login">
            <h1>Iniciar sessió</h1>
            <form action="index.php" method="post">
              <input type="hidden" name="r" value="validarLogin">
             
                        <label class="form-label" for="email">Email</label>
                        <input type="text" class="form-control form-control-lg" name="email" />
     
                        <label class="form-label" for="password">Password</label>
                        <input type="password" class="form-control form-control-lg" name="password" />
                 
              <input id="button" type="submit" value="Accedir" />
            </form>
            <?php if($error != "") { ?>
        <div class="error" role="alert">
        <?=$error?>
        </div>
        <?php } ?>
          </div>
          
        </div>

    </container>
    <footer>
      <?php include("../src/vistes/footer.php") ?>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>