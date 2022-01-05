<?php

/**
  * ctrlBuscar: Controlador que carrega pagina de resultats de busqueda
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlBuscar($peticio, $resposta, $contenidor)
{   
    $logat = $peticio->get("SESSION", "logat");
    $resposta->set("access", $logat);
    
    $rol = $peticio->get("SESSION", "rol");
    $resposta->set("rol", $rol);

    $data_entrada = $peticio->get(INPUT_POST, "data_entrada");
    $data_sortida = $peticio->get(INPUT_POST, "data_sortida");
    $ocupants = $peticio->get(INPUT_POST, "ocupants");

    $resposta->set("data_entrada", $data_entrada);
    $resposta->set("data_sortida", $data_sortida);
    $resposta->set("ocupants", $ocupants);

    $reserves = $contenidor->reserves();
    $disponibles = $reserves->buscarDisponiblitat($data_entrada, $data_sortida, $ocupants);
    
    $resposta->set("allHabitacions", $disponibles);

    $resposta->setTemplate("buscar.php");

    return $resposta;

}
