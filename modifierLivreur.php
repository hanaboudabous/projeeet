<?PHP
include "../entities/Livreur.php";
include "../core/LivreurC.php";
if (isset($_GET['id'])){
	$LivreurC=new LivreurC();
    $result=$LivreurC->recupererLivreur($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$email=$row['email'];
		$datedenaissance=$row['datedenaissance'];
		$etat=$row['etat'];
        $nbjtravail=$row['nbjtravail'];
        $telephone=$row['telephone'];

?>
<HTML>
<head>
</head>
<body>
<form method="POST">
<table>
<caption>Modifier Livreur</caption>

<tr>
<td>Id</td>
<td><input type="text" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>email</td>
<td><input type="text" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td></td>
<td>Datedenaissance</td>
<td><input type="text" name="datedenaissance" value="<?PHP echo $datedenaissance ?>"></td>
</tr>
<td>Etat</td>
<td><input type="text" name="etat" value="<?PHP echo $etat ?>"></td>
</tr>
<tr>
<td></td>
<td>Nbjtravail</td>
<td><input type="text" name="nbjtravail" value="<?PHP echo $nbjtravail ?>"></td>
</tr>
<tr>
<td></td>
<td>telephone</td>
<td><input type="number" name="telephone" value="<?PHP echo $telephone ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Livreur=new Livreur($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['datedenaissance'],$_POST['etat'],$_POST['nbjtravail'],$_POST['telephone']);
	$LivreurC->modifierLivreur($Livreur,$_POST['id']);
	echo $_POST['id'];
	header('Location: afficherLivreur.php');
}
?>
</body>
</HTMl