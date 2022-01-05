<?php

/**
  * middleAdmin: Middleware que controla si l'usuari està identificat i te rol d'admin o gestor.
  *
  * @param $peticio contingut de la petició http.
  * @param $resposta contingut de la resposta http.
  * @param $next controlador que s'ha d'executar si l'usuari està identificat.
  *
**/
function middleAdmin($peticio, $resposta, $contenidor, $next)
{
    $usuari = $peticio->get("SESSION", "usuari");
    $logat = $peticio->get("SESSION", "logat");
    $rol = $peticio->get("SESSION", "rol");

    if(!isset($logat)){
        $usuari = "";
        $logat = false;
    }

    $resposta->set("usuari", $usuari);
    $resposta->set("logat", $logat);
    $resposta->set("rol", $logat);

    // si l'usuari està logat permetem carregar el recurs
    if($logat && ($rol == 'admin' || $rol == 'gestor') ) {
        $resposta = $next($peticio, $resposta, $contenidor);
    } else {
        $resposta->redirect("location: index.php?r=login");
    }
    return $resposta;
}
