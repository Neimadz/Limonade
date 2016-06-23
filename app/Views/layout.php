<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> <!-- Bootstrap CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous"> <!-- Font awesome -->
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>"> <!-- Style Css -->

</head>
<body>
	<div class="container">
		<header>
			<h1>Limonade :: Stop la prise de tête pour organiser votre événements</h1>
			<h4>Posez vous, sirotez votre verre et laissez notre site faire &#9786;</h4>
			<h2><?= $this->e($title) ?></h2>
		</header>


		<section>
			<?= $this->section('main_content') ?>
		</section>

	<footer>
    	<!--
    	Nous contacter
    	L'idée est d'avoir une photo de nous individuellement qui nous amènera sur la page pour Contactez nous
    	-->
		<div class="team">
			<a href="<?= $this->url('default_contact'); ?>"><h2>L'équipe</h2></a>
			<img src="../../../Limonade/public/assets/img/avatar/Anastasia.jpg" alt="avatar-team" class="img-circle" height="40px" width="40px">
			<img src="../../../Limonade/public/assets/img/avatar/Damien.jpg" alt="avatar-team" class="img-circle" height="40px" width="40px">
			<img src="../../../Limonade/public/assets/img/avatar/Myriam.jpg" alt="avatar-team" class="img-circle" height="40px" width="40px">
			<img src="../../../Limonade/public/assets/img/avatar/Baptiste.jpg" alt="avatar-team" class="img-circle" height="40px" width="40px">
			<img src="../../../Limonade/public/assets/img/avatar/Noé.jpg" alt="avatar-team" class="img-circle" height="40px" width="40px">

		</div>

		<!-- Nous suivre -->
		<div class="social-network">
			<a href="<?= $this->url('default_contact'); ?>"><h2>Contact</h2></a>
			<div class="icons-social">
    			<i class="fa fa-facebook-official" aria-hidden="true">Facebook</i>
				<i class="fa fa-instagram" aria-hidden="true">Instagram</i>
    			<i class="fa fa-pinterest-p" aria-hidden="true">Pinterest</i>
    			<i class="fa fa-github" aria-hidden="true">Github</i>
			</div>
		</div>
		<p><?php echo date('Y'); ?> &copy; Limonade &reg;</p>
	</footer>

	</div>
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<!-- Boostrap Js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!-- Moustache Js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.min.js"></script>
	<script src="<?= $this->assetUrl('js/myscript.js') ?>"></script>
</body>
</html>
