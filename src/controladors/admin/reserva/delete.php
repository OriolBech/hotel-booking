<?php

/**
  * ctrlDeleteReserva: Controlador validar esborrar reserva
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlDeleteReserva($peticio, $resposta, $contenidor)
{
    $reserves = $contenidor->reserves();
    
    $reserva = $peticio->get(INPUT_GET, "reserva");

    // No estic esborrant el fitxer, només la entrada a la base de dades
    $reserves->delete($reserva);

    $resposta->redirect("location: index.php?r=indexReserva");

    return $resposta;
}