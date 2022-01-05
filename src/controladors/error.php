<?php

/**
  * ctrlError: Controlador que carrega la pàgina d'error
  *
  * @param $peticio contingut de la petició http.
  * @param $resposta contingut de la resposta http.
  *
**/
function ctrlError($peticio, $resposta, $contenidor)
{ 
  $logat = $peticio->get("SESSION", "logat");
  $resposta->set("access", $logat);
  
  $rol = $peticio->get("SESSION", "rol");
  $resposta->set("rol", $rol);

  $error = $nom = $peticio->get("SESSION", "error");
  $resposta->set("error", $error);
  $resposta->SetTemplate("error.php");

  return $resposta;
}
