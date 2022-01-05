<?php

/**
  * ctrlFormHabitacio: Controlador gestionar formularis d'edicio i afegir habitacions
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlFormHabitacio($peticio, $resposta, $contenidor) {
    
    $habitacions = $contenidor->habitacions();

    $habitacio = $peticio->get(INPUT_GET, "habitacio");
    //var_dump($imatge);
    if (!is_null($habitacio)) {
        $habitacioActual = $habitacions->get($habitacio);
        $resposta->set("accioHabitacio", "editHabitacio");
        $resposta->set("nomAccio", "Actualitzar");
    } else {
        $habitacioActual = ["id" => "", "nom" => "", "preu" => "", "m2" => "", "serveis" => "", "max_ocupants" => "", "n_total" => "", "descripcio" => ""]; 
        $resposta->set("accioHabitacio", "addHabitacio");
        $resposta->set("nomAccio", "Afegir");
    }
    
    $resposta->set("habitacioActual", $habitacioActual);
    
    $resposta->SetTemplate("admin/habitacio/form.php");

    return $resposta;
}