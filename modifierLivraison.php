<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";
if (isset($_GET['num_livraison'])){
	$LivraisonC=new LivraisonC();
    $result=$LivraisonC->recupererLivraison($_GET['num_livraison']);
	foreach($result as $row){



		$num_livraison=$row['num_livraison'];
		$nom_client=$row['nom_client'];
		$prenom_client=$row['prenom_client'];
		$email=$row['email'];
		$adresse=$row['adresse'];
		$gouvernorat=$row['gouvernorat'];
        $ville=$row['ville'];
        $CodePostal=$row['CodePostal'];
        $telephone=$row['telephone'];
        $datelivraison=$row['datelivraison'];

?>
<HTML>
<head>
</head>
<body>
<form method="POST">
<table>
<caption>Modifier Livraison</caption>

<tr>
<td>num_livraison</td>
<td><input type="number" name="num_livraison" value="<?PHP echo $num_livraison ?>"></td>
</tr>
<tr>
<td>nom_client</td>
<td><input type="text" name="nom_client" value="<?PHP echo $nom_client ?>"></td>
</tr>
<tr>
<td>prenom_client</td>
<td><input type="text" name="prenom_client" value="<?PHP echo $prenom_client ?>"></td>
</tr>
<tr>
<td>email</td>
<td><input type="text" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td></td>
<td>adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<td>gouvernorat</td>
<td><input type="text" name="gouvernorat" value="<?PHP echo $gouvernorat ?>"></td>
</tr>
<tr>
<td></td>
<td>ville</td>
<td><input type="text" name="ville" value="<?PHP echo $ville ?>"></td>
</tr>
<tr>
<td></td>
<td>CodePostal</td>
<td><input type="text" name="CodePostal" value="<?PHP echo $CodePostal ?>"></td>
</tr>
<td>telephone</td>
<td><input type="text" name="telephone" value="<?PHP echo $telephone ?>"></td>
</tr>
<td>datedelivraison</td>
<td><input type="text" name="datelivraison" value="<?PHP echo $datelivraison ?>"></td>
<td>
	<?php
	$etat="non conge";
	$sql="SELECT * from livreur where etat='".$etat."'";
			$db = config::getConnexion();
					$liste=$db->query($sql);


	?>
	<label style="color:#757575">livreur</label>
                                        <select  name="liv" type="text">
                                        	<?php
                                        	foreach($liste as $raw){?>
                                            <option><?php echo $raw['nom'];?></option>
                                           <?php
                                    }
                                    ?>
                                        </select>
                                        
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="num_livraison" value="<?PHP echo $_GET['num_livraison'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Livraison=new Livraison($_POST['num_livraison'],$_POST['nom_client'],$_POST['prenom_client'],$_POST['email'],$_POST['adresse'],$_POST['gouvernorat'],$_POST['ville'],$_POST['CodePostal'],$_POST['telephone'],$_POST['datelivraison'],$_POST['liv']);

	$LivraisonC->modifierLivraison($Livraison,$_POST['num_livraison']);
	header('Location: afficherLivraison.php');
}
?>
</body>
</HTMl>