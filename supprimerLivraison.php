<?PHP
include "../core/livraisonC.php";
$LivraisonC=new LivraisonC();
if (isset($_POST["num_livraison"])){
	$LivraisonC->supprimerLivraison($_POST["num_livraison"]);
	header('Location: ../back/livdispo.php');
}

?>