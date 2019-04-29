<?PHP
include "../core/LivreurC.php";
$LivreurC=new LivreurC();
$listeLivreurs=$LivreurC->afficherLivreurs();

//var_dump($listeLivreurs->fetchAll());
?>
<table border="1">
<tr>
<td>id</td>
<td>nom</td>
<td>prenom</td>
<td>email</td>
<td>datedenaissance</td>
<td>etat</td>
<td>nbjtravail</td>
<td>telephone</td>
</tr>

<?PHP
foreach($listeLivreurs as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['datedenaissance']; ?></td>
	<td><?PHP echo $row['etat']; ?></td>
	<td><?PHP echo $row['nbjtravail']; ?></td>
	<td><?PHP echo $row['telephone']; ?></td>
	<td><form method="POST" action="supprimerLivreur.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierLivreur.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>