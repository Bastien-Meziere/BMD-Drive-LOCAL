<?php class produits extends Controller{
    
    function index(){
        $tables = Model::load("categorie");
        $tableRes['variable']=array("categorie"=>$tables->find(Model::connexion()));
        Model::deconnexion();
       
        $this-> set($tableRes);
        $this->render('index');
        
    }
    
    function detail($i){
        $tables = Model::load("produit");
        $id=(int)$i;
        $tableRes['variable']=array("produit"=>$tables->find(Model::connexion(), array('condition'=>"id_cat=$id", )), "param"=>$i);
        Model::deconnexion();

        $this-> set($tableRes);
        $this->render('detail');
    }
        

}
?>