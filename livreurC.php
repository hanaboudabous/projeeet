<?PHP
include "../config.php";
class LivreurC {
function afficherLivreur ($Livreur){
		echo "id: ".$Livreur->getId()."<br>";
		echo "nom: ".$Livreur->getNom()."<br>";
		echo "prenom: ".$Livreur->getPrenom()."<br>";
		echo "email: ".$Livreur->getEmail()."<br>";
		echo "datedenaissance: ".$Livreur>getDatedenaissance()."<br>";
		echo "etat: ".$Livreur->getEtat()."<br>";
		echo "nbjtravail: ".$Livreur->getNbjtravail()."<br>";
		echo "telephone: ".$Livreur->getTelephone()."<br>";
		//) values (:cin, :nom,:prenom,:nbH,:tarifH)";
	}
	
	function ajouterLivreur($livreur){
		$sql="insert into Livreur (id,nom,prenom,email,datedenaissance,etat,nbjtravail,telephone) values (:id,:nom,:prenom,:email,:datedenaissance,:etat,:nbjtravail,:telephone)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $id=$livreur->getId();
        $nom=$livreur->getNom();
        $prenom=$livreur->getPrenom();
        $email=$livreur->getEmail();
        $datedenaissance=$livreur->getDatedenaissance();
        $etat=$livreur->getEtat();
        $nbjtravail=$livreur->getNbjtravail();
        $telephone=$livreur->getTelephone();
        

		$req->bindValue('id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':datedenaissance',$datedenaissance);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':nbjtravail',$nbjtravail);
		$req->bindValue(':telephone',$telephone);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherLivreurs(){
		//$sql="SElECT * From ReclamationRendezvous e inner join formationphp.ReclamationRendezvous a on e.cin= a.cin";
		$sql="SElECT * From Livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerLivreur($id){
		$sql="DELETE FROM Livreur where id=:id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierLivreur($Livreur,$id){
		$sql="UPDATE Livreur SET id=:id,nom=:nom,prenom=:prenom,email=:email,datedenaissance=:datedenaissance,etat=:etat,nbjtravail=:nbjtravail ,telephone=:telephone WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $id=$Livreur->getId();
        $nom=$Livreur->getNom();
		$prenom=$Livreur->getPrenom();
        $email=$Livreur->getEmail();
        $datedenaissance=$Livreur->getDatedenaissance();
        $etat=$Livreur->getEtat();
        $nbjtravail=$Livreur->getNbjtravail();
        $telephone=$Livreur->getTelephone();
                

   
		$datas = array(':id'=>$id,':nom'=>$nom,':prenom'=>$prenom, ':email'=>$email, ':datedenaissance'=>$datedenaissance,':etat'=>$etat,':nbjtravail'=>$nbjtravail,':telephone'=>$telephone);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':datedenaissance',$datedenaissance);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':nbjtravail',$nbjtravail);
		$req->bindValue(':telephone',$telephone);


		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererLivreur($id){
		$sql="SELECT * from Livreur where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	

	function triLivreur($recherche){
		
		$sql="SELECT * FROM Livreur WHERE etat='$recherche'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

	
}
function afficherlivreurtrier()
	{
		$sql="select * from livreur order by nbjtravail";
		$db=config::getConnexion();
		try
		{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}	
}

?>


