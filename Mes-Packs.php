<?php session_start();
	
?>


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="#MES PACKS">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Mes Packs</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Mes-Packs.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.21.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
   <?php  include 'Ukards.php'; ?>
    
    
    
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
    <meta name="twitter:title" content="Mes Packs">
    <meta name="twitter:description" content="Site1">
    <meta property="og:title" content="Mes Packs">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-7c9b"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Menu-Principal.php" data-page-id="30537498" class="u-image u-logo u-image-1" data-image-width="830" data-image-height="1026" title="Menu">
          <img src="images/Logo_KWKards.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="u-clearfix u-image u-section-1" id="sec-0538" data-image-width="3000" data-image-height="1000">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-custom-color-1 u-text-default u-text-1">
          <span class="u-text-custom-color-2">#</span>MES PACKS
        </h1>
        <div class="u-border-5 u-border-custom-color-1 u-line u-line-horizontal u-line-1"></div>
        <a href="Shop-Packs.php" data-page-id="646928615" class="u-border-2 u-border-custom-color-2 u-btn u-btn-round u-button-style u-none u-radius-50 u-btn-1">SHOP PACKS</a>
      </div>
    </section>
	
    <section class="u-clearfix u-custom-color-1 u-section-2" id="sec-c6f1">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-align-center u-text u-text-1">Contient : 5 kards argent&nbsp;<br>Contains : 5 kards silver
        </p>
        <p class="u-align-center u-text u-text-2">Contient : 3 kards argent / 2 or&nbsp;&nbsp;<br>Contains : 3 kards silver / 2 gold
        </p>
        <p class="u-align-center u-text u-text-3">Contient : 5 kards argent&nbsp;<br>Contains : 5 kards silver
        </p>
		<img class="u-image u-image-default u-preserve-proportions u-image-1" src="images/PACKSPAWN.png" alt="" data-image-width="1178" data-image-height="1600">
        <img class="u-align-center u-image u-image-default u-image-2" src="images/PACKCLAW.png" alt="" data-image-width="1198" data-image-height="1600">
        <img class="u-align-right u-image u-image-default u-image-3" src="images/PACKKING.png" alt="" data-image-width="1223" data-image-height="1600">
				<?php if($_SESSION['spawn'] < 1){
				
				}
				else 
				{?>
			
                <form method="post" align="center">
				<input type="submit" name="BTspawn" id="BTspawn" value="Open" data-page-id="18520067" class="u-border-2 u-border-custom-color-3 u-btn u-btn-round u-button-style u-custom-color-2 u-hover-palette-1-light-1 u-radius-50 u-btn-1">
				</form>
				<?php	}
				?>
			<?php if($_SESSION['claw'] < 1){
				
			}
			else 
			{?>
				
               <form method="post" align="center">
				<input type="submit" name="BTclaw" id="BTclaw" value="Open" data-page-id="18520067" class="u-border-2 u-border-custom-color-3 u-btn u-btn-round u-button-style u-custom-color-2 u-hover-palette-1-light-1 u-radius-50 u-btn-2">
				</form>
			<?php 
			} ?>
				<?php if($_SESSION['king'] < 1){
				
			}
			else 
			{?>
			
               <form method="post" align="center">
				<input type="submit" name="BTking" id="BTking" value="Open" data-page-id="18520067" class="u-border-2 u-border-custom-color-3 u-btn u-btn-round u-button-style u-custom-color-2 u-hover-palette-1-light-1 u-radius-50 u-btn-3">
				</form>
				<?php } 
            
			  ?>
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
      <a class="u-link" href="https://nicepage.com/html-templates" target="_blank">
        <span>HTML Template</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/html-website-builder" target="_blank">
        <span>HTML Designer</span>
      </a>. 
    </section>
  <section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-section-6" id="sec-887c">
      <div class="u-align-center u-container-style u-dialog u-radius-50 u-shape-round u-white u-dialog-1">
        <div class="u-container-layout u-container-layout-1">
          <h1 class="u-text u-text-default u-text-1">Vous êtes sur le point d'ouvrir un pack</h1>
          
		  <a href="#sec-c5ec" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-dialog-link u-hover-palette-1-light-1 u-radius-50 u-btn-1">VAlider</a>
        
		<form>
		</div><button class="u-dialog-close-button u-icon u-text-custom-color-3 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 16 16" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d4a3"></use></svg><svg class="u-svg-content" viewBox="0 0 16 16" x="0px" y="0px" id="svg-d4a3"><rect x="7" y="0" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="2" height="16"></rect><rect x="0" y="7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3138 8.0002)" width="16" height="2"></rect></svg></button>
      </form>
	  </div>
    </section><style>.u-section-6 {
  min-height: 862px;
}

.u-section-6 .u-dialog-1 {
  width: 610px;
  min-height: 153px;
  margin: 334px calc(((100% - 1140px) / 2) + 235px) 60px auto;
}

.u-section-6 .u-container-layout-1 {
  padding: 30px 35px 14px 30px;
}

.u-section-6 .u-text-1 {
  font-size: 1.875rem;
  font-weight: 700;
  margin: 14px 17px 0;
}

.u-section-6 .u-btn-1 {
  border-style: none;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 0.875rem;
  letter-spacing: 1px;
  background-image: none;
  margin: 14px auto 0;
}

.u-section-6 .u-icon-1 {
  width: 30px;
  height: 30px;
}

@media (max-width: 1199px) {
  .u-section-6 .u-dialog-1 {
    margin-right: calc(((100% - 940px) / 2) + 235px);
    height: auto;
  }

  .u-section-6 .u-text-1 {
    margin-left: 17px;
    margin-right: 17px;
  }
}

@media (max-width: 991px) {
  .u-section-6 .u-dialog-1 {
    margin-right: calc(((100% - 720px) / 2) + 110px);
  }

  .u-section-6 .u-container-layout-1 {
    padding-right: 30px;
  }
}

@media (max-width: 767px) {
  .u-section-6 .u-dialog-1 {
    width: 540px;
    margin-right: calc(((100% - 540px) / 2));
  }

  .u-section-6 .u-container-layout-1 {
    padding-left: 10px;
    padding-right: 10px;
  }
}

@media (max-width: 575px) {
  .u-section-6 .u-dialog-1 {
    width: 340px;
    margin-right: calc(((100% - 340px) / 2));
  }
}</style><section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-section-7" id="sec-c5ec">
      <div class="u-container-style u-dialog u-white u-dialog-1">
        <div class="u-container-layout u-container-layout-1">
          <div class="u-align-center u-expanded-width-sm u-expanded-width-xs u-preserve-proportions u-uploaded-video u-video u-video-contain u-video-1">
            <div class="embed-responsive">
              <video class="embed-responsive-item" playsinline="" data-autoplay="true">
                <source src="files/KWKanim-1.mp4" type="video/mp4">
                <p>Your browser does not support HTML5 video.</p>
              </video>
            </div>
            <div class="u-preserve-proportions-child" style="padding-top: 110.74%;"></div>
          </div>
		  <form method="post">
		  <input type="submit" name="fermer" id="fermer" value="X">
	   </div>
		</form>
	
	  </div>
    </section><style>.u-section-7 {
  min-height: 2760px;
}

.u-section-7 .u-dialog-1 {
  width: 1225px;
  min-height: 598px;
  height: auto;
  margin: 79px auto 60px;
}

.u-section-7 .u-container-layout-1 {
  padding: 0;
}

.u-section-7 .u-video-1 {
  width: 1221px;
  height: 597px;
  margin: 1px auto 0;
}

.u-section-7 .u-image-1 {
  width: 173px;
  height: 243px;
  animation-duration: 1000ms;
  margin: -318px auto 0 820px;
}

.u-section-7 .u-image-2 {
  width: 173px;
  height: 243px;
  animation-duration: 1000ms;
  margin: -243px auto 0 526px;
}

.u-section-7 .u-image-3 {
  width: 173px;
  height: 243px;
  animation-duration: 1000ms;
  margin: -243px auto 0 233px;
}

.u-section-7 .u-image-4 {
  width: 173px;
  height: 243px;
  animation-duration: 1000ms;
  margin: -475px auto 0 381px;
}

.u-section-7 .u-image-5 {
  width: 173px;
  height: 243px;
  animation-duration: 1000ms;
  margin: -243px auto 0 678px;
}

.u-section-7 .u-icon-1 {
  width: 20px;
  height: 20px;
}

@media (max-width: 1199px) {
  .u-section-7 .u-dialog-1 {
    width: 940px;
  }

  .u-section-7 .u-video-1 {
    width: 940px;
  }

  .u-section-7 .u-image-1 {
    width: 173px;
    height: 244px;
    margin-top: -318px;
    margin-left: 651px;
  }

  .u-section-7 .u-image-2 {
    width: 173px;
    height: 244px;
    margin-top: -244px;
    margin-left: 410px;
  }

  .u-section-7 .u-image-3 {
    width: 173px;
    height: 244px;
    margin-top: -244px;
    margin-left: 117px;
  }

  .u-section-7 .u-image-4 {
    width: 173px;
    height: 244px;
    margin-top: -476px;
    margin-left: 265px;
  }

  .u-section-7 .u-image-5 {
    width: 173px;
    height: 244px;
    margin-top: -244px;
    margin-left: 562px;
  }
}

@media (max-width: 991px) {
  .u-section-7 .u-dialog-1 {
    width: 720px;
  }

  .u-section-7 .u-video-1 {
    width: 720px;
  }

  .u-section-7 .u-image-1 {
    margin-left: 431px;
  }

  .u-section-7 .u-image-2 {
    margin-top: 20px;
    margin-left: 431px;
  }

  .u-section-7 .u-image-5 {
    margin-top: 20px;
    margin-left: 265px;
  }
}

@media (max-width: 767px) {
  .u-section-7 {
    min-height: 4600px;
  }

  .u-section-7 .u-dialog-1 {
    width: 540px;
    min-height: 453px;
  }

  .u-section-7 .u-container-layout-1 {
    padding-top: 0;
  }

  .u-section-7 .u-video-1 {
    height: auto;
    margin-top: -84px;
    margin-right: initial;
    margin-left: initial;
    width: auto;
  }

  .u-section-7 .u-image-1 {
    width: 113px;
    height: 159px;
    margin-top: -446px;
    margin-left: 144px;
  }

  .u-section-7 .u-image-2 {
    width: 113px;
    height: 159px;
    margin-top: -24px;
    margin-left: 46px;
  }

  .u-section-7 .u-image-3 {
    width: 113px;
    height: 159px;
    margin-top: -159px;
    margin-left: 381px;
  }

  .u-section-7 .u-image-4 {
    width: 113px;
    height: 159px;
    margin-top: -294px;
    margin-left: 290px;
  }

  .u-section-7 .u-image-5 {
    width: 113px;
    height: 159px;
    margin-top: -24px;
    margin-left: 209px;
  }
}

@media (max-width: 575px) {
  .u-section-7 .u-dialog-1 {
    width: 340px;
  }

  .u-section-7 .u-image-1 {
    margin-top: -446px;
    margin-left: 84px;
  }

  .u-section-7 .u-image-2 {
    margin-top: -244px;
    margin-left: 84px;
  }

  .u-section-7 .u-image-3 {
    margin-top: -244px;
    margin-left: 84px;
  }

  .u-section-7 .u-image-4 {
    margin-top: -294px;
    margin-left: 84px;
  }

  .u-section-7 .u-image-5 {
    margin-top: -244px;
    margin-left: 84px;
  }
}</style></body>
</html>