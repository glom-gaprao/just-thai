<?php
    header("Access-Control-Allow-Origin: *");
    include 'connection.php';
    $db = connection();

    $result  = '';

    try{
        $id = $_GET['id'];
        $game_id = $_GET['game_id'];
        $sql = "SELECT * FROM status WHERE user_id = $id and game_id = $game_id";
        $result = $db ->query($sql)->fetchAll();
    }
    catch(PDOException $ex){
        echo $e->getMessage();
    }

    echo json_encode($result);
?>