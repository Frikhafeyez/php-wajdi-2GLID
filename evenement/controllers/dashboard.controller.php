<?php //session_start();
include "models/fonction.class.php";
include "models/dashboard.class.php";

//initialisation des parametres

$fn=new fonction();
$pays="";

//recupétation des variables externes

if(isset($_REQUEST['pays']))
$pays=$_REQUEST['pays'];


//creation de l'objet
$insc=new dashboard($pays);

switch($action){
	case "index":include "views/dashboard/index.php";
	break;
	
	case "etat1":$results=$insc->etat1($cnx);
	include "views/dashboard/etat1.php";
	break;
	
	case "pdfetat1":$results=$insc->etat1($cnx);
	include "views/dashboard/pdfetat1.php";
	break;
	
	case "exceletat1":$results=$insc->etat1($cnx);
	include "views/dashboard/exceletat1.php";
	break;
	
	case "etat2":$results=$insc->etat2($cnx);
	include "views/dashboard/etat2.php";
	break;
}
?>