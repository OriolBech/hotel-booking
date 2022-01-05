<?php


/**
  * ctrlAdmin: Controlador que carrega panell administratiu
  *
  * @param $peticio contingut de la petició http.
  * @param $resposta contingut de la resposta http.
  * @param $imatges Model que encapsula les imatges.
  *
**/
function ctrlAdmin($peticio, $resposta, $contenidor)
{

  $habitacions = $contenidor->habitacions();
  $allHabitacions = $habitacions->getAll();
  $resposta->set("allHabitacions", $allHabitacions);
  
  $resposta->SetTemplate("admin/admin.php");

  return $resposta;
}
