<?php

/**
  * ctrlDeleteUsuari: Controlador delete usuari
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlDeleteUsuari($peticio, $resposta, $contenidor)
{
    $usuaris = $contenidor->usuaris();
    
    $usuari = $peticio->get(INPUT_GET, "usuari");

    // No estic esborrant el fitxer, només la entrada a la base de dades
    $usuaris->delete($usuari);

    $resposta->redirect("location: index.php?r=indexUsuari");

    return $resposta;
}