<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../auth/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location:../auth/login.php");
  }
?>
<?php include("../config.php"); ?>
<?php if ($lang_ro) { ?> 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="keywords" content="<?php print($seo_keywords); ?>">
        <meta name="description" content="<?php print($seo_description); ?>">
        <meta property="og:url" content="<?php print($seo_link); ?>">
        <meta property="og:image" content="<?php print($logo); ?>">
        <meta name="twitter:image" content="<?php print($logo); ?>">
        <meta property="og:site_name" content="<?php print($seo_title); ?>">
        <meta name="author" content="<?php print($seo_title); ?>"> 
		<title><?php print($seo_title); ?></title>
		<link rel="icon" type="image/x-icon" href="<?php print($favicon); ?>">
		<link rel="icon" type="image/x-icon" href="<?php print($faviconloggedin); ?>">
		<link rel="stylesheet" href="../ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../sweetalert/dist/sweetalert.css">
		<link rel="stylesheet" href="../css/wtm.css">
		<?php if ($enable_ga) { ?>
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', '<?php print($ga_tracking_id); ?>', 'auto');
        ga('send', 'pageview');

        </script>
    <?php } ?>

	</head>
		<nav class="navbar navbar-expand-lg main-navbar">
			<div class="container-fluid">
			  <a class="navbar-brand" href="#dashboard">
			  	<img src="<?php print($logologgedin); ?>" alt="Logo">
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon">
			    	<i class="ion-navicon"></i>
			    </span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
				  <div class="mr-auto"></div>
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link smooth-link" href="index.php">Acasa</a>
			      </li>
			      <?php if ($enable_forum) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($forum_link); ?>">Forum</a>
			      </li>
    <?php } ?> 
	<?php if ($enable_vote) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($vote_link); ?>">Votati-ne</a>
			      </li>
    <?php } ?> 
	<?php if ($enable_store) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($store_link); ?>">Magazin</a>
			      </li>
    <?php } ?> 
				  <?php if ($launcher_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="./launcher.php">Launcher</a>
			      </li>
    <?php } ?> 
				 
	<?php if ($enable_discord) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($discord_invite); ?>">Discord</a>
			      </li>
    <?php } ?> 
	<?php if ($staffpanel_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($staffpanel_link); ?>">StaffPanel</a>
			      </li>
    <?php } ?> 
	<?php if ($teamspeak_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($teamspeak_link); ?>">TeamSpeak</a>
			      </li>
    <?php } ?> 
	<?php if ($custom_link1_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($custom_link1); ?>"><?php print($custom_link1_name); ?></a>
			      </li>
    <?php } ?> 
	<?php if ($custom_link2_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($custom_link2); ?>"><?php print($custom_link2_name); ?></a>
			      </li>
    <?php } ?> 
	<?php if ($custom_link3_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($custom_link3); ?>"><?php print($custom_link3_name); ?></a>
			      </li>
    <?php } ?> 
			    </ul>
				<?php if ($loginbutton) { ?>
								    <form class="form-inline">
				    <a href="index.php?logout='1'" class="btn smooth-link align-middle btn-primary"><?php echo $_SESSION['username'];?></a>
			    </form>
			      </li>
    <?php } ?> 
			  </div>
		  </div>
		</nav>
		<section class="hero bg-overlay" id="dashboard" data-bg="<?php print($backroundloggedin); ?>">
			<div class="text">
				<h1><span class="bold"><?php print($seo_title); ?></h1><br />
				<h3><span class="bold"><?php print($seo_description); ?></h3><br />
				<div class="cta">
				</div>
			</div>

		</section>
        <section class="padding bg-grey">
			<div class="container">
				<center><h2 class="section-title">Caracteristici</h2>
				<p class="section-lead text-muted">Aici puteți vedea o mică prezentare generală a tuturor lucrurilor minunate pe care le putem oferi în lansatorul nostru!.</p></center>
				<div class="section-body">
					<div class="row col-spacing">
						<div class="col-12 col-md-6 col-lg-4">
						<center> 
						    <article class="card">
							  <img class="card-img-top" src="https://cdn.upload.systems/uploads/R16m9Sz9.png" alt="Article Image">
							  <div class="card-body">
								  <div class="card-subtitle mb-2 text-muted"></div>
							    <h4 class="card-title"><a href="">Pagină de conectare</a></h4>
							    <p class="card-text">You can login with you email and your password from our website!</p>
						    </div>
						  </article>
                         </center>
					  </div>
					  <div class="col-12 col-md-6 col-lg-4">
					  <center>
							<article class="card">
							  <img class="card-img-top" src="https://media.discordapp.net/attachments/950049232662982686/1005130457416990760/unknown.png?width=1057&height=676" alt="Article Image">
							  <div class="card-body">
								  <div class="card-subtitle mb-2 text-muted"></div>
							    <h4 class="card-title"><a href="">Pagina principală</a></h4>
							    <p class="card-text">Aceasta este pagina noastră principală, puteți modifica setările acolo și vă puteți vedea pagina de profil!</p>
						    </div>
						  </article>
                         </center>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
					  <center>
							<article class="card">
							  <img class="card-img-top" src="https://cdn.upload.systems/uploads/R16m9Sz9.png" alt="Article Image">
							  <div class="card-body">
								  <div class="card-subtitle mb-2 text-muted"></div>
							    <h4 class="card-title"><a href="">Gratuit și rapid</a></h4>
							    <p class="card-text">Cea mai bună parte este că lansatorul nostru este gratuit și este mai bun decât 1 implicit!</p>
						    </div>
						  </article>
                         </center>
						</div>
					  </div>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-overlay padding" id="project" data-bg="../img/thelake.png">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-md-6">
						<div class="projects-details">
							
						<div class="projects-badge">
								NOU
							</div>
							<h2 class="projects-title">Ești gata să-l descarci?</h2>
							<a download href="../download/<?php print($launcherappname); ?>" class="more"> >> Descarca </a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="../js/jquery.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../js/jquery.easeScroll.js"></script>
		<script src="../sweetalert/dist/sweetalert.min.js"></script>
		<script src="../js/wtm.js"></script>
	</body>
</html>
                            <?php } ?> 
<?php if ($lang_en) { ?> 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="keywords" content="<?php print($seo_keywords); ?>">
        <meta name="description" content="<?php print($seo_description); ?>">
        <meta property="og:url" content="<?php print($seo_link); ?>">
        <meta property="og:image" content="<?php print($logo); ?>">
        <meta name="twitter:image" content="<?php print($logo); ?>">
        <meta property="og:site_name" content="<?php print($seo_title); ?>">
        <meta name="author" content="<?php print($seo_title); ?>"> 
		<title><?php print($seo_title); ?></title>
		<link rel="icon" type="image/x-icon" href="<?php print($favicon); ?>">
		<link rel="icon" type="image/x-icon" href="<?php print($faviconloggedin); ?>">
		<link rel="stylesheet" href="../ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../sweetalert/dist/sweetalert.css">
		<link rel="stylesheet" href="../css/wtm.css">
		<?php if ($enable_ga) { ?>
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', '<?php print($ga_tracking_id); ?>', 'auto');
        ga('send', 'pageview');

        </script>
    <?php } ?>

	</head>
		<nav class="navbar navbar-expand-lg main-navbar">
			<div class="container-fluid">
			  <a class="navbar-brand" href="#dashboard">
			  	<img src="<?php print($logologgedin); ?>" alt="Logo">
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon">
			    	<i class="ion-navicon"></i>
			    </span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
				  <div class="mr-auto"></div>
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link smooth-link" href="index.php">Home</a>
			      </li>
			      <?php if ($enable_forum) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($forum_link); ?>">Forum</a>
			      </li>
    <?php } ?> 
	<?php if ($enable_vote) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($vote_link); ?>">Vote</a>
			      </li>
    <?php } ?> 
	<?php if ($enable_store) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($store_link); ?>">Store</a>
			      </li>
    <?php } ?> 
				  <?php if ($launcher_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="./launcher.php">Launcher</a>
			      </li>
    <?php } ?> 
				 
	<?php if ($enable_discord) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($discord_invite); ?>">Discord</a>
			      </li>
    <?php } ?> 
	<?php if ($staffpanel_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($staffpanel_link); ?>">StaffPanel</a>
			      </li>
    <?php } ?> 
	<?php if ($teamspeak_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($teamspeak_link); ?>">TeamSpeak</a>
			      </li>
    <?php } ?> 
	<?php if ($custom_link1_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($custom_link1); ?>"><?php print($custom_link1_name); ?></a>
			      </li>
    <?php } ?> 
	<?php if ($custom_link2_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($custom_link2); ?>"><?php print($custom_link2_name); ?></a>
			      </li>
    <?php } ?> 
	<?php if ($custom_link3_enable) { ?>
					<li class="nav-item">	
			        <a class="nav-link smooth-link" href="<?php print($custom_link3); ?>"><?php print($custom_link3_name); ?></a>
			      </li>
    <?php } ?> 
			    </ul>
				<?php if ($loginbutton) { ?>
								    <form class="form-inline">
				    <a href="index.php?logout='1'" class="btn smooth-link align-middle btn-primary"><?php echo $_SESSION['username'];?></a>
			    </form>
			      </li>
    <?php } ?> 
			  </div>
		  </div>
		</nav>
		<section class="hero bg-overlay" id="dashboard" data-bg="<?php print($backroundloggedin); ?>">
			<div class="text">
				<h1><span class="bold"><?php print($seo_title); ?></h1><br />
				<h3><span class="bold"><?php print($seo_description); ?></h3><br />
				<div class="cta">
				</div>
			</div>

</section>
        <section class="padding bg-grey">
			<div class="container">
				<center><h2 class="section-title">Features</h2>
				<p class="section-lead text-muted">Here you can see a small overview of all the awesome things we can provide in our launcher!.</p></center>
				<div class="section-body">
					<div class="row col-spacing">
						<div class="col-12 col-md-6 col-lg-4">
						<center> 
						    <article class="card">
							  <img class="card-img-top" src="https://cdn.upload.systems/uploads/R16m9Sz9.png" alt="Article Image">
							  <div class="card-body">
								  <div class="card-subtitle mb-2 text-muted"></div>
							    <h4 class="card-title"><a href="example-game.php">Login Page</a></h4>
							    <p class="card-text">You can login with you email and your password from our website!</p>
						    </div>
						  </article>
                         </center>
					  </div>
					  <div class="col-12 col-md-6 col-lg-4">
					  <center>
							<article class="card">
							  <img class="card-img-top" src="https://media.discordapp.net/attachments/950049232662982686/1005130457416990760/unknown.png?width=1057&height=676" alt="Article Image">
							  <div class="card-body">
								  <div class="card-subtitle mb-2 text-muted"></div>
							    <h4 class="card-title"><a href="example-game.php">Main Page</a></h4>
							    <p class="card-text">This is our main page you can change you settings there and see you profile page!</p>
						    </div>
						  </article>
                         </center>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
					  <center>
							<article class="card">
							  <img class="card-img-top" src="https://cdn.upload.systems/uploads/R16m9Sz9.png" alt="Article Image">
							  <div class="card-body">
								  <div class="card-subtitle mb-2 text-muted"></div>
							    <h4 class="card-title"><a href="example-game.php">Free & Fast</a></h4>
							    <p class="card-text">The best part is that our launcher is free and its better then the default 1!</p>
						    </div>
						  </article>
                         </center>
						</div>
					  </div>
					</div>
				</div>
			</div>
		</section>
		<section class="bg-overlay padding" id="project" data-bg="../img/thelake.png">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-md-6">
						<div class="projects-details">
							
						<div class="projects-badge">
								BRAND NEW
							</div>
							<h2 class="projects-title">Are you ready to download it?</h2>
							<a download href="../download/<?php print($launcherappname); ?>" class="more"> >> Download </a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="../js/jquery.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../js/jquery.easeScroll.js"></script>
		<script src="../sweetalert/dist/sweetalert.min.js"></script>
		<script src="../js/wtm.js"></script>
	</body>
</html>
                            <?php } ?> 