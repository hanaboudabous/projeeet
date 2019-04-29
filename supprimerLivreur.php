<?PHP
include "../core/LivreurC.php";
$LivreurC=new LivreurC();
if (isset($_POST["id"])){
	$LivreurC->supprimerLivreur($_POST["id"]);
	header('Location:../back/livreur.php');
}

?>

