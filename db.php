<?php 
$dsn="mysql:host=localhost;dbname=store;charset=utf8";
$pdo=new PDO($dsn,'root','');

function all($table){
    global $pdo;
    $sql="SELECT * FROM $table";
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    
    return $rows;

}


function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}