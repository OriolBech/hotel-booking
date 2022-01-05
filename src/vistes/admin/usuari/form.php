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
            <h2><?=$nomAccio;?> Usuari</h2>
            <form action="index.php" method="POST">
                <input type="hidden" name="r" value="<?=$accioUsuari?>">
                <input type="hidden" name="id" value="<?=$usuariActual["id"]?>">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" value="<?=$usuariActual["nom"]?>" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="cognoms">Cognoms</label>
                    <input type="text" class="form-control" value="<?=$usuariActual["cognoms"]?>" name="cognoms" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" value="<?=$usuariActual["email"]?>" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password" required>Password</label>
                    <input type="password" class="form-control" value="" name="password" required>
                </div>
                <div class="form-group">
                    <label for="data_naixament">Data Naixament</label>
                    <input type="date" class="form-control" value="<?=$usuariActual["data_naixament"]?>" name="data_naixament" required>
                </div>
                <div class="form-group">
                    <label for="rol">Rol - actual: <?= $usuariActual["rol"] ?></label>
                    <select class="form-control" name="rol" required>
                        <option value="" selected disabled hidden>Escull un rol</option>
                        <option value="admin">Admin</option>
                        <option value="gestor">Gestor</option>
                        <option value="client">Client</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-2"><?=$nomAccio;?></button>
            </form>
        </div>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>