<?php
require_once 'connexion.php';


if(isset($_POST['NomUtilisateur']) && isset($_POST['MotDePasse']))
{
    $NomUtilisateur=htmlspecialchars($_POST['NomUtilisateur']);
    $MotDePasse=htmlspecialchars($_POST['MotDePasse']);
    $MotDePasse=password_hash($MotDePasse, PASSWORD_DEFAULT);

    $verify=$db->prepare(' SELECT NomUtilisateur, MotDePasse FROM connect WHERE NomUtilisateur=?');
    $verify->execute(array($NomUtilisateur));
    $data=$verify->fetch();
    $row=$verify->rowcount();

    if($row==1){
             if($data['MotDePasse']===$MotDePasse){
                header('Location:index.html');
             }else header('Location:connect.php');
    }else header('Location:connect.php');
}else header('Location:connect.php');

?>