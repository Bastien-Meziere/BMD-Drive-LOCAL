<?php

header('Content-Type: application/json');

try {  
		$bd="2018-bmdrive_";
        $login="2018-bmdrive";
        $mdp="123456";      
        $pdo=new PDO("mysql:host=localhost;dbname=".$bd,$login,$mdp);
       	$retour["success"] = true;
		$retour["message"] = "Connexion à la base de donnée réussie";

} catch (Exception $e){
	$retour["success"] = false;
	$retour["message"] = "Connexion à la base de donnée impossible";
}

$requete = $pdo->prepare("SELECT * FROM clients c INNER JOIN commande com ON c.id_cli = com.id_cli");    
		   
			$requete->execute();    
			$resultats=$requete->fetchAll(PDO::FETCH_OBJ);    
			$retour["titre"]="Voici les	commandes des clients";        
			$modifligne=array();    
			$modif=array();    
			foreach($resultats as $ligne)
				{        
					foreach ($ligne as $key => $value)
						{            
							$value=htmlspecialchars((string) $value);            
							$value=str_replace(',',' ',$value);            
							$modif=array_merge($modif,array($key => $value));

        				}        
        				array_push($modifligne,$modif);    
				 }        			  
        			$retour["clientcom"]=$modifligne;    
        			

         		

echo json_encode($retour);

 