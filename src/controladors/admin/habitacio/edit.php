<?php

/**
  * ctrlEditHabitacio: Controlador editar habitacions
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlEditHabitacio($peticio, $resposta, $contenidor)
{
    $habitacions = $contenidor->habitacions();

    $id = $peticio->get(INPUT_POST, "id");
    $nom = $peticio->get(INPUT_POST, "nom");
    $preu = $peticio->get(INPUT_POST, "preu");
    $m2 = $peticio->get(INPUT_POST, "m2");
    $serveis = $peticio->get(INPUT_POST, "serveis");
    $max_ocupants = $peticio->get(INPUT_POST, "max_ocupants");
    $n_total = $peticio->get(INPUT_POST, "n_total");
    $descripcio = $peticio->get(INPUT_POST, "descripcio");

    $habitacions->update($id, $nom, $preu, $m2, $serveis, $max_ocupants, $n_total, $descripcio);

    $resposta->redirect("location: index.php?r=indexHabitacio");

    return $resposta;
}