<?php
    header('Access-Control-Allow-Origin: *');
    $_DATA = json_decode(file_get_contents("php://input"), true);
    $_DATA["servidor"] = $_SERVER['HTTP_HOST'];
    echo json_encode($_DATA ,JSON_PRETTY_PRINT);

    
?>