<?php
require_once('_config.php');

// phpinfo();

$GLOBALS["viewables"]["head_title"] = "Homepage";
$GLOBALS["viewables"]["route"] = "homepage";

if (isset($_POST["myName"])) {
    $name = $_POST["myName"];
} else {
    $name = null;
}

$GLOBALS["viewables"]["h1"] = \Samplephp\Message::hello($name);
require_view('layout/layout');