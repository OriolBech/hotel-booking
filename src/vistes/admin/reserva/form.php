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
            <h2><?=$nomAccio;?> Reserva</h2>
            <form action="index.php" method="POST">
                <input type="hidden" name="r" value="<?=$accioReserva?>">
                <input type="hidden" name="id" value="<?=$reservaActual["id"]?>">
                <div class="form-group">
                    <label for="nom">Ocupants</label>
                    <input type="number" class="form-control" value="<?=$reservaActual["ocupants"]?>" name="ocupants" required >
                </div>
                <div class="form-group">
                    <label for="data_entrada">Data Entrada</label>
                    <input type="date" class="form-control" value="<?=$reservaActual["data_entrada"]?>" name="data_entrada" oninput="this.value = DDMMYYYY(this.value, event)" required>
                </div>
                <div class="form-group">
                    <label for="data_sortida">Data Sortida</label>
                    <input type="date" class="form-control" value="<?=$reservaActual["data_sortida"]?>" name="data_sortida" oninput="this.value = DDMMYYYY(this.value, event)" required>
                </div>
                <div class="form-group">
                    <label for="num_targeta">Numero Targeta</label>
                    <input type="text" class="form-control" value="<?=$reservaActual["num_targeta"]?>" name="num_targeta" required>
                </div>
                <div class="form-group">
                    <label for="id_usuari">ID Usuari</label>
                    <input type="number" class="form-control" value="<?=$reservaActual["id_usuari"]?>" name="id_usuari" required>
                </div>
                <div class="form-group">
                    <label for="id_habitacio">ID Habitacio </label>
                    <input type="number" class="form-control" value="<?=$reservaActual["id_habitacio"]?>" name="id_habitacio" required>
                </div>
                <button type="submit" class="btn btn-primary mb-2"><?=$nomAccio;?></button>
            </form>
        </div>
    </div>
    <script>
        function DDMMYYYY(value, event) {
            let newValue = value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');

            const dayOrMonth = (index) => index % 2 === 1 && index < 4;

            // on delete key.  
            if (!event.data) {
                return value;
            }

            return newValue.split('').map((v, i) => dayOrMonth(i) ? v + '/' : v).join('');
        }
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>