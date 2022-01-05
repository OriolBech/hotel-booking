<?php

/**
  * ctrlSignup: Controlador que valida dades de registre
  *
  * @param $peticio contingut de la peticó http.
  * @param $resposta contingut de la resposta http.
  *
**/

function ctrlValidarSignup($peticio, $resposta, $contenidor) {
    
    $usuaris = $contenidor->usuaris();

    $nom = $peticio->get(INPUT_POST, "rol");
    $nom = $peticio->get(INPUT_POST, "nom");
    $cognoms = $peticio->get(INPUT_POST, "cognoms");
    $email = $peticio->get(INPUT_POST, "email");
    $password = $peticio->get(INPUT_POST, "password");
    $data_naixament = $peticio->get(INPUT_POST, "data_naixament");
    $rol = $peticio->get(INPUT_POST, "rol");

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $usuaris->add($nom, $cognoms, $email, $hash, $data_naixament, $rol);
    $resposta->redirect("location: index.php?r=login");

    return $resposta;
}