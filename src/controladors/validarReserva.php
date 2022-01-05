<?php 

/**
  * ctrlValidarReserva: Controlador que valida les dades de la reserva
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlValidarReserva($peticio, $resposta, $contenidor)
{

    $logat = $peticio->get("SESSION", "logat");
    $resposta->set("access", $logat);
    
    $rol = $peticio->get("SESSION", "rol");
    $resposta->set("rol", $rol);

    $email = $peticio->get("SESSION", "usuari");
    $usuaris = $contenidor->usuaris();
    $usuari = $usuaris->getByEmail($email);

    $data_entrada = $peticio->get(INPUT_POST, "dataEntrada");
    $data_sortida = $peticio->get(INPUT_POST, "dataSortida");
    $ocupants = $peticio->get(INPUT_POST, "ocupants");
    $habitacio = $peticio->get(INPUT_POST, "habitacio");
    $n_targeta = $peticio->get(INPUT_POST, "cardnumber");
    
    $fdata_entrada=date_create($data_entrada);
    $fdata_sortida=date_create($data_sortida);

    $reserves = $contenidor->reserves();
    $reserves->add($ocupants, date("Y-m-d"), date_format($fdata_entrada,"Y-m-d"), date_format($fdata_sortida,"Y-m-d"), $n_targeta, $usuari['id'], $habitacio);

    $resposta->redirect("location: index.php?r=reservaFeta&dataentrada={$data_entrada}&datasortida={$data_sortida}&ocupants={$ocupants}&habitacio={$habitacio}'");

    return $resposta;
}
