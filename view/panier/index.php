 
    
 <section class="page-section" id="panier">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12 text-center">
        <?php if(isset($_SESSION['panier']) && $_SESSION['totalpanier']!=0)
        {?>
        <fieldset>
    		<h3>Votre panier</h3>
        <table id="panier" style="width:90%">
        
        <tr><th>N&ordm;</th><th>Produit</th><th colspan="2">Prix</th><th>Supprimer</th></tr>
        	<?php 
        	$totalprix=0.00;
            foreach($variable['produit'] as $ligne)
            {
                $totalprix+=$ligne->prix_prod;
            ?>
        <tr id="lignepanier<?= $ligne->id_prod?>"><td><?= $ligne->id_prod?></td><td><?= $ligne->lib_prod?></td><td class="prix text-right" style="border-left:none"><?= $prix=($ligne->prix_prod!=null)?$ligne->prix_prod:0 ?></td><td class="text-left" > &euro;</td>
        	<td>
        		<button class="btn btn-primary" type="button" style="margin:10px" onclick="effacerpanier('lignepanier<?= $ligne->id_prod?>','<?= WEBROOT."panier/supprimerdupanier/".$ligne->id_prod ?>', '<?= WEBROOT."panier/total" ?>')">
          			[ - ]
        		</button>
        	</td>
        </tr>
            <?php 
            }
            ?>
            <tr class="ligne_total"><td class="ligne_total text-right" id="total_prix3"  colspan=2 >Total </td><td id="total_prix1" class="text-right"><?= $totalprix ?></td> <td class="text-left" id="total_prix2" > &euro;</td><td style="border:none"></td></tr>
        </table>
        </fieldset>
        </div>
        
         <div class="col-xs-12 col-md-12 col-lg-12 text-left">
         <?php if(isset($_SESSION['clients']) && isset($_SESSION['totalpanier'])){
            if($_SESSION['totalpanier'] !=0){         
       		echo "<a href='".WEBROOT."seconnecter/commander'>";
            }
            }else{
             echo "<a href='".WEBROOT."seconnecter' >";
            }            
            ?>
            <button class=" btn btn-primary" type="button" style="margin:20px" >
          			COMMANDER 
        	</button>
        	</a>
       	</div>
        <?php 
        }else{
            echo '<h2>Le panier est vide</h2>';
        }
        
        
        ?>
        
        
       	
       </div>
    </div>
</section>