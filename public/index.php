<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

//configuracio
include "../src/config.php";

//privat
include "../src/controladors/admin/admin.php";
include "../src/controladors/admin/habitacio/index.php";
include "../src/controladors/admin/habitacio/form.php";
include "../src/controladors/admin/habitacio/add.php";
include "../src/controladors/admin/habitacio/edit.php";
include "../src/controladors/admin/habitacio/delete.php";

include "../src/controladors/admin/usuari/index.php";
include "../src/controladors/admin/usuari/form.php";
include "../src/controladors/admin/usuari/add.php";
include "../src/controladors/admin/usuari/edit.php";
include "../src/controladors/admin/usuari/delete.php";

include "../src/controladors/admin/reserva/index.php";
include "../src/controladors/admin/reserva/form.php";
include "../src/controladors/admin/reserva/add.php";
include "../src/controladors/admin/reserva/edit.php";
include "../src/controladors/admin/reserva/delete.php";

include "../src/controladors/client/client.php";

//public
include "../src/controladors/home.php";
include "../src/controladors/buscar.php";
include "../src/controladors/habitacions.php";
include "../src/controladors/mostrarHabitacio.php";
include "../src/controladors/confirmacio.php";
include "../src/controladors/reservaFeta.php";
include "../src/controladors/contacte.php";
include "../src/controladors/quisom.php";
include "../src/controladors/login.php";
include "../src/controladors/signup.php";
include "../src/controladors/error.php";
include "../src/controladors/validarLogin.php";
include "../src/controladors/validarSignup.php";
include "../src/controladors/tancarSessio.php";
include "../src/controladors/validarReserva.php";
include "../src/controladors/validarConfirmacio.php";

//middleware
include "../src/middleware/middleAdmin.php";
include "../src/middleware/middleClient.php";

$r = $_REQUEST["r"];
// Creem els diferents models
$contenidor = new Core\Contenidor($config);
$resposta = $contenidor->resposta();
$peticio = $contenidor->peticio();

//rutes
if ($r === "admin") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, 'ctrlAdmin');
} elseif ($r === "login") {
    $resposta = ctrlLogin($peticio, $resposta, $contenidor);
} elseif ($r === "validarLogin") {
    $resposta = ctrlValidarLogin($peticio, $resposta, $contenidor);
} elseif ($r === "signup") {
    $resposta = ctrlSignup($peticio, $resposta, $contenidor);
} elseif ($r === "validarSignup") {
    $resposta = ctrlValidarSignup($peticio, $resposta, $contenidor);
} elseif ($r === "tancarSessio") {
    $resposta = ctrlTancarSessio($peticio, $resposta, $contenidor);
} elseif ($r === "home") {
    $resposta = ctrlHome($peticio, $resposta, $contenidor);
} elseif ($r === "buscar") {
    $resposta = middleClient($peticio, $resposta, $contenidor, 'ctrlBuscar');
} elseif ($r === "confirmacio") {
    $resposta = middleClient($peticio, $resposta, $contenidor, 'ctrlConfirmacio');
} elseif ($r === "validarConfirmacio") {
    $resposta = middleClient($peticio, $resposta, $contenidor, 'ctrlValidarConfirmacio');
} elseif ($r === "validarReserva") {
    $resposta = ctrlValidarReserva($peticio, $resposta, $contenidor);
} elseif ($r === "reservaFeta") {
    $resposta = ctrlReservaFeta($peticio, $resposta, $contenidor);
} elseif ($r === "mostrarHabitacio") {
    $resposta = ctrlMostrarHabitacio($peticio, $resposta, $contenidor);
} elseif ($r === "habitacions") {
    $resposta = ctrlHabitacions($peticio, $resposta, $contenidor);
} elseif ($r === "contacte") {
    $resposta = ctrlContacte($peticio, $resposta, $contenidor);
} elseif ($r === "quisom") {
    $resposta = ctrlQuiSom($peticio, $resposta, $contenidor);
} elseif ($r == "") {
    $resposta = ctrlHome($peticio, $resposta, $contenidor);
    //admin habitacions
} elseif ($r === "indexHabitacio") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, 'ctrlIndexHabitacio');
} elseif ($r === "formHabitacio") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, 'ctrlFormHabitacio');
} elseif ($r === "addHabitacio") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, 'ctrlAddHabitacio');
} elseif ($r === "editHabitacio") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, 'ctrlEditHabitacio');
} elseif ($r === "deleteHabitacio") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, 'ctrlDeleteHabitacio');
    //admin usuari
} elseif ($r === "indexUsuari") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, 'ctrlIndexUsuari');
} elseif ($r === "formUsuari") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, 'ctrlFormUsuari');
} elseif ($r === "addUsuari") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, 'ctrlAddUsuari');
} elseif ($r === "editUsuari") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, 'ctrlEditUsuari');
} elseif ($r === "deleteUsuari") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, 'ctrlDeleteUsuari');
    //admin Reserva
} elseif ($r === "indexReserva") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, 'ctrlIndexReserva');
} elseif ($r === "formReserva") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, 'ctrlFormReserva');
} elseif ($r === "addReserva") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, 'ctrlAddReserva');
} elseif ($r === "editReserva") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, 'ctrlEditReserva');
} elseif ($r === "deleteReserva") {
    $resposta = middleAdmin($peticio, $resposta, $contenidor, 'ctrlDeleteReserva');
    //Area Client
} elseif ($r === "client") {
    $resposta = middleClient($peticio, $resposta, $contenidor, 'ctrlClient');
} else {
    $resposta = ctrlError($peticio, $resposta, $contenidor);
}

$resposta->resposta();
