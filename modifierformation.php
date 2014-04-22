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

// MODIFIER UN ÉTABLISSEMENT 

// Déclaration du tableau des civilités
$tabCivilite=array("M.","Mme","Melle");  


$id = $_GET['id']; 

// Si on ne "vient" pas de ce formulaire, il faut récupérer les données à partir 
// de la base (en appelant la fonction obtenirDetailEtablissement) sinon on 
// affiche les valeurs précédemment contenues dans le formulaire

   $req=modifierformation($id);
   $rsEtab=mysql_query($req, $connexion);
   $lgEtab=mysql_fetch_array($rsEtab);
   // BOUCLE SUR LES ÉTABLISSEMENTS

      
      $nomformation=$lgEtab['nomformation'];
      $description=$lgEtab['description'];
      $dateformation=$lgEtab['dateformation'];


echo "
<form method='POST' action='exec_modifformation.php?id=$id'>
   <input type='hidden' value='validerModifEtab' name='action'>
   <table class='table table-striped'>
   
      <tr class='enTeteTabNonQuad'>
         <td colspan='3'>$nomformation ($id)</td>
     
         <td><input type='hidden' value='$id' name='id'></td>
      </tr>";
      
      echo '
      <tr class="ligneTabNonQuad">
         <td> Nom*: </td>
         <td><input type="text" value="'.$nomformation.'" name="nomformation" size="50" 
         maxlength="45"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Description: </td>
         <td><input type="text" value="'.$description.'" name="description" 
         size="50" maxlength="45"></td>
      </tr>
      <tr class="ligneTabNonQuad">
         <td> Date Formation: </td>
         <td><input type="date" value="'.$dateformation.'" name="dateformation" 
         size="4" maxlength="5"></td>
      </tr>

      <tr>

</tr>       
     
   </table>';
   
   echo "
   <table align='center' cellspacing='15' cellpadding='0'>
      <tr>
         <td align='right'><input type='submit' value='Valider' name='valider'>
         </td>
         <td align='left'><input type='reset' value='Annuler' name='annuler'>
         </td>
      </tr>
      <tr>
         <td colspan='2' align='center'><a href='gestionformation.php'>Retour</a>
         </td>
      </tr>
   </table>
  
</form>";



?>