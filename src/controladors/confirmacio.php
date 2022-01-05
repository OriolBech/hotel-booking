<?php 

/**
  * ctrlConfirmacio: Controlador que carrega pagina de confirmacio de les dades de busqueda
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlConfirmacio($peticio, $resposta, $contenidor)
{   
    $logat = $peticio->get("SESSION", "logat");
    $resposta->set("access", $logat);
    
    $rol = $peticio->get("SESSION", "rol");
    $resposta->set("rol", $rol);

    $data_entrada = $peticio->get("SESSION", "data_entrada");
    $data_sortida = $peticio->get("SESSION", "data_sortida");
    $ocupants = $peticio->get("SESSION", "ocupants");
    $nom_habitacio = $peticio->get("SESSION", "nom_habitacio");
    $id_habitacio = $peticio->get("SESSION", "id_habitacio");


    $resposta->set("data_entrada", $data_entrada);
    $resposta->set("data_sortida", $data_sortida);
    $resposta->set("ocupants", $ocupants);
    $resposta->set("habitacio", $nom_habitacio);
    $resposta->set("id_habitacio", $id_habitacio);

    $resposta->setTemplate("confirmacio.php");

    return $resposta;
}
