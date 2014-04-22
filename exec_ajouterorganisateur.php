<?php

include("_debut.inc.php");
include("_gestionBase.inc.php"); 
include("_controlesEtGestionErreurs.inc.php");

// CONNEXION AU SERVEUR MYSQL PUIS SÉLECTION DE LA BASE DE DONNÉES festival

$connexion=connect();
if (!$connexion)
{
   ajouterErreur("Echec de la connexion au serveur MySql");
   afficherErreurs();
   exit();
}
if (!selectBase($connexion))
{
   ajouterErreur("La base de données gestion formation est inexistante ou non accessible");
   afficherErreurs();
   exit();
}

$nomorganisateur = $_POST['nomorganisateur']; 
$ville = $_POST['ville']; 
$datenaiss = $_POST['datenaiss']; 
$salaire = $_POST['salaire']; 


  $sql="INSERT INTO organisateur (nomorganisatuer,ville,datenaiss,salaire) 
  values('$nomorganisateur', '$ville' , '$datenaiss', '$salaire' ) ";
 
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
<td colspan='2' align='center'><a href='organisateur.php'>Retour</a>
         </td>