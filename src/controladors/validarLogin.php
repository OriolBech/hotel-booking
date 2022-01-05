<?php

/**
    * Controlador que gestiona el procés de login
    * Comprova si l'usuari s'ha autentificat correctament
    *
**/

function ctrlValidarLogin($peticio, $resposta, $contenidor)
{
  // Comptem quantes vegades has visitat aquesta pàgina
  $email = $peticio->get(INPUT_POST, "email");
  $password = $peticio->get(INPUT_POST, "password");

  $usuaris = $contenidor->usuaris();
  $usuari = $usuaris->getByEmail($email);

  $verify = password_verify($password, $usuari['password']);

  if ($verify) {
    $resposta->setSession("usuari", $usuari['email'] );
    $resposta->setSession("logat", true);
    $resposta->setSession("rol", $usuari['rol']);
    $resposta->redirect("location: index.php?r=home");
  } else {
    $resposta->setSession("error", "Usuari o clau incorrectes!");
    $resposta->setSession("logat", false);
    $resposta->setSession("rol", $usuari['rol']);
    $resposta->redirect("location: index.php?r=login");
  }

  return $resposta;
}
