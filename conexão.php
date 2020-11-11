<?php
header('acess-control-allow-origin:*);
header('acess-control-allow-credentials:true');
header('acess-control-allow-methods:post,get,options');
header('acess-control-allow-headers:content-type,authorization,x-requested-with');
header('content-type:application/json;charset=utf-8');

//dados do banco de dados no servidor local
$banco = 'listacompra';
$host = 'localhost';
$usuario = 'root';
$senha = ";

try{
    //code

    $pdo = new PDO("mysql:dbname=$banco;host=$host","$usuario","$senha");


} catch (exception se) {
    //throw $th;
    echo "erro so conectar ao banco!!".se;
}
?>