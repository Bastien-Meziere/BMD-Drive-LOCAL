
    <section class="home-slider-loop-false  inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('asset/img/bretagne.jpg');">

        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 element-animate">
              <h1>Nos produits</h1>
              
            </div>
          </div>
        </div>

      </div>

    </section>


    <section class="section element-animate" >
        
          <div class="container">
             <div class="row">
              <?php foreach($variable['categorie'] as $ligne) {   ?>
          
              <div class="col-3">
                <div class="blog d-block d-lg-flex">
                  <div class="topela bg-image" style="background-image: url(<?= IMAGE . $ligne->img_cat  ?>);"></div>
                  <div class="text-center">
                    <h3 class="topela"><?= $ligne->lib_cat ?></h3>  
                    <img src="<?= IMAGE . '/images/illustration/' . $ligne->img_cat ?>" style="height: 170px;" />             
                    <p><a href="<?= WEBROOT.'produits/detail/' .$ligne->id_cat ?>" class="container btn btn-primary btn-sm">Voir les produits</a></p>
                    
                  </div>
              </div>
             </div>
              <?php } ?>
             </div>
             </div>
             <br>
            
    </section>  