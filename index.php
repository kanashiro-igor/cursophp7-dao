<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

// Carrega um usuário
/*$root = new Usuario();

$root->loadById(1);

echo $root;*/

// Carrega uma lista de usuários
/*$lista = Usuario::getList();

echo json_encode($lista);*/

// Carega uma lista de usuários buscando pelo login
/*$search = Usuario::search("i");

echo json_encode($search);*/

// Carrega um usuário usando o login e senha
/*$usuario = new Usuario();

$usuario->login("Igor", "Senharius");

echo $usuario;*/

// Criando um novo usuário
/*$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;*/

// Alterar um usuário
/*$usuario = new Usuario();

$usuario->loadById(5);

$usuario->update("Professor", "!@#$%¨&*");

echo $usuario;*/

$usuario = new Usuario();

$usuario->loadById(4);

$usuario->delete();

echo $usuario;

?>