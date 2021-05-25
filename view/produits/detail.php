<script type="text/javascript">
  
  function fonctionpanier(prod) {
    var url = '<?= WEBROOT ?>panier/mettreaupanier/' + prod;
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url);
    xhr.onload = function() {
        if (xhr.status === 200) {
            console.log('=> ' + xhr.responseText);
        }
        else {
            console.log('=> !' + xhr.status);
        }
    };
    xhr.send();
    console.log(url);
  }
</script>



    <section class="section element-animate">

        <div class="container">
          <div class="row">
          <?php foreach($variable['produit'] as $ligne) {   ?>

              <div class="col-6">
                <div class="blog d-block d-lg-flex">
                  <img src="<?= IMAGE . '/images/illustration/' . $ligne->img_prod ?>" style="height: 100px;" /> <!-- Image des produits (chemin ect) -->
                  <div class="text-center">
                    <h3><?= $ligne->lib_prod ?></h3>  
                    <p><span class="badge badge-warning" style="font-size:16px"><?= $prix=($ligne->prix_prod!=null)?$ligne->prix_prod:0 ?> &euro; </span></p>             
                    <p><a onclick="fonctionpanier(<?= $ligne->id_prod ?>)" style="color: #000;" class="btn btn-primary btn-sm">Ajouter au panier</a></p>
                    </div>
                    </div>
                  </div>
                  <?php } ?>
              </div>
             </div>
             <br>
    </section>