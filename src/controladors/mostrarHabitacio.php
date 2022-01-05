<?php 

/**
  * ctrlMostrarHabitacio: Controlador que carrega pagina amb contingut dinamic de cada habitacio
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlMostrarHabitacio($peticio, $resposta, $contenidor)
{   
    $logat = $peticio->get("SESSION", "logat");
    $resposta->set("access", $logat);
    
    $rol = $peticio->get("SESSION", "rol");
    $resposta->set("rol", $rol);
    
    $habitacions = $contenidor->habitacions();
    $habitacio = $peticio->get(INPUT_GET, "habitacio");
    $habitacioActual = $habitacions->get($habitacio);
    
    $resposta->set("habitacioActual", $habitacioActual);
    $resposta->SetTemplate("mostrarHabitacio.php");

    return $resposta;
}
