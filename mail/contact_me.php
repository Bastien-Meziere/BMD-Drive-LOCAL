<?php
	$ent = $_POST['ent'];
    $nom = $_POST['nom'];
	$num = $_POST['num'];
	$fonction = $_POST['fonction'];
    
    $sujet="Formulaire de contact";
    $mailDestinataire="dylan.gouzien9@gmail.com";

	$from = "From: ".$nom." ".$num."\nMime-Version:\n"; 
	$from .= " 1.0\nContent-Type: text/html; charset=UTF-8\n";
	$header= $sujet;
	
	$messageMail = "
            Formulaire de contact:
            
            Nom Entreprise :   ".$ent."
            Nom :   ".$nom."
            Numéro de téléphone :   ".$num."
			Fonction :   ".$fonction."
            
           ";
	mail($mailDestinataire, $sujet, $messageMail, $from);

?>
