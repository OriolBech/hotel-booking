<?php

/**
  * ctrlFormUsuari: Controlador carrega formulari d'edicio i afegir usuaris
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlFormUsuari($peticio, $resposta, $contenidor) {
    
    $usuaris = $contenidor->usuaris();

    $usuari = $peticio->get(INPUT_GET, "usuari");
    //var_dump($imatge);
    if (!is_null($usuari)) {
        $usuariActual = $usuaris->get($usuari);
        $resposta->set("accioUsuari", "editUsuari");
        $resposta->set("nomAccio", "Actualitzar");
    } else {
        $usuariActual = ["id" => "", "nom" => "", "cognoms" => "", "email" => "", "password" => "", "data_naixament" => "", "rol" => ""]; 
        $resposta->set("accioUsuari", "addUsuari");
        $resposta->set("nomAccio", "Afegir");
    }
    
    $resposta->set("usuariActual", $usuariActual);
    
    $resposta->SetTemplate("admin/usuari/form.php");

    return $resposta;
}