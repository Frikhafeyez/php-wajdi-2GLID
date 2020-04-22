<?php
class admin extends fonction
{
private $id;
private $nom;
private $prenom;
private $login;
private $password;

public function __construct($id, $nom, $prenom, $login, $password)
{
$this->id = $id;
$this->nom = $nom;
$this->prenom = $prenom;
$this->login = $login;
$this->password = $password;
}

public function add($cnx){
	$this->password=crypt(md5($this->password),'$6$rounds=5000$anexamplestringforsalt$');
	$cnx->exec("insert into admin (nom, prenom, login, password) values('".$this->nom."', '".$this->prenom."', '".$this->login."', '".$this->password."')");
	$this->redirect("index.php?controller=admin&action=liste");
}

public function edit($cnx){
	$this->password=crypt(md5($this->password),'$6$rounds=5000$anexamplestringforsalt$');
	$cnx->exec("update admin set nom='".$this->nom."',prenom='".$this->prenom."',login='".$this->login."',password='".$this->password."' where id='".$this->id."'");
	$this->redirect("index.php?controller=admin&action=liste");

}

public function supp($cnx){
	$cnx->exec("delete from admin where id='".$this->id."'");
	$this->redirect("index.php?controller=admin&action=liste");
}

public function liste($cnx){
	$admins=$cnx->query("select * from admin")->fetchAll(PDO::FETCH_OBJ);
	return $admins;
}

public function detail($cnx){
	$admin=$cnx->query("select * from admin where id='".$this->id."'")->fetch(PDO::FETCH_OBJ);
	return $admin;
}

public function login($cnx){
$this->password=crypt(md5($this->password),'$6$rounds=5000$anexamplestringforsalt$');

	$admin=$cnx->query("select * from admin where login='".$this->login."' and password='".$this->password."'")->fetch(PDO::FETCH_OBJ);
	if(is_object($admin)){
		$_SESSION['login']=$this->login;
		$_SESSION['password']=$this->password;

		$this->redirect("index.php");
	}else{
		$this->redirect("login.php?error=1");
	}
}

}
?>