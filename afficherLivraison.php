<?PHP
include "../core/LivraisonC.php";
$LivraisonC=new LivraisonC();
$listeLivraisons=$LivraisonC->afficherLivraison();


//var_dump($listeLivraisons->fetchAll());
?>
<table border="1">
<tr>
<td>num_livraison</td>
<td>nom_client</td>
<td>prenom_client</td>
<td>email</td>
<td>adresse</td>
<td>gouvernorat</td>
<td>ville</td>
<td>CodePostal</td>
<td>telephone</td>
<td>datelivraison</td>
</tr>

<?PHP
foreach($listeLivraisons as $row){
	?>
	<tr>
	<td><?PHP echo $row['num_livraison']; ?></td>
	<td><?PHP echo $row['nom_client']; ?></td>
	<td><?PHP echo $row['prenom_client']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['gouvernorat']; ?></td>
	<td><?PHP echo $row['ville']; ?></td>
	<td><?PHP echo $row['CodePostal']; ?></td>
	<td><?PHP echo $row['telephone']; ?></td>
	<td><?PHP echo $row['datelivraison']; ?></td>

	<td><form method="POST" action="supprimerLivraison.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['num_livraison']; ?>" name="num_livraison">
	</form>
	</td>
	<td><a href="modifierLivraison.php?num_livraison=<?PHP echo $row['num_livraison']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


