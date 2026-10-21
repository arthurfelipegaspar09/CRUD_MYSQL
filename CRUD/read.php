<?php

require_once('crud.php');



$usuarios = readAll($pdo, 'cadastro', 'idCadastro > 3');

foreach ($usuarios as $usuario) {

    echo"ID" . $usuario["idCadastro"] ." e nome:" . $usuario["nome"]."<br>";

}