<?php

require_once "../../dao/pdo.php";
require_once "../../dao/don-hang.php";
require_once "../../global.php";
check_login();






extract($_REQUEST);
if (exist_param("chart")) {
    $VIEW_NAME = "chart.php";
} else {
    $VIEW_NAME = "list.php";
}

require "../layout.php";


  