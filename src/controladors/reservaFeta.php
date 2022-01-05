<?php 

/**
  * ctrlReservaFeta: Controlador que carrega pagina de confirmacio un co s'ha realitzat la reserva
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlReservaFeta($peticio, $resposta, $contenidor)
{

    $logat = $peticio->get("SESSION", "logat");
    $resposta->set("access", $logat);
    
    $rol = $peticio->get("SESSION", "rol");
    $resposta->set("rol", $rol);

    $email = $peticio->get("SESSION", "usuari");

    $data_entrada = $peticio->get(INPUT_GET, "dataentrada");
    $data_sortida = $peticio->get(INPUT_GET, "datasortida");
    $ocupants = $peticio->get(INPUT_GET, "ocupants");
    $habitacio = $peticio->get(INPUT_GET, "habitacio");
    $data_reserva = date("m/d/Y");

    $resposta->set("data_entrada", $data_entrada);
    $resposta->set("data_sortida", $data_sortida);
    $resposta->set("data_reserva", $data_entrada);
    $resposta->set("ocupants", $ocupants);
    $resposta->set("habitacio", $habitacio);
    $resposta->set("email", $email);


    $resposta->SetTemplate("reservaFeta.php");

    return $resposta;
}
