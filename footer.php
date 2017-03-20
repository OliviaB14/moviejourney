<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/footer.css" type="text/css" />


<div class="container-fluid">
	<footer>
		<div class="row">
			<div class="col-lg-4 col-md-6" id="navigation">
				<h4>Navigation</h4>
				<ul id="footer-nav">
					<li><a href="index.php">Accueil</a></li>
					<li><a href="movies.php">Lieux cultes</a></li>
					<?php if($connect){ ?>
					<li><a href="circuit.php">Mes circuits</a></li>
					<?php } else { ?>
					<li><a href="selection.php">Selection de circuits</a></li>
					<?php } ?>
					<li><a href="apropos.php">A propos</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
			<div class="col-lg-4 col-xs-12" id="infos">
				<h4>Infos pratiques</h4>
				<ul class="footer-list">
					<li>Qui sommes-nous ?</li>
					<li>Découvrez notre brochure</li>
					<li>Conditions générales de vente</li>
				</ul>
				<form>
				  <div class="form-group row" id="newsletterDiv">
				    <label for="newsletter">S'inscrire à la newsletter</label>
				    <div class="input-group">
					    <input type="text" class="form-control" id="newsletter" placeholder="Adresse email">
					    <span class="input-group-addon glyphicon glyphicon-ok"></span>
					  </div>
				  </div>
				</form>
			</div>
			<div class="social-inner col-lg-4 col-md-6" id="social">
				<h4>Suivez Movie Journey</h4>
				<ul class="footer-list">
					<li><a href="https://www.facebook.com/MovieJourney2017/"><img src="image/facebook.png" alt="Page Facebook Movie Journey"/></a></li>
					<li><a href="#"><img src="image/twitter.png" alt="Page Twitter Movie Journey"/></a></li>
					<li><a href="#"><img src="image/instagram.png" alt="Page Instagram Movie Journey"/></a></li>
				</ul>
				<div class="fb-like" data-href="https://www.facebook.com/MovieJourney2017/" data-width="300" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
			</div>
		</div>
			<!-- copyright info -->
		<div class="row">
			<div class="copyright col-lg-12" id="copyright">
				<p>Copyright © 2017 - Site réalisé par Sophie, Maud, Olivia, Hishem & Thomas</p>
			</div>
		</div>
	</footer>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>