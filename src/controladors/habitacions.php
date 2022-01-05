<?php 

/**
  * ctrlHabitacions: Controlador que llista les habitacions
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlHabitacions($peticio, $resposta, $contenidor)
{
    $logat = $peticio->get("SESSION", "logat");
    $resposta->set("access", $logat);
    
    $rol = $peticio->get("SESSION", "rol");
    $resposta->set("rol", $rol);
    
    $habitacions = $contenidor->habitacions();
    $allHabitacions = $habitacions->getAll();
    $resposta->set("allHabitacions", $allHabitacions);
    
    $resposta->SetTemplate("habitacions.php");

    return $resposta;
}
