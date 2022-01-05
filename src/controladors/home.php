<?php

/**
  * ctrlLogin: Controlador que carrega  la pàgina del home
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  * @param array $config  paràmetres de configuració de l'aplicació
  *
**/

function ctrlHome($peticio, $resposta, $contenidor)
{

    $logat = $peticio->get("SESSION", "logat");
    $resposta->set("access", $logat);
    
    $rol = $peticio->get("SESSION", "rol");
    $resposta->set("rol", $rol);

    $habitacions = $contenidor->habitacions();

    $allHabitacions = $habitacions->getAll();
    
    $resposta->set("allHabitacions", $allHabitacions);

    $resposta->SetTemplate("home.php");

    return $resposta;
}