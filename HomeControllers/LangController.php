<?php
session_start();

if (!isset($_SESSION['lang']))
    $_SESSION['lang'] = "eng";
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
    if ($_GET['lang'] == "eng") $_SESSION['lang'] = "eng"; 
else if ($_GET['lang'] == "idn") $_SESSION['lang'] = "idn";
else if ($_GET['lang'] == "jpn") $_SESSION['lang'] = "jpn";
else if ($_GET['lang'] == "krn") $_SESSION['lang'] = "krn";
else if ($_GET['lang'] == "arb") $_SESSION['lang'] = "arb";
}
require_once "./HomeControllers/Lang/" . $_SESSION['lang'] . ".php";

?>