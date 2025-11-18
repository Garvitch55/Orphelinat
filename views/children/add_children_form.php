<?php
require_once __DIR__ . '/../../config.php';
start_page("Ajouter un nouveau pensionnaire");
?>

<h1 class="text-center mt-3">Ajouter un nouveau pensionnaire</h1>
<!-- un formulaire en PHP ou en JS -->
 <!-- ACTION CORRESPOND A L ADRESSE DU FICHIER OU LES DONNEES DU FORMULAIRE IRONT APRES VALIDATION -->
<form class="w-50 mx-auto mt-4" action="controller/children/add_children_ctrl.php" method="post">

<!-- le prenom de l enfant -->
<div class="mb-3">
<label for="firstname" class="form-label">Prénom de l'enfant</label>
<input type="text" class="form-control" name="firstname">
</div>

<!-- le nom de l enfant -->
<div class="mb-3">
<label for="lastname" class="form-label">Nom de l'enfant</label>
<input type="text" class="form-control" name="lastname">
</div>

<!-- la date de naissance de l enfant -->
<div class="mb-3">
<label for="birthdate" class="form-label">Date de naissance de l'enfant</label>
<input type="date" class="form-control" name="birthdate">
</div>

<!-- le sexe biologique de l enfant -->
<div class="form-check">
<input type="radio" class="form-check-input" name="biosex" value="girl">
<label for="biosex" class="form-check-label">Fille</label>
</div>

<div class="form-check">
<input type="radio" class="form-check-input" name="biosex" value="boy">
<label for="biosex" class="form-check-label">Garçon</label>
</div>

<!-- PROVENANCE -->
<div class="mb-3">
<label for="origin" class="form-label"></label>
<select name="origin" class="form-select">
    <option value="groland">Groland</option>
    <option value="chnord">Le Chnord</option>
    <option value="gotham">Gotham City</option>
    <option value="boukistan">Boukistan</option>
    <option value="neverland">Le pays imaginaire</option>
</select>
</div>

<!-- description de l enfant -->
<div class="mb-3">
<label for="description" class="form-label">Description de l'enfant</label>
<textarea name="description" class="form-control" cols="50" rows="10"></textarea>
</div>

<div class="text-center">
<input type="submit" value="Envoyer" class="btn btn-primary">
</div>

</form>
