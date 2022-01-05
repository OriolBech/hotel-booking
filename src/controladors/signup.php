<?php

/**
  * ctrlSignup: Controlador que carrega  la pàgina de login
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlSignup($peticio, $resposta, $contenidor)
{

  $logat = $peticio->get("SESSION", "logat");
  $resposta->set("access", $logat);
  
  $rol = $peticio->get("SESSION", "rol");
  $resposta->set("rol", $rol);

  // Comptem quantes vegades has visitat aquesta pàgina
  $error = $peticio->get("SESSION", "error");
  

  $resposta->set("error", $error);
  $resposta->setSession("error", "");

  $resposta->SetTemplate("signup.php");

  return $resposta;
}
