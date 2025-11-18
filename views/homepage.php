<?php
require_once __DIR__ . '/../config.php';
start_page("Accueil orphelinat de Ladace");
?>

<article class="text-center p-5 p-md-0">
  <h1 class="text-decoration-underline">Accueil dans l'orphelinat de ladace</h1>
  <p class="fst-italic text-secondary">Un lieu où les enfants ne pleurent plus...</p>
  <h4 class="mt-5">1837 - La fondation par la Mère Ladace</h4>
  <p>Tout commenca par une erreur adminsitrative . Une femme nommée Gertrude de Saint-Gencive de Ladace</p>
  <p>Acheta une vieille batisse abandonnée. C'est ainsi que naquit l'orphelinat de Ladace sur les ruines d'un ancien chenil maudit.</p>
  <p class="fst-italic text-secondary">"Je voulais m'occcuper d'être vivants... Mais les rats sont trop bruyants, j'ai donc pris des enfants" - Mère Ladace</p>

  <img class="w-50 rounded-4" src="assets/statics/images/Orphelina_ladace.webp" alt="Une magnifique bâtisse pour torturer des pauvres hêre">
  <p class="fst-italic text-secondary">L'orphelinat le 18 octobre 1837 apres sa restauration</p>

  <!-- Caroussel -->
  <div id="carouselExampleControls" class="carousel slide w-50 mx-auto mb-4" data-bs-ride="carousel">
    <div class="carousel-inner rounded-4">
      <div class="carousel-item active">
        <img src="assets/statics/images/enfants_heureux.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/statics/images/enfants_heureux_2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/statics/images/enfants_heureux_3.png" class="d-block w-100" alt="...">
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

<footer>
<!-- nous allons utiliser dans ce cas un conteneur fluide c'est à dire qui prend les 100% de width -->
<div class="container-fluid">
  <!-- la class row contient le flex et ces propriétés -->
   <div class="row justify-content-center text-light">
    <div class="col-12 col-md-6 col-lg-4">
      <p class="text-center">Mieux nous connaître</p>
      <ul class="text-center">
        <li>Où sommes-nous</li>
        <li>Membres du staff</li>
        <li>Messes noires, les dates.</li>
      </ul>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <p class="text-center">Nos produits</p>
      <ul class="text-center">
        <li>Nos différentes larmes</li>
        <li>Besoin d'un organe ?</li>
        <li>Nos chaussures artisanales</li>
        <li>Nos terreaux.</li>
      </ul>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
      <p class="text-center">Mentions légales</p>
      <img class="image-fluid w-50 mx-auto d-block" src="assets/statics/images/logo_blanc.png" alt="Logo de l'orphelinat">

    </div>
   </div>
</div>
</footer>
</body>

</html>