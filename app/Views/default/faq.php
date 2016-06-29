
<?php $this->layout('layoutNoConnect', ['title' => 'FAQ']) ?>

<?php $this->start('main_content') ?>

<section class="faq" id="faq">
	<h1 class="center">Foire aux questions</h1><hr>
	<img class="faq-img" src="<?= $this->assetUrl('img/avatar/faq.png') ?>" alt="faq">
		<h2 class="center">Questions fréquentes</h2>
	<div class="questions" id="questions">
		<h4>Comment modifier mes infos d'évènements?</h4>
		<p>Après avoir créer votre event vous pourrez modifier toutes les informations concernant votre évènement sauf la portée(privée ou publique) et la catégorie.</p>
		<h4>Comment créer un évènement ?</h4>
		<p>A l'aide de notre interface, dans la partie <a href="<?= $this->url('event_createEvent'); ?>"> créer un évènement </a>ou avec le <a href="<?= $this->url('event_createEvent'); ?>"><i class="glyphicon glyphicon-plus"></i></a>.</p>
	</div>
	<div class="questions" id="questions">
		<h4>Comment inviter mes amis</h4>
		<p>Ajouter participants après la création de votre évènement.</p>
		<h4>Comment nous contacter?</h4>
		<p>Via le formulaire de contact<a href="<?= $this->url('contact_contact'); ?>"> ici</a>.Nous sommes à votre disposition pour toutes questions</p>
		<h4></h4>
		<p></p>
		<h4></h4>
		<p></p>
	</div>
</section>




<?php $this->stop('main_content') ?>