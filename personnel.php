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
<a href='ajouterpersonnel.php'> Ajouter un membre de la M2L </a></td>
<table class='table table-striped'>
   <tr class='enTeteTabNonQuad'>
      <td >Nom et Prenom</td>
      <td >Adresse</td>
      <td >Code Postale</td>
      <td >Ville</td>
      <td >Date de naissance</td>
      <td >Salaire</td>
      <td ></td>
      <td></td>
   </tr>";
     
   $req=afficherpersonnel();
   $rsEtab=mysql_query($req, $connexion);
   $lgEtab=mysql_fetch_array($rsEtab);
   // BOUCLE SUR LES ÉTABLISSEMENTS
   while ($lgEtab!=FALSE)
   {
      $idpersonnel=$lgEtab['idpersonnel'];
      $nom=$lgEtab['nompersonnel'];
      $adressepersonnel=$lgEtab['adressepersonnel'];
      $codepostale=$lgEtab['codepostale'];
      $ville=$lgEtab['ville'];
      $datenaiss=$lgEtab['datenaiss'];
      $salaire=$lgEtab['salaire'];


      echo "
      <tr class='ligneTabNonQuad'>
         <td >$nom</td>
         <td >$adressepersonnel</td>
         <td >$codepostale</td>
         <td >$ville</td>
         <td >$datenaiss</td>
         <td >$salaire</td>
         
         <td > 
         <a href='modifierpersonnel.php?idpersonnel=$idpersonnel'>
         Modifier</a></td>
         
         <td > 
         <a href='suppressionpersonnel.php?idpersonnel=$idpersonnel'>
         Supprimer</a></td>";
         
      $lgEtab=mysql_fetch_array($rsEtab);
   }   
   ?>
</table>
