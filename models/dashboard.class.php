<?php
class dashboard extends fonction
{
private $pays;

public function __construct($pays)
{
$this->pays = $pays;
}


public function etat1($cnx){
	$results=$cnx->query("select * from inscrit where pays='".$this->pays."'")->fetchAll(PDO::FETCH_OBJ);
	return $results;
}

public function etat2($cnx){
	$results=$cnx->query("select email from inscrit where pays='".$this->pays."'")->fetchAll(PDO::FETCH_OBJ);
	return $results;
}

}
?>