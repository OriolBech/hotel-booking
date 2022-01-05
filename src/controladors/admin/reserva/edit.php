<?php

/**
  * ctrlEditReserva: Controlador validar edicio de reserva
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlEditReserva($peticio, $resposta, $contenidor)
{
    $reserves = $contenidor->reserves();

    $id = $peticio->get(INPUT_POST, "id");
    $ocupants = $peticio->get(INPUT_POST, "ocupants");
    $data_entrada = $peticio->get(INPUT_POST, "data_entrada");
    $data_sortida = $peticio->get(INPUT_POST, "data_sortida");
    $num_targeta = $peticio->get(INPUT_POST, "num_targeta");
    $id_usuari = $peticio->get(INPUT_POST, "id_usuari");
    $id_habitacio = $peticio->get(INPUT_POST, "id_habitacio");

    $reserves->update($id, $ocupants, $data_entrada, $data_sortida, $num_targeta, $id_usuari, $id_habitacio);

    $resposta->redirect("location: index.php?r=indexReserva");

    return $resposta;
}