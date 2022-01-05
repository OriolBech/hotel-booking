<?php 

/**
  * ctrlQuiSom: Controlador que carrega pagina de qui som
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlQuiSom($peticio, $resposta, $contenidor)
{   
    $logat = $peticio->get("SESSION", "logat");
    $resposta->set("access", $logat);
    
    $rol = $peticio->get("SESSION", "rol");
    $resposta->set("rol", $rol);

    $resposta->SetTemplate("quisom.php");

    return $resposta;
}
