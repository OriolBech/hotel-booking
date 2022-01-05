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
            <h2><?=$nomAccio;?> Habitacio</h2>
            <form action="index.php" method="POST">
                <input type="hidden" name="r" value="<?=$accioHabitacio?>">
                <input type="hidden" name="id" value="<?=$habitacioActual["id"]?>">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" value="<?=$habitacioActual["nom"]?>" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="preu">Preu</label>
                    <input type="number" class="form-control" value="<?=$habitacioActual["preu"]?>" name="preu" required>
                </div>
                <div class="form-group">
                    <label for="m2">m2</label>
                    <input type="number" class="form-control" value="<?=$habitacioActual["m2"]?>" name="m2" required>
                </div>
                <div class="form-group">
                    <label for="serveis">Serveis</label>
                    <input type="text" class="form-control" value="<?=$habitacioActual["serveis"]?>" name="serveis" required>
                </div>
                <div class="form-group">
                    <label for="max_ocupants">Max Ocupants</label>
                    <input type="number" class="form-control" value="<?=$habitacioActual["max_ocupants"]?>" name="max_ocupants" required>
                </div>
                <div class="form-group">
                    <label for="n_total">Numero Total</label>
                    <input type="number" class="form-control" value="<?=$habitacioActual["n_total"]?>" name="n_total" required>
                </div>
                <div class="form-group">
                    <label for="descripcio">Descripció</label>
                    <textarea type="text" class="form-control" name="descripcio" rows="3" required><?=$habitacioActual["descripcio"]?></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2"><?=$nomAccio;?></button>
            </form>
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>