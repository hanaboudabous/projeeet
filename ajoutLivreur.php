<?PHP
include "../entities/Livreur.php";
include "../core/LivreurC.php";

if (isset($_GET['id']) and isset($_GET['nom']) and isset($_GET['prenom'])and isset($_GET['email']) and isset($_GET['datedenaissance']) and isset($_GET['etat']) and isset($_GET['nbjtravail']) and isset($_GET['telephone'])){
$Livreur=new Livreur(($_GET['id']),($_GET['nom']),($_GET['prenom']),($_GET['email']), ($_GET['datedenaissance']), ($_GET['etat']),($_GET['nbjtravail']), ($_GET['telephone']));
//Partie2
/*
var_dump($Livreur1);
}
*/
//Partie3
$LivreurC=new LivreurC();
$LivreurC->ajouterLivreur($Livreur);
header('Location: ../back/livreur.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>

