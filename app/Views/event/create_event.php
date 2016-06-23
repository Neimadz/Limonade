<?php $this->layout('layout', ['title' => 'Création de votre événement']) ?>

<?php $this->start('main_content') ?>


<hr>
<form class="form-create-event">
  <div class="form-group">
    <label for="type-event">Etendue de l'événement</label><br>
      <input type="radio" name="role" id="private" value="private"><label for="private">Privée</label>
      <fieldset>Seul les personnes invitées peuvent voir l'événement, ses membres et leurs publications.</fieldset><br>
      <input type="radio" name="role" id="public" value="public"><label for="public">Publique</label>
      <fieldset>Tout le monde peut voir l'événement, ses membres et leurs publications.Et donc y participer.</fieldset><br>    
  </div>

  <hr>
  <div class="form-group">
    <label for="cat-event">Catégorie d'événement</label><br>
      <input type="radio" name="category" value="repas" id="repas"><label for="repas">Repas</label><br>
      <input type="radio" name="category" value="soiree" id="soiree"><label for="soiree">Soirées</label><br>
      <input type="radio" name="category" value="vacances" id="vacances"><label for="vacances">Vacances</label><br>
      <input type="radio" name="category" value="journee" id="journee"><label for="journee">Journées</label><br>                 
  </div> 

  <hr>
  <div class="form-group">
    <label for="title-event">Intitulé de l'événement</label><br> 
      <input type="text" value="title" placeholder="Title"><br><br>     
    <label for="description-event">Description de l'évenement*</label><br> 
    <textarea value="description" cols="40" placeholder="Description facultative"></textarea>
  </div>

  <hr> 
  <div class="row">
    <div class="col-xs-6 .col-md-4"> 
      <label for="infos-event">Informations sur l'événement</label><br>  
      <label for="lieu-event">Lieu de l'événement</label><br>
        <fieldset>Rue</fieldset>
        <input type="text" name="street" placeholder="..."><br><br>
        <fieldset>Code Postal</fieldset>
        <input type="text" name="zipcode" placeholder="..."><br><br> 
        <fieldset>Ville</fieldset>
        <input type="text" name="city" placeholder="..."><br><br>
        <fieldset>Pays</fieldset> 
        <input type="text" name="country" placeholder="..."><br><br>  
    </div><br>
    <div class="col-xs-6 .col-md-4">
      <label for="date_begin">Date du début l'événement</label><br>
      <input type="date" name="date">
    </div><br><br>
    <br>
    <div class="col-xs-6 .col-md-4">
      <label for="date_end">Date de la fin l'événement</label><br>
      <input type="date" name="date">
    </div><br><br>
    <br><br><br>       
    <div class="col-xs-6 .col-md-4">
      <label class="who-event">Participants</label><br>
      <textarea cols="40" placeholder="..."></textarea>
    </div>
  </div>
  <br><hr>
  <button type="submit" class="btn btn-default">Créer l'événement</button>
</form>


<!--

Repas participatif
Soirée déguisée
Anniversaire surprise
Vacances entre amis(séjours)
Organisation de jeux
Ateliers (belotte,couture,etc)
Sorties(plages,rando,piknik,etc)
-->




<?php $this->stop('main_content') ?>