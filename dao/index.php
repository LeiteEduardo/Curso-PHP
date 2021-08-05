<?php 

require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * from tb_usuarios");
echo json_encode($usuarios);*/

/*Carrega apenas um usuario
$root = new Usuario();
$root->loadById(3);
echo $root;*/

/*Carrega uma lista de usuarios
$lista = Usuario::getList();
echo json_encode($lista);*/


/*Carrega uma lista de usuarios buscando pelo login
$search = Usuario::search("E");
echo json_encode($search);*/

/*Carrega um usuario usando o login e senha
$usuario = new Usuario();
$usuario->login("Eduardo", "El!527279");
echo $usuario;*/

/*Criando um novo usuario
$aluno = new Usuario("aluno", "654321");
$aluno->insert();
echo $aluno;*/

/*Alterando dados do usuario pelo id
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor","prof1");
echo $usuario;*/

/*Deletando usuario*/
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;
 ?>