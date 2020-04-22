<?php //session_start();
include "models/fonction.class.php";
include "models/admin.class.php";

//initialisation des parametres
$fn=new fonction();
$id="";
$nom="";
$prenom="";
$login="";
$password="";

//recupétation des variables externes

if(isset($_REQUEST['id']))
$id=$_REQUEST['id'];


if(isset($_POST['nom']))
$nom=$_POST['nom'];

if(isset($_POST['prenom']))
$prenom=$_POST['prenom'];

if(isset($_POST['login']))
$login=$_POST['login'];

if(isset($_POST['password']))
$password=$_POST['password'];


//creation de l'objet
$adm=new admin($id, $nom, $prenom, $login, $password);


switch($action){
	case "login1":include "views/admin/login.php";
	break;
	
	case "login":$adm->login($cnx);
	break;
	
	
	case "add1":include "views/admin/ajout.php";
	break;

	
	case "add":$adm->add($cnx);
	break;
	
	case "supp":$adm->supp($cnx);
	break;
	
	case "liste":$admins=$adm->liste($cnx);
	include "views/admin/liste_admin.php";
	break;
	
	case "edit1":$admin=$adm->detail($cnx);
	include "views/admin/modifier_admin.php";
	break;
	
	case "edit":$adm->edit($cnx);
	break;
}
?>