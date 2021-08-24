<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="#INSCRIPTION">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Inscription</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Inscription.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.21.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <?php 	include 'database.php';
						global $db; ?>
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"logo": "images/Logo_KWKards.png",
		"sameAs": [
				"https://twitter.com/name"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Inscription">
    <meta name="twitter:description" content="Site1">
    <meta property="og:title" content="Inscription">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-7c9b"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Menu-Principal.php" data-page-id="30537498" class="u-image u-logo u-image-1" data-image-width="830" data-image-height="1026" title="Menu">
          <img src="images/Logo_KWKards.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="u-clearfix u-image u-section-1" id="sec-b550" data-image-width="3000" data-image-height="1000">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-1">
          <span class="u-text-custom-color-2">#</span>
          <span class="u-text-white">INSCRIPTION</span>
        </h1>
        <div class="u-border-5 u-border-custom-color-1 u-line u-line-horizontal u-line-1"></div>
      </div>
    </section>
    <section class="u-clearfix u-custom-color-1 u-section-2" id="sec-55fd">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-custom-color-3 u-group u-radius-15 u-shape-round u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-align-center u-text u-text-default u-text-1">
              <span class="u-text-custom-color-2" style="font-weight: 700;">INSCRIPTION</span>
              <br>
            </h2>
            <div class="u-border-8 u-border-custom-color-1 u-line u-line-horizontal u-line-1"></div>
            <div class="u-align-center u-form u-form-1">
              <form action="#" method="POST" source="custom" name="form" style="padding: 10px;" >
                <div class="u-form-group u-form-name u-form-group-1">
                  <label for="name-234b" class="u-form-control-hidden u-label"></label>
                  <input type="text" placeholder="Entrez votre pseudo" id="pseudo" name="pseudo" class="u-border-4 u-border-custom-color-2 u-input u-input-rectangle u-radius-18 u-white" required="">
                </div>
                <div class="u-form-email u-form-group">
                  <label for="name-39a0" class="u-form-control-hidden u-label"></label>
                  <input type="email" placeholder="Entrez votre email" id="semail" name="semail" class="u-border-4 u-border-custom-color-2 u-input u-input-rectangle u-radius-18 u-white" required="required">
                </div>
                <div class="u-form-group u-form-group-3">
                  <label for="text-d446" class="u-form-control-hidden u-label"></label>
                  <input type="password" placeholder="Entrez  votre mot de passe" id="password" name="password" class="u-border-4 u-border-custom-color-2 u-input u-input-rectangle u-radius-18 u-white" required="required">
                </div>
                <div class="u-form-group u-form-group-4">
                  <label for="text-f4af" class="u-form-control-hidden u-label"></label>
                  <input type="password" id="text-f4af" name="cpassword" class="u-border-4 u-border-custom-color-2 u-input u-input-rectangle u-radius-18 u-white" required="required" placeholder="Confirmez votre mot de passe">
                </div>
                <div class="u-form-group u-form-group-5">
                  <label for="text-11ab" class="u-form-control-hidden u-label"></label>
                  <input type="text" placeholder="Pseudo Parrain" id="parrain" name="parrain" class="u-border-4 u-border-custom-color-2 u-input u-input-rectangle u-radius-18 u-white">
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <a href="#" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-1 u-radius-10 u-btn-1">INSCRIPTION<br>
                  </a>
                  <input type="submit" name="formsend" id="formsend" value="Inscription" class="u-form-control-hidden">
                </div>
              </form>
            </div>
            <p class="u-align-center u-text u-text-default u-text-2">J'ai déjà un compte.</p>
            <p class="u-align-center u-text u-text-default u-text-3">
              <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-custom-color-2 u-btn-2" href="Connexion.php" data-page-id="2616402609">Se connecter.</a>
            </p>
			<?php include 'signin.php'; ?>
			
          </div>
        </div>
      </div>
    </section>
    
    
    
    
    
    <footer class="u-align-center u-clearfix u-custom-color-3 u-footer u-footer" id="sec-2965"><div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-default u-text-1"> KWK&nbsp;<b>© 2021. Tous droits réservés.</b>
        </p>
        <div class="u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-text-black"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9a6e"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-9a6e"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
        </div>
        <img class="u-image u-image-default u-preserve-proportions u-image-1" src="images/Logo-021.png" alt="" data-image-width="167" data-image-height="164" data-href="https://kwkesport.com/">
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/website-builder" target="_blank">
        <span>Website Builder</span>
      </a>. 
    </section>
  </body>
</html>