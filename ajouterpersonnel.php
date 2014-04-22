<?php

include("_debut.inc.php");
include("_gestionBase.inc.php"); 
include("_controlesEtGestionErreurs.inc.php");
?>

<table class='table table-striped'>

         <form method="post" action="exec_ajouterpersonnel.php">
      <tr>  
		<td>Nom et Prenom: </td>
      <td><input type="text" name="nompersonnel" /></td>
 		</tr> 
      <tr> 
      <td>Adresse :</td>
       <td><input type="text" name="adressepersonnel" /></td>
		</tr> 
      <tr> 
      <td>Code Postal : </td>
      <td><input type="text" name="codepostale" /></td>
      </tr> 
      <tr> 
      <td>Ville :</td>
      <td><input type="text" name="ville" /></td>
      </tr> 
      <tr> 
      <td>Date de naissance :</td>
      <td><input type="text" name="datenaiss" /></td>
      </tr> 
      <tr> 
      <td>Salaire :</td>
      <td><input type="text" name="salaire" /></td>
		</tr> 
           
<tr> 
<td><input type="submit" value="Ajouter" nom="ajouterpersonnel" />
</tr> 			
			
</form>
<p>
<td colspan='2' align='center'><a href='personnel.php'>Retour</a>
         </td>
         