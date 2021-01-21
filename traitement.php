<?php
require_once 'connexion.php';


$email= $_POST['EMAIL'];
$nom = $_POST['NOM'];
$prenom = $_POST['PRENOM'];
$naissance = $_POST['DATE'];
$formation= $_POST['FORMATION'];


$preparation =$db -> prepare('INSERT INTO monprojet(EMAIL,NOM,PRENOM,DATE,FORMATION) VALUES(?, ?, ?,?,?)');
$data=array($email,$nom,$prenom,$naissance,$formation);
$preparation -> execute($data);


?>