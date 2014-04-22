<?php

include("_debut.inc.php");
include("_gestionBase.inc.php"); 
include("_controlesEtGestionErreurs.inc.php");

// CONNEXION AU SERVEUR MYSQL PUIS SÉLECTION DE LA BASE DE DONNÉES gestion des formations

$connexion=connect();
if (!$connexion)
{
   ajouterErreur("Echec de la connexion au serveur MySql");
   afficherErreurs();
   exit();
}
if (!selectBase($connexion))
{
   ajouterErreur("La base de données gestion des formation est inexistante ou non accessible");
   afficherErreurs();
   exit();
}

$id = $_GET['idpersonnel'];
$nompersonnel=$_POST['nompersonnel'];
$adressepersonnel=$_POST['adressepersonnel'];
$codepostale=$_POST['codepostale'];
$ville=$_POST['ville'];
$datenaiss=$_POST['datenaiss'];
$salaire=$_POST['salaire'];

$sql="UPDATE personnel SET nompersonnel = '$nompersonnel', adressepersonnel = '$adressepersonnel', codepostale = '$codepostale', ville = '$ville',datenaiss = '$datenaiss',salaire = '$salaire' WHERE idpersonnel = $id";

 
  //exécution de la requête SQL:
  $requete = mysql_query($sql) or die( mysql_error() ) ;
 
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>
<p>
<td colspan='2' align='center'><a href='personnel.php'>Retour</a>
         </td>