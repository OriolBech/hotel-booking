<?php


/**
  * ctrlClient: Controlador que carrega panell client
  *
  * @param $peticio contingut de la petició http.
  * @param $resposta contingut de la resposta http.
  * @param $imatges Model que encapsula les imatges.
  *
**/

function ctrlClient($peticio, $resposta, $contenidor)
{
  
  $email = $peticio->get("SESSION", "usuari");

  $usuaris = $contenidor->usuaris();
  $usuari = $usuaris->getByEmail($email);

  $reserves = $contenidor->reserves();
  $reservesClient = $reserves->getByUserId($usuari['id']);

  $resposta->set("allReserves", $reservesClient);
  $resposta->set("usuariActual", $usuari);

  $resposta->SetTemplate("client/client.php");

  return $resposta;
}
