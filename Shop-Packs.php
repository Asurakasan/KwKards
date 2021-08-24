<?php session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="#SHOP PACK">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Shop Packs</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Shop-Packs.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.21.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    
    
    
    
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
    <meta name="twitter:title" content="Shop Packs">
    <meta name="twitter:description" content="Site1">
    <meta property="og:title" content="Shop Packs">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-7c9b"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Menu-Principal.php" data-page-id="30537498" class="u-image u-logo u-image-1" data-image-width="830" data-image-height="1026" title="Menu">
          <img src="images/Logo_KWKards.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="u-clearfix u-image u-section-1" id="sec-8f14" data-image-width="3000" data-image-height="1000">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-custom-color-1 u-text-1">
          <span class="u-text-custom-color-2">#</span>SHOP PACKS
        </h1>
        <div class="u-border-5 u-border-custom-color-1 u-line u-line-horizontal u-line-1"></div>
		<p class="u-align-center u-text u-text-custom-color-1 u-text-2">
          <span style="text-decoration: underline !important;"></span>Une possibilité d'ouvrir les portes de votre roster à un groupe de joueurs talentueux? 
Retrouvez les packs joueurs de la boutique KWKards!&nbsp;&nbsp;
        </p>
        <p class="u-align-center u-text u-text-custom-color-1 u-text-3">
          <span style="text-decoration: underline !important;"></span> A possibility to open the doors of your roster to a group of talented players? 
Find the player packs from the KWKards store!
        </p>
        <a href="Mes-Packs.php" data-page-id="540722547" class="u-border-2 u-border-custom-color-2 u-btn u-btn-round u-button-style u-none u-radius-50 u-btn-1">MES PACKS</a>
      </div>
    </section>
    <section class="u-border-2 u-border-custom-color-1 u-clearfix u-custom-color-1 u-section-2" id="sec-9e76">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div data-interval="5000" data-u-ride="carousel" class="u-carousel u-slider u-slider-1" id="carousel-f0bf">
          <ol class="u-absolute-hcenter u-carousel-indicators u-hidden u-carousel-indicators-1">
            <li data-u-target="#carousel-f0bf" class="u-active u-grey-30" data-u-slide-to="0"></li>
            <li data-u-target="#carousel-f0bf" class="u-grey-30" data-u-slide-to="1"></li>
            <li data-u-target="#carousel-f0bf" class="u-grey-30" data-u-slide-to="2"></li>
          </ol>
          <div class="u-carousel-inner" role="listbox">
            <div class="u-active u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <img class="u-align-center u-image u-image-default u-preserve-proportions u-image-1" src="images/PACKSPAWN.png" alt="" data-image-width="1428" data-image-height="1939">
				<form method="post" align="center">
				<input type="submit" name="ShopSpawn" id="ShopSpawn" value="2 500 K" class="u-border-2 u-border-custom-color-3 u-custom-color-2 u-hover-palette-1-light-1 u-radius-50 ">
				</form>
				<?php 
				
				if(isset($_POST['ShopSpawn']))
				{
					if($_SESSION['koins'] > 2500)
					{
						$_SESSION['spawn'] += 1;
						$_SESSION['koins'] -= 2500;
					}
				}
				?>
                </div>
            </div>
            <div class="u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-2">
                <img class="u-align-center u-image u-image-default u-preserve-proportions u-image-2" src="images/PACKCLAW.png" alt="" data-image-width="1198" data-image-height="1600">
                <form method="post" align="center">
				<input type="submit" name="ShopClaw" id="ShopClaw" value="5 000 K" class="u-border-2 u-border-custom-color-3 u-custom-color-2 u-hover-palette-1-light-1 u-radius-50 ">
				</form>
				<?php 
				
				if(isset($_POST['ShopClaw']))
				{
					if($_SESSION['koins'] > 5000)
					{
						$_SESSION['claw'] += 1;
						$_SESSION['koins'] -= 5000;
					}
				}
				?>
				</div>
            </div>
            <div class="u-carousel-item u-container-style u-slide u-carousel-item-3">
              <div class="u-container-layout u-container-layout-3">
                <img class="u-image u-image-default u-image-3" src="images/PACKKING.png" alt="" data-image-width="1223" data-image-height="1600">
                <form method="post" align="center">
				<input type="submit" name="ShopKing" id="ShopKing" value="10 000 K" class="u-border-2 u-border-custom-color-3 u-custom-color-2 u-hover-palette-1-light-1 u-radius-50 ">
				</form>
				<?php 
				
				if(isset($_POST['ShopKing']))
				{
					if($_SESSION['koins'] > 10000)
					{
						$_SESSION['king'] += 1;
						$_SESSION['koins'] -= 10000;
					}
				}
				?>
				</div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-spacing-5 u-text-grey-30 u-carousel-control-1" href="#carousel-f0bf" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
            </span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-spacing-5 u-text-grey-30 u-carousel-control-2" href="#carousel-f0bf" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
            </span>
            <span class="sr-only">Next</span>
          </a>
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
      <a class="u-link" href="https://nicepage.com/templates" target="_blank">
        <span>Template</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/html-website-builder" target="_blank">
        <span>HTML Layout generator</span>
      </a>. 
    </section>
  </body>
</html>