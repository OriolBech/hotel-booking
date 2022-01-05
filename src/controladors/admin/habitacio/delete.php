<?php

/**
  * ctrlDeleteHabitacio: Controlador esborrar habitacions
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlDeleteHabitacio($peticio, $resposta, $contenidor)
{
    $habitacions = $contenidor->habitacions();
    
    $habitacio = $peticio->get(INPUT_GET, "habitacio");

    // No estic esborrant el fitxer, només la entrada a la base de dades
    $habitacions->delete($habitacio);

    $resposta->redirect("location: index.php?r=indexHabitacio");

    return $resposta;
}