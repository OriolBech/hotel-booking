<?php

/**
  * ctrlSignup: Controlador que tanca la sessio
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlTancarSessio($peticio, $resposta, $contenidor)
{
    $resposta->setSession("logat", false);
    $resposta->redirect("location: index.php");
    
    return $resposta;
}