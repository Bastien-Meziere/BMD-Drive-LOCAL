<?php
class Panier extends Controller
{
    function index(){
             
        $test="";
        if(isset($_SESSION['panier'])){
            $test="(";
            foreach($_SESSION['panier'] as $ligne =>$value){
                $test.=$ligne.",";
            }
            $test.="0)";
        }
        $tables = Model::load("produit");
        $tableRes['variable']=array("produit"=>$tables->find(Model::connexion(), array('condition'=>"id_prod in $test")));
        Model::deconnexion();
        $this-> set($tableRes);
        $this->render('index');
    }
    
    function mettreaupanier($i){
        
        $_SESSION['test']=false;
        if (!isset($_SESSION['panier'])) 
        {             
            $_SESSION['panier'][$i]=1;   
            $_SESSION['totalpanier']=count($_SESSION['panier']);
            echo $_SESSION['totalpanier'];
           // echo "<script type='text/javascript'>session(".$_SESSION['totalpanier'].")</script>";
        } else {
            
            foreach($_SESSION['panier'] as $ligne => $value){
                //var_dump($ligne);
                if($ligne==$i){
                    
                    $_SESSION['test']=true;
                   
                }
            }
           // echo "test2";
          //  var_dump($_SESSION['test']);
            
            if($_SESSION['test']==true){  
              //  echo "tesst";
               // var_dump($_SESSION['test']);
               //echo "<script type='text/javascript'> window.alert('Vous avez d�j� ce produit!!');</script>";
            }else{
                $_SESSION['panier'][$i]=1;
            }
          //  var_dump($_SESSION['panier'][$i]);
            $_SESSION['totalpanier']=count($_SESSION['panier']);
            
            if($_SESSION['test']!=false) echo "false";
            else echo $_SESSION['totalpanier'];
        }
       //echo "<script type='text/javascript'>session(".$_SESSION['totalpanier'].");</script>";
        
    }
    
    function total(){
        $total=$_SESSION['totalpanier'];
       echo $total;
    }
   
     
    function supprimerdupanier($i){
        foreach($_SESSION['panier'] as $ligne => $value){
                if($ligne==$i){                    
                    unset($_SESSION['panier'][$ligne]);                    
                }        
        }
        $_SESSION['totalpanier']=count($_SESSION['panier']);
        echo $_SESSION['totalpanier'];
    }
    
}