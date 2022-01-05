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
  
    <?php include("../src/vistes/client/nav.php"); ?>


    <div class="row">
      <div class="col">
      </div>
      <div class="col mt-4">
        <h2 class="text-center">Benvingut al àrea client.</h2>
        <h4 class="text-center" style="font-weight: 400;">Aquí podras trobar la informació de les teves reserves</h4>
      </div>
      <div class="col">
      </div>
    </div>
    <div class="row mt-4">
      <?php
        echo "<table class='table ms-4'><th scope='col'>ID</th><th scope='col'>Ocupants</th><th scope='col'>Data Reserva</th><th scope='col'>Data Entrada</th><th scope='col'>Data Sortida</th><th scope='col'>Preu</th><th scope='col'>Num Targeta</th><th scope='col'>Habitacio</th></tr>";
        foreach($allReserves as $row){
            $email = $usuariActual['email'];
            $id = $row['id'];
            $ocupants = $row['ocupants'];
            $dataReserva = $row['data_reserva'];
            $dataEntrada = $row['data_entrada'];
            $dataSortida = $row['data_sortida'];
            echo "<tr>";
            echo "<td scope='row'>{$row['id']}</td><td>{$row['ocupants']}</td><td>{$row['data_reserva']}</td><td>{$row['data_entrada']}</td><td>{$row['data_sortida']}</td><td>{$row['preu']}</td><td>{$row['num_targeta']}</td><td>{$row['habitacio']}</td>";
            echo "<td><a class='btn btn-primary' onclick='generateBono(\"$id\",\"$ocupants\",\"$email\",\"$dataReserva\",\"$dataEntrada\",\"$dataSortida\")' >PDF</a></td>";
        }
        echo "</table>";
      ?>
    </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    function generateBono(id,ocupants,email,dataReserva,dataEntrada,dataSortida) {
      
      

      var doc = new jsPDF()

      var img = new Image()
      img.src = 'img/logo.png'
      doc.addImage(img, 'PNG', 43, 21, 125, 25)


      doc.setFontSize(25)
      doc.text(20, 70, 'BONO')

      doc.setFontType('normal')
      doc.setFontSize(18)

      doc.text(20, 80, 'Numero de reserva:')
      doc.text(80, 80, id.toString())

      doc.text(20, 90, 'Ocupants:')
      doc.text(80, 90, ocupants.toString())

      doc.text(20, 100, 'Email:')
      doc.text(80, 100, email.toString())

      doc.text(20, 110, 'Data Reserva:')
      doc.text(80, 110, dataReserva.toString())

      doc.text(20, 120, 'Data Entrada:')
      doc.text(80, 120, dataEntrada.toString())

      doc.text(20, 130, 'Data Sortida:')
      doc.text(80, 130, dataSortida.toString())

      doc.setFontSize(16)
      doc.text(20, 150, "Presentar aquest document a recepció el dia d'entrada.")

      doc.setLineWidth(0.5)
      doc.line(10,10, 10, 288)
      doc.line(10, 10, 200, 10)
      doc.line(200, 288, 200, 10)
      doc.line(10, 288, 200, 288)

      doc.save('bono_cendrassos.pdf');

    }
  </script>
</body>
</html>