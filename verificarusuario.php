<?php
include "conexao.php";
$data=array();
$sqlcomando="select*from t_usua_list_buy where nmeemailusuario = 'grupob@yahoo.com.br' and senhausuario ='123456' ";
foreach($pdo->query($sql)as $row){
    print $row['codigousuario']."\t";
    print $row['nmeemailusuario']"\t";
}
