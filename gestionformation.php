
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
   ajouterErreur("La base de données festival est inexistante ou non accessible");
   afficherErreurs();
   exit();
}

// AFFICHER L'ENSEMBLE DES ÉTABLISSEMENTS
// CETTE PAGE CONTIENT UN TABLEAU CONSTITUÉ D'1 LIGNE D'EN-TÊTE ET D'1 LIGNE PAR
// ÉTABLISSEMENT

echo "
<a href='ajouterformation.php'> Ajouter une Formation </a></td>
<table class='table table-striped'>
   <tr class='enTeteTabNonQuad'>
      <td >Formation</td>
      <td align='center'>Description</td>
      <td align='center' >Début Formation</td>
      <td ></td>
      <td></td>
   </tr>";
     
   $req=afficherformation();
   $rsEtab=mysql_query($req, $connexion);
   $lgEtab=mysql_fetch_array($rsEtab);
   // BOUCLE SUR LES ÉTABLISSEMENTS
   while ($lgEtab!=FALSE)
   {
      $idformation=$lgEtab['idformation'];
      $nom=$lgEtab['nomformation'];
      $description=$lgEtab['description'];
      $dateformation=$lgEtab['dateformation'];

      echo "
      <tr class='ligneTabNonQuad'>
         <td >$nom</td>

         
         <td align='center'>$description</td>

   
         <td align='center'>$dateformation</td>
         
         <td >
         <a href='modifierformation.php?id=$idformation'>
         Modifier</a></td>
         
         <td > 
         <a href='suppressionformation.php?idformation=$idformation'>
         Supprimer</a></td>";
         
         // S'il existe déjà des attributions pour l'établissement, il faudra
         // d'abord les supprimer avant de pouvoir supprimer l'établissement
         
      $lgEtab=mysql_fetch_array($rsEtab);
   }   
   

?>





</table>
























