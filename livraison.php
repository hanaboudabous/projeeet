<?PHP


class Livraison{
	private $num_livraison;
	private $nom_client;
	private $prenom_client;
	private $email;
	private $adresse;
	private $gouvernorat;
	private $ville;	
	private $CodePostal;	
	private $telephone;
	private $datelivraison;
		private $nom_livreur;

	function __construct($num_livraison,$nom_client,$prenom_client,$email,$adresse,$gouvernorat,$ville,$CodePostal,$telephone,$datelivraison,$nom_livreur){
		$this->num_livraison=$num_livraison;
		$this->nom_client=$nom_client;
		$this->prenom_client=$prenom_client;
		$this->email=$email;
		$this->adresse=$adresse;
		$this->gouvernorat=$gouvernorat;
		$this->ville=$ville;
        $this->CodePostal=$CodePostal;
        $this->telephone=$telephone;
        $this->datelivraison=$datelivraison;
                $this->nom_livreur=$nom_livreur;


	}
		function getnum_livraison(){
		return $this->num_livraison;
	}
	function getnom_livreur(){
		return $this->nom_livreur;
	}
	
	function getnom_client(){
		return $this->nom_client;
	}
	function getprenom_client(){
		return $this->prenom_client;
	}
	function getemail(){
		return $this->email;
	}
	function getadresse(){
		return $this->adresse;
	}
	function getgouvernorat(){
		return $this->gouvernorat;
	}function getville(){
		return $this->ville;
	}
    function getCodePostal(){
		return $this->CodePostal;
	}
    function gettelephone(){
		return $this->telephone;
	}
    function getdatelivraison(){
		return $this->datelivraison;
	}
    


	function setnum_livraison($num_livraison){
		$this->num_livraison=$num_livraison;
	}
	function setnom_client($nom_client){
		$this->nom_client=$nom_client;
	}
	function setprenom_client($prenom_client){
		$this->prenom_client=$prenom_client;
	}
	function setemail($email){
		$this->email=$email;
	}
	function setadresse($adresse){
		$this->adresse=$adresse;
	}
	function setgouvernorat($gouvernorat){
		$this->gouvernorat=$gouvernorat;
	}
	function setville($ville){
		$this->ville=$ville;
	}
	function setCodePostal($CodePostal){
		$this->CodePostal=$CodePostal;
	}	
	function settelephone($telephone){
		$this->telephone=$telephone;
	}	
	function setdatelivraison($datelivraison){
		$this->datelivraison=$datelivraison;
	}	

}

?>