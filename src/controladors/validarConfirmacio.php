<?php 

/**
  * ctrlValidarConfirmacio: Controlador que valida les dades de la busqueda i rediregeix a la confirmacio
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlValidarConfirmacio($peticio, $resposta, $contenidor)
{   
    $logat = $peticio->get("SESSION", "logat");
    $resposta->set("access", $logat);
    
    $rol = $peticio->get("SESSION", "rol");
    $resposta->set("rol", $rol);

    $data_entrada = $peticio->get(INPUT_GET, "dataentrada");
    $data_sortida = $peticio->get(INPUT_GET, "datasortida");
    $ocupants = $peticio->get(INPUT_GET, "ocupants");
    $habitacio = $peticio->get(INPUT_GET, "habitacio");

    $habitacions = $contenidor->habitacions();
    $habitacioSeleccionada = $habitacions->get($habitacio);

    $resposta->setSession("data_entrada", $data_entrada);
    $resposta->setSession("data_sortida", $data_sortida);
    $resposta->setSession("ocupants", $ocupants);
    $resposta->setSession("id_habitacio", $habitacioSeleccionada['id']);
    $resposta->setSession("nom_habitacio", $habitacioSeleccionada['nom']);

    $resposta->redirect("location: index.php?r=confirmacio");

    return $resposta;
}
