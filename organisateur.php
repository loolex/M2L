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

?>

<?php
// AFFICHER L'ENSEMBLE DES ÉTABLISSEMENTS
// CETTE PAGE CONTIENT UN TABLEAU CONSTITUÉ D'1 LIGNE D'EN-TÊTE ET D'1 LIGNE PAR
// ÉTABLISSEMENT

echo "
<a href='ajouterorganisateur.php'> Ajouter un organisateur </a></td>
<table class='table table-striped'>
   <tr class='enTeteTabNonQuad'>
      <td>Nom et Prenom</td>
      <td>Ville</td>
      <td>Date de naissance</td>
      <td>Salaire</td>
      <td></td>
      <td></td>
   </tr>";
     
   $req=afficherorganisateur();
   $rsEtab=mysql_query($req, $connexion);
   $lgEtab=mysql_fetch_array($rsEtab);
   // BOUCLE SUR LES ÉTABLISSEMENTS
   while ($lgEtab!=FALSE)
   {
      $id=$lgEtab['idorganisateur'];
      $nom=$lgEtab['nomorganisatuer'];
      $ville=$lgEtab['ville'];
      $datenaiss=$lgEtab['datenaiss'];
      $salaire=$lgEtab['salaire'];


      echo "
      <tr class='ligneTabNonQuad'>
         <td>$nom</td>
         <td>$ville</td>
         <td>$datenaiss</td>
         <td >$salaire</td>
         
         <td > 
         <a href='modifierorganisateur.php?idorganisateur=$id'>
         Modifier</a></td>
         
         <td > 
         <a href='suppressionorganisateur.php?idorganisateur=$id'>
         Supprimer</a></td>";
         
      $lgEtab=mysql_fetch_array($rsEtab);
   }   
   
?>
</table>