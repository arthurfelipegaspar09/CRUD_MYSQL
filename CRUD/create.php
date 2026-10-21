<?php

require_once('crud.php');


$novoUsuario = [

     
      "nome" => "Arthur",
      "email" => "arthur@gmail.com",
      "telefone" => " 9944030123",
      "cpf" => "405040203402",
      "endereco" => "amadeusdpas, 124",
       "senha" => password_hash("4321", PASSWORD_DEFAULT)

];





$idNovoUsuario = create($pdo, 'cadastro', $novoUsuario);
echo 'Novo usuario inserido com o ID:' . $idNovoUsuario;




