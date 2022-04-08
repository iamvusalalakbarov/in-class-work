<?php

require_once("connect.php");

if (!isset($_GET["page"])) {
    $_GET["page"] = "index";
}

switch ($_GET["page"]) {

    case "insert":
        require_once("insert.php");
    break;

}

?>