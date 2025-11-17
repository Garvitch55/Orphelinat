<?php
require_once "../head.php";
head_with_title("Accueil Orphelinat");
require_once "nav.php";
?>

<article class="text-center"><h1 class="text-decoration-underline">Accueil dans l'orphelinat de ladace</h1>
<p class="fst-italic text-secondary">Un lieu où les enfants ne pleurent plus...</p>
<h4 class="mt-5">1837 - La fondation par la Mère Ladace</h4>
<p>Tout commenca par une erreur adminsitrative . Une femme nommée Gertrude de Saint-Gencive de Ladace</p>
<p>Acheta une vieille batisse abandonnée. C'est ainsi que naquit l'orphelinat de Ladace sur les ruines d'un ancien chenil maudit.</p>
<p class="fst-italic text-secondary">"Je voulais m'occcuper d'être vivants... Mais les rats sont trop bruyants, j'ai donc pris des enfants" - Mère Ladace</p>

<img class="w-50 rounded-4" src="assets/statics/images/Orphelina_ladace.webp" alt="Une magnifique bâtisse pour torturer des pauvres hêre">
<p class="fst-italic text-secondary">L'orphelinat le 18 octobre 1837 apres sa restauration</p>

<!-- Caroussel -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/statics/images/enfant_heureux.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/statics/images/enfant_heureux_2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/statics/images/enfant_heureux_3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




</article>

</body>

</html>