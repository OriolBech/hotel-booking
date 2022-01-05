<?php

/**
  * ctrlLogin: Controlador que carrega  la pàgina de login
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  * @param array $config  paràmetres de configuració de l'aplicació
  *
**/
function ctrlLogin($peticio, $resposta, $contenidor)
{

  $logat = $peticio->get("SESSION", "logat");
  $resposta->set("access", $logat);
  
  $rol = $peticio->get("SESSION", "rol");
  $resposta->set("rol", $rol);

  // Comptem quantes vegades has visitat aquesta pàgina
  $error = $peticio->get("SESSION", "error");
  

  $resposta->set("error", $error);
  $resposta->setSession("error", "");

  $resposta->SetTemplate("login.php");

  return $resposta;
}
