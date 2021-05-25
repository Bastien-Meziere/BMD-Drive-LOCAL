<div class="hero-wrap hero-bread" style="background-image: url('asset/images/contact.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Nous contacter</h1>
          </div>
        </div>
      </div>
    </div>
<!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Nous contacter</h2>
          <form method="post">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <input class="form-control" name="nom" type="text" placeholder="Votre nom *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" type="email" placeholder="votre email*" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" name="phone" type="tel" placeholder="votre téléphone*" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <textarea class="form-control" name="message" placeholder="Votre message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
    
                  <?php
                  if(isset($_POST['message'])){
                      $entete  = 'MIME-Version: 1.0' . "\r\n";
                      $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                      $entete .= 'From: ' . $_POST['email'] . "\r\n";

                      $message = '<h1>Message envoyé depuis la page Contact de BMD Drive</h1>
                      <p><b>Nom : </b>' . $_POST['nom'] . '<br>
                      <b>Email : </b>' . $_POST['email'] . '<br>
                      <b>Téléphone : </b>' . $_POST['phone'] . '<br>
                      <b>Message : </b>' . $_POST['message'] . '</p>';

                      $retour = mail('Bmdrive53@gmail.com', 'Envoi depuis page Contact', $message, $entete);
                      if($retour) {
                          echo '<p>Votre message a bien été envoyé.</p>';
                      }
                  }
                  ?>
        </div>
      </div>
    </div>
  </section>
      