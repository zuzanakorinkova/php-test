<?php

    if(!isset($_POST['name'])){sendError(400,'missing name', __LINE__);}
    if(!isset($_POST['password'])){sendError(400,'missing password', __LINE__);}

    if(strlen($_POST['name']) < 2){sendError(400,'name must be at least 2 characters.', __LINE__);}
    if(strlen($_POST['name']) > 20){sendError(400,'name cannot be longer than 20 characters.', __LINE__);}

    if(strlen($_POST['password']) < 6){sendError(400,'password must be at least 6 characters.', __LINE__);}
    if(strlen($_POST['password']) > 100){ sendError(400,'password cannot be longer than 100 characters.', __LINE__);} //in database its hashed - 255 varchar



try{

    require_once(__DIR__.'/../db.php');

    $query = $db->prepare('INSERT INTO users VALUES(:id, :name, :password, NOW())'); //never add '.$name.' in the user name(is hacked easily), insted add placeholder :name
    $query->bindValue(':id', null);
    $query->bindValue(':name', $_POST['name']); //puts name in placeholder
    $query->bindValue(':password', password_hash($_POST['password'], PASSWORD_DEFAULT));
    $query->execute();
    $id = $db->lastInsertId(); //last inserted id

    // session_start();
    // $_SESSION['id'] = $id;
    // $_SESSION['name'] = $_POST['name'];

    http_response_code(200); //201 created
    header('Content-Type: application/json');
    echo '{"id":'.$id.'}';


}catch(PDOExeption $ex){
    sendError(500,$ex, __LINE__);
}

function sendError($ierrorCode, $sMessage, $iLine){ //i = integer
    http_response_code($ierrorCode);
    header('Content-Type: application/json');
    echo '{"message":"'.$sMessage.'","error":"'.$iLine.'"}';
    exit();
}
