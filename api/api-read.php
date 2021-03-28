<?php

try{
    require_once(__DIR__.'/db.php');
    $q = $db->prepare('SELECT * FROM users'); // * = all
    $q->execute();
    $aRows = $q->fetchAll();

    header('Content-Type: application/json');
    echo json_encode($aRows);
    exit();

}catch(PDOExeption $ex){
    sendError(500,'system under maintanance', __LINE__);
}



function sendError($ierrorCode, $sMessage, $iLine){ 
    http_response_code($ierrorCode);
    header('Content-Type: application/json');
    echo '{"message":"'.$sMessage.'","error":"'.$iLine.'"}';
    exit();
}


