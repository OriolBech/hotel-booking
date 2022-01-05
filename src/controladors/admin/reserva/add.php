<?php

/**
  * ctrlAddReserva: Controlador validar afegir reserva
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlAddReserva($peticio, $resposta, $contenidor) {
    
    $reserves = $contenidor->reserves();

    $ocupants = $peticio->get(INPUT_POST, "ocupants");
    $data_entrada = $peticio->get(INPUT_POST, "data_entrada");
    $data_sortida = $peticio->get(INPUT_POST, "data_sortida");
    $num_targeta = $peticio->get(INPUT_POST, "num_targeta");
    $id_usuari = $peticio->get(INPUT_POST, "id_usuari");
    $id_habitacio = $peticio->get(INPUT_POST, "id_habitacio");

    $reserves->add($ocupants, date("Y-m-d"), $data_entrada, $data_sortida, $num_targeta, $id_usuari, $id_habitacio);
    $resposta->redirect("location: index.php?r=formReserva");

    return $resposta;
}