

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <!-- Logo / ou nom du site -->
    <a class="navbar-brand" href="./">Orphelinat de Ladace</a>
    <!-- burger du responsive -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- tous les items de la navbar -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <!-- c'est un dropdown -->
        <li class="nav-item dropdown">
            <!-- C'est l'affichage textuel du dropdown -->
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pensionnaires
          </a>
          <!-- affichage la liste dropdown -->
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="views/children/add_children_form.php">Ajouter un pensionnaire</a></li>
            <li><a class="dropdown-item" href="#">Modifier un pensionnaire</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Suppression d'un pensionnaire</a></li>
          </ul>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Rechercher un enfant" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Rechercher</button>
      </form>
    </div>
  </div>
</nav>

