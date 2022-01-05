<?php

/**
  * ctrlFormReserva: Controlador carrega formularis d'edicio i afegir reserves
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlFormReserva($peticio, $resposta, $contenidor) {
    
    $reserves = $contenidor->reserves();

    $reserva = $peticio->get(INPUT_GET, "reserva");
    //var_dump($imatge);
    if (!is_null($reserva)) {
        $reservaActual = $reserves->get($reserva);
        $resposta->set("accioReserva", "editReserva");
        $resposta->set("nomAccio", "Actualitzar");
    } else {
        $reservaActual = ["id" => "", "ocupants" => "", "data_reserva" => date("Y-d-m"), "data_entrada" => date("Y-d-m"), "data_sortida" => date("Y-d-m"), "num_targeta" => "", "id_usuari" => "", "id_habitacio" => ""]; 
        $resposta->set("accioReserva", "addReserva");
        $resposta->set("nomAccio", "Afegir");
    }
    
    $resposta->set("reservaActual", $reservaActual);
    
    $resposta->SetTemplate("admin/reserva/form.php");

    return $resposta;
}