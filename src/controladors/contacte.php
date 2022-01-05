<?php 

/**
  * ctrlContacte: Controlador que carrega pagina de contacte
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlContacte($peticio, $resposta, $contenidor)
{   
    $logat = $peticio->get("SESSION", "logat");
    $resposta->set("access", $logat);
    
    $rol = $peticio->get("SESSION", "rol");
    $resposta->set("rol", $rol);

    $resposta->SetTemplate("contacte.php");

    return $resposta;
}
