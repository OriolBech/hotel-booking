<?php

/**
  * ctrlIndexReserva: Controlador carrega index reserves
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlIndexReserva($peticio, $resposta, $contenidor) {

    $reserves = $contenidor->reserves();
    $allReserves = $reserves->getAll();
    $resposta->set("allReserves", $allReserves);

    $resposta->SetTemplate("admin/reserva/index.php");

    return $resposta;
}