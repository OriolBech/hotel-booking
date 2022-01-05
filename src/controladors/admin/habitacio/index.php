<?php

/**
  * ctrlIndexHabitacio: Controlador carrega index habitacions
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlIndexHabitacio($peticio, $resposta, $contenidor) {

    $habitacions = $contenidor->habitacions();
    $allHabitacions = $habitacions->getAll();
    $resposta->set("allHabitacions", $allHabitacions);

    $resposta->SetTemplate("admin/habitacio/index.php");

    return $resposta;
}