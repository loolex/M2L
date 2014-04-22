<?php

include("_debut.inc.php");
include("_gestionBase.inc.php"); 
include("_controlesEtGestionErreurs.inc.php");
?>

<table class='table table-striped'>


         <form method="post" action="exec_ajouterformation.php">
            
        <tr>	
			<td>Nom de la formation: </td>
			<td><input type="text" name="nomformation" size="50" maxlength="45"/>
 		</tr>
 		<tr>
 		<td> description : </td>
 		<td><input type="text" name="description" /></td>
 		</tr>
 		<tr>
		<td> Date de la formation :</td>
		 <td><input type="date" name="dateformation" /></td>
		</tr>
<tr>
<td><input type="submit" value="Ajouter" nom="ajouterformation" /></td>
</tr>		
	</table>		
</form>
<p>
<td colspan='2' align='center'><a href='gestionformation.php'>Retour</a>
         </td>