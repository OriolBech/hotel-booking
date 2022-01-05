<?php

/**
  * ctrlIndexUsuari: Controlador carrega index de usuaris
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlIndexUsuari($peticio, $resposta, $contenidor) {

    $usuaris = $contenidor->usuaris();
    $allUsuaris = $usuaris->getAll();
    $resposta->set("allUsuaris", $allUsuaris);

    $resposta->SetTemplate("admin/usuari/index.php");

    return $resposta;
}