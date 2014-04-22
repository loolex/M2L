<?php

include("_debut.inc.php");
include("_gestionBase.inc.php"); 
include("_controlesEtGestionErreurs.inc.php");
?>
<table class='table table-striped'>


         <form method="post" action="exec_ajouterorganisateur.php">
        <tr>   
		<td>Nom et Prenom: </td>
			<td><input type="text" name="nomorganisateur" size="50" maxlength="45"/></td>
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
<td><input type="submit" value="Ajouter" nom="ajouterorganisateur" /></td>
</tr>			
		</table>	
</form>
<p>
<td colspan='2' align='center'><a href='organisateur.php'>Retour</a>
         </td>