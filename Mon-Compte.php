<?php session_start();
	
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="#MON COMPTE">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Mon-Compte</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Mon-Compte.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.21.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    <?php 	include 'database.php';
						global $db;

		$req=$db->prepare("UPDATE USER SET koins = :koins, level = :level, xp = :xp, spawn = :spawn, claw = :claw, king = :king  
							WHERE  u_id = :id");
			$req->execute([
			'koins' => $_SESSION['koins'],
			'level' => $_SESSION['level'],
			'xp' => $_SESSION['xp'],
			'spawn' => $_SESSION['spawn'],
			'claw' => $_SESSION['claw'],
			'king' => $_SESSION['king'],
			'id' => $_SESSION['u_id']
			]);						?>
		
    
 
    
    
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
    <meta name="twitter:title" content="Mon-Compte">
    <meta name="twitter:description" content="Site1">
    <meta property="og:title" content="Mon-Compte">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-7c9b"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Menu-Principal.php" data-page-id="30537498" class="u-image u-logo u-image-1" data-image-width="830" data-image-height="1026" title="Menu">
          <img src="images/Logo_KWKards.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="u-clearfix u-image u-section-1" id="sec-c230" data-image-width="3000" data-image-height="1000">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-custom-color-2 u-text-1">
          <span class="u-text-custom-color-1">
            <span class="u-text-custom-color-2">#</span>MON
          </span>
          <span class="u-text-custom-color-1">COMPTE</span>
        </h2>
		<form method="post">
			<a href="#sec-24fa" class="u-border-2 u-border-custom-color-2 u-border-hover-palette-1-base u-btn u-btn-round u-button-style u-dialog-link u-hover-palette-1-base u-none u-radius-50 u-btn-1">deconnexion</a>
        </form>
		<div class="u-border-5 u-border-custom-color-1 u-line u-line-horizontal u-line-1"></div>
        <h6 class="u-align-right u-text u-text-custom-color-1 u-text-2"> : ​LEVEL&nbsp;</h6>
        <h5 class="u-align-right u-text u-text-custom-color-1 u-text-3">/ <span style="font-weight: 700;"><?php
		if($_SESSION['level'] == 1)
			{
		 echo 490;
		 } 
		if($_SESSION['level'] == 2)
			{
		echo 1990;
		 } 
		if($_SESSION['level'] == 3)
			{
		echo 4990;
		 } 
		if($_SESSION['level'] == 4)
			{
		echo 9990;
		 } 
		if($_SESSION['level'] == 5)
			{
		echo 19990;
		 } 
		if($_SESSION['level'] == 6)
			{
		echo 34990;
		 }
		if($_SESSION['level'] == 7)
			{
		echo 49990;
		 } ?>
		</span>
        </h5>
        <h5 class="u-align-right u-text u-text-custom-color-1 u-text-4">&nbsp;: XP</h5>
        <h6 class="u-align-right u-text u-text-custom-color-1 u-text-5"><?= $_SESSION['xp'] ;?></h6>
        <h6 class="u-align-center u-text u-text-custom-color-1 u-text-6"><?php
		if($_SESSION['xp'] > 490)
		{
		$_SESSION['level'] = 2;
		} 
		if($_SESSION['xp'] > 1990)
		{
		$_SESSION['level'] = 3;
		} 
		if($_SESSION['xp'] > 4990)
		{
		$_SESSION['level'] = 4;
		}
		if($_SESSION['xp'] > 9990)
		{
		$_SESSION['level'] = 5;
		}
		if($_SESSION['xp'] > 19990)
		{
		$_SESSION['level'] = 6;
		}
		if($_SESSION['xp'] > 34990)
		{
		$_SESSION['level'] = 7;
		}
		if($_SESSION['xp'] > 49990)
		{
		$_SESSION['level'] = 7;
		}
		echo($_SESSION['level']);?>
		<br>
        </h6>
        <img class="u-image u-image-default u-image-1" src="images/KWKoins.png.png" alt="" data-image-width="460" data-image-height="212">
        <h6 class="u-align-right u-text u-text-custom-color-1 u-text-7">KWKoins</h6>
        <h6 class="u-align-center u-text u-text-custom-color-1 u-text-8"><?=  $_SESSION['koins'] ;?></h6>
      </div>
    </section>
    <section class="u-clearfix u-custom-color-1 u-section-2" id="sec-38a7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-custom-color-3 u-text-default u-text-1">Pseudo :&nbsp; <span class="u-text-custom-color-2"><?= $_SESSION['pseudo'];?></span>&nbsp;
        </h1>
        <h1 class="u-text u-text-default u-text-2">Email : <span class="u-text-custom-color-2"><?= $_SESSION['email'];?></span>
        </h1>
        <h3 class="u-text u-text-default u-text-3">Date de création : <span class="u-text-custom-color-2"><?= $_SESSION['date'];?></span>
        </h3>
        <h3 class="u-text u-text-default u-text-4">Packs : <span class="u-text-custom-color-2"><?=  $_SESSION['claw'] ;?></span>
        </h3>
        <img class="u-image u-image-default u-preserve-proportions u-image-1" src="images/Logo_KWKards1.png" alt="" data-image-width="830" data-image-height="1026">
        <p class="u-text u-text-default u-text-5"> Parrain : <font color="#e71d36"><?=  $_SESSION['parrain'] ;?></font>
        </p>
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
      <a class="u-link" href="https://nicepage.com/" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  <section class="u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-section-5" id="sec-24fa">
      <div class="u-align-center u-container-style u-dialog u-radius-43 u-shape-round u-white u-dialog-1">
        <div class="u-container-layout u-valign-middle u-container-layout-1">
          <p class="u-text u-text-default u-text-1"> Vous êtes sur le point de vous déconnecter !</p>
		  <form method="post">
			<input type="submit" name="deconec" id="deconec" value="DECONNEXION"  >
			<?php 
			include 'logout.php'; ?>
		  </form>
			</a>
		  <form>
        </div>
		</form>
	  </div>
    </section><style>.u-section-5 {
  min-height: 862px;
}

.u-section-5 .u-dialog-1 {
  width: 527px;
  min-height: 156px;
  height: auto;
  margin: 406px calc(((100% - 1140px) / 2) + 277px) 60px auto;
}

.u-section-5 .u-container-layout-1 {
  padding: 14px 15px 14px 10px;
}

.u-section-5 .u-text-1 {
  font-size: 1.25rem;
  font-weight: 700;
  margin: 0 32px;
}

.u-section-5 .u-btn-1 {
  border-style: none;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 0.875rem;
  letter-spacing: 1px;
  background-image: none;
  margin: 13px auto 0;
}

.u-section-5 .u-icon-1 {
  width: 28px;
  height: 28px;
  background-image: none;
  left: auto;
  top: 13px;
  position: absolute;
  right: 19px;
}

@media (max-width: 1199px) {
  .u-section-5 .u-dialog-1 {
    margin-right: calc(((100% - 940px) / 2) + 277px);
  }

  .u-section-5 .u-text-1 {
    margin-left: 32px;
    margin-right: 32px;
  }
}

@media (max-width: 991px) {
  .u-section-5 .u-dialog-1 {
    margin-right: calc(((100% - 720px) / 2) + 193px);
  }
}

@media (max-width: 767px) {
  .u-section-5 .u-dialog-1 {
    margin-right: calc(((100% - 540px) / 2) + 13px);
  }

  .u-section-5 .u-container-layout-1 {
    padding-right: 10px;
  }
}

@media (max-width: 575px) {
  .u-section-5 .u-dialog-1 {
    width: 340px;
    margin-right: calc(((100% - 340px) / 2));
  }
}</style></body>
</html>