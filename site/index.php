<?php
    require_once "vars.php";

    $lang = isset($_GET['lang']) && $_GET['lang'] != "" ? $_GET['lang'] : "az";
    $page = isset($_GET['page']) && $_GET['page'] != "" ? $_GET['page'] : "main";
    $file = "$lang/$page.php";

    include_once "header.php";
    include_once file_exists($file) ? $file : "404.php";
    include_once "footer.php";
?>