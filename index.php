<?php
require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

//Busca um usuário
/*$root = new Usuario();
$root->loadById(9);
echo $root;
*/

//Carrega lista de usuários
/*$lista = Usuario::getList();
echo json_encode($lista);
*/

//Carrega lista de usuários buscando por login
/*$search = Usuario::search("jo");
echo json_encode($search);
*/

//Carrega usuário usando login e senha
$usuario = new Usuario();
$usuario->login("jose", "123456");
echo $usuario;

?>