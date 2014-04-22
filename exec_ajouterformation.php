<?php

include("_debut.inc.php");
include("_gestionBase.inc.php"); 
include("_controlesEtGestionErreurs.inc.php");

// CONNEXION AU SERVEUR MYSQL PUIS SÉLECTION DE LA BASE DE DONNÉES gestion formation

$connexion=connect();
if (!$connexion)
{
   ajouterErreur("Echec de la connexion au serveur MySql");
   afficherErreurs();
   exit();
}
if (!selectBase($connexion))
{
   ajouterErreur("La base de données festival est inexistante ou non accessible");
   afficherErreurs();
   exit();
}

$nomformation = $_POST['nomformation']; 
$description = $_POST['description']; 
$dateformation = $_POST['dateformation'];


  $sql="INSERT INTO formation (nomformation, description, dateformation) 
  			values('$nomformation' , '$description' , '$dateformation') ";
 
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
<td colspan='2' align='center'><a href='gestionformation.php'>Retour</a>
         </td>