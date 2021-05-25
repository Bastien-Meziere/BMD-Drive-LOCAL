<?php
include('controller/Panier.php');
class Seconnecter extends Controller
{
    public $panier;
    function index(){
        $variable["test"]=array('titre'=>'Accueil', 'description'=>'trop de blabla');
        $this-> set($variable);
        $this->render('index');
    }
    
    function connect($personne=null){
        $login=null;
        $mdp=null;
        
        if(isset($_POST['login']) && isset($_POST['mdp'])){
            $login=$_POST['login'];
            $mdp=$_POST['mdp'];
        }
        
        $tables = Model::load("clients");        
        $tableRes['variable']=
        array("clients"=>$tables->find(Model::connexion(), 
            array('condition'=>"login_cli='".$login."' and mdp_cli='".md5($mdp)."'")));
        Model::deconnexion();
       
        
        if(count($tableRes['variable']['clients']) ==1 || isset($_SESSION['clients'])){
            $_SESSION['clients']=$tableRes['variable']['clients'];
            //var_dump($_SESSION['clients']);
            $this->render('connexion');
        }else{
            $this->render('inscription');
            echo ("Mdp ou identifiant incorrect");
        }
        
        //$this-> set($tableRes);
        
    }
    
    function deconnect(){
        unset($_SESSION['clients']);
        header('Location:'.WEBROOT.'seconnecter'); 
    }
    function commander(){
        //L'appel de cette commande se fait seulement si des produits ont déjà été commander donc pas besoin
        // de faire une verification dessus
        $oui="(";
        foreach($_SESSION['panier'] as $ligne => $value){
            $oui.=$ligne.",";
        }
        $oui.="0)";
        $produit = Model::load("produit");
        $produitRes = array("produit"=>$produit->find(Model::connexion(), array('condition'=>"id_prod in $oui")));
        $variables['cmde']=array('mescommandes'=>$produitRes['produit']);
        $this->set($variables);
        Model::deconnexion();
        $today = date("Y-m-d");
        $idCli = $_SESSION['clients'][0]->id_cli;
        $total = 0;
        foreach($produitRes['produit'] as $ligne => $prop){
            $total = $total + $prop -> prix_prod;
        }
        $data= array(
            "id_cli"=>$idCli,
            "date_com"=>$today,
            "total_com"=>$total
        );
        $tabCom = Model::load("commande");
        $tabCom -> save(Model::connexion(),$data);
        
        $lcommandeRes = array("produit"=>$tabCom->find(Model::connexion(), array('condition'=>"id_cli = $idCli && date_com = '$today' && total_com = $total")));
        Model::deconnexion();
        
        $tabLCom = Model::load("lcommande");
        foreach($produitRes['produit'] as $ligne => $prop) {
            $data2 = array(
                "id_com"=>$lcommandeRes['produit'][0]->id_com,
                "id_prod"=>$prop -> id_prod
            );
            $tabLCom -> save(Model::connexion(),$data2);
        }
        Model::deconnexion();
        $_SESSION['panier'] = null;
        
        $this->render('commander');
    }
    
    function commanderfinaliser(){
        
       $this->render('commanderfinaliser');
        
    }
    
   function inscription() {
        if (!isset($_POST['pseudo'])) {
            $this->render('inscription');
        } else {
             //Charger la table auteur
            $table = Model::load("clients");
            $tableRes['variable']= $table->find(Model::connexion(), array('condition'=>"login_cli=". $_POST["pseudo"]));

            if(count($tableRes['variable']) < 1) {
            $data = array(
                "login_cli"=>$_POST["pseudo"],
                "mdp_cli"=> md5($_POST["mdp"]),
                "nom_cli"=>$_POST["nom"],
                "prenom_cli"=>$_POST["prenom"],
                "rue_cli"=>$_POST["rue"],
                "cp_cli"=>$_POST["cp"],
                "ville_cli"=>$_POST["ville"],
                "tel_cli"=>$_POST["telephone"],
                "email_cli"=>$_POST["email"],
                "img_cli"=> "personne.png",
                "desc_cli" => "Pas de description"
            );

            $_SESSION['auteurtmp']['mdp']=$_POST["mdp"];
            $_SESSION['auteurtmp']['login']=$_POST["pseudo"];

            $table -> save(Model::connexion(), $data);
            Model::deconnexion();
            //Charger l'image
           if ((isset($_FILES['images']['tmp_name'])&&($_FILES['images']['error'] == UPLOAD_ERR_OK))) {
                $chemin_destination = "<?= IMAGE?>";
                move_uploaded_file($_FILES['images']['tmp_name'], $chemin_destination.$_FILES['images']['name']); 
            //Se connecter
            }

             header('location:'.WEBROOT.'seconnecter/connect');
        } else {
            // Add message "Ce pseudo est déja pris"
            // $this->render('connexion');
            header('location:'.WEBROOT.'seconnecter/connect');
        }
    }          
}
    
    function modifier(){
        $this->render('connexion');
    }
    
    function ajouterblague(){
        
    }
    
    function ajouterCB(){
        
    }
    
    function modifierCB($i){
        
    }
    function facture(){
        
    }
}
?>
