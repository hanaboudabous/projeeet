<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";
$Livraison=new Livraison(75757575,'BEN Ahmed','Salah',50,20);
$LivraisonC=new livraisonC();
$LivraisonC->afficherLivraison($livraison);
echo "****************";
echo "<br>";
echo "num_livraison:".$Livraison->getnum_livraison();
echo "<br>";
echo "nom_client:".$Livraison->getnom_client();
echo "<br>";
echo "prenom_client:".$Livraison->getprenom_client();
echo "<br>";
echo "email:".$Livraison->getemail();
echo "<br>";
echo "adresse:".$Livraison->getadresse();
echo "<br>";
echo "gouvernorat:".$Livraison->getgouvernorat();
echo "<br>";
echo "ville:".$Livraison->getville();
echo "<br>";
echo "<br>";
echo "CodePostal:".$Livraison->getCodePostal();
echo "<br>";
echo "<br>";
echo "telephone:".$Livraison->gettelephone();
echo "<br>";
echo "<br>";



?>