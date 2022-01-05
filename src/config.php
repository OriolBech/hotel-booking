<?php

include("../env.php");

$config = array();

/* configuració de connexió a la base dades */
$config["db"] = array();
$config["db"]["user"] = $env["user"];
$config["db"]["pass"] = $env["pass"];
$config["db"]["dbname"] = $env["dbname"];
$config["db"]["host"] = $env["host"];

$config["login"]["encryption_key"] = $env["encryption_key"];
/* Path on guardarem el fitxer sqlite */

require_once "../src/core/peticio.php";
require_once "../src/core/resposta.php";
require_once "../src/core/contenidor.php";

require_once "../src/models/habitacions.php";
require_once "../src/models/usuaris.php";
require_once "../src/models/reserves.php";
