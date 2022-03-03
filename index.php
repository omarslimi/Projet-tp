<?php 
session_start();
require 'includes/header.php'; 
?>
<!--fin de la page acceuil contenu-->
<!-------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------Page Découvrir----------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------->
<!--carousel-->
<div class="container mt-5">
    <div class="row">
<div id="carouselExampleDark" class="carousel carousel-dark slide w-75 mx-auto" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="assets/img/minisite-min.png" class="d-block mx-auto w-sm-25 w-50" alt="...">
                <h5 class="text-center"><span class="badge bg-secondary">#AD </span> site vitrine</h5>
                <p class="text-center pb-5">Some representative placeholder content for the first slide.</p>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="assets/img/minisite-min.png" class="d-block mx-auto w-sm-25 w-50" alt="...">
            <div class="carousel">
                <h5 class="text-center"><span class="badge bg-secondary">#AD </span> application mobile jeux</h5>
                <p class="text-center pb-5">Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/minisite-min.png" class="d-block mx-auto w-sm-25 w-50" alt="...">
            <div class="carousel">
                <h5 class="text-center"><span class="badge bg-secondary">#AD </span> maquette pour mon site</h5>
                <p class="text-center pb-5">Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
</div>
<!--Fin du carousel-->
<div class="container-fluid px-4" id="pageDiscoverBestProject">
    <div class="row">
    <h3 class="text-center fs-2 mt-5 fw-bold">Découvrez les projet a la une</h3>
        <!--Menu a gauche catégorie-->
        <!--Menu a gauche catégorie responsive-->
        <a class="btn d-block d-md-none text-white" id="btnCatResponsive" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Catégories</a>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <button class="colorBtn btn text-white" type="button" data-bs-toggle="collapse" href="#cat1" aria-expanded="false" aria-controls="cat">WEB</button>
  <div class="ms-xl-5 ms-sm-0 pt-3 collapse show" id="cat1">
                <div class="mt-3">
                    <input type="radio" id="testa" name="selectWeb">
                    <label for="testa" class="select text-dark">sous catégorie</label>
                </div>
                <div class="mt-3">
                    <input type="radio" id="test" name="selectWeb">
                    <label for="test" class="select text-dark">sous catégorie</label>
                </div>
                <div class="mt-3">
                    <input type="radio" id="test" name="selectWeb">
                    <label for="test" class="select text-dark">sous catégorie</label>
                </div>
                <div class="mt-3">
                    <input type="radio" id="test" name="selectWeb">
                    <label for="test" class="select text-dark">sous catégorie</label>
                </div>
                <div class="mt-3">
                    <input type="radio" id="test" name="selectWeb">
                    <label for="test" class="select text-dark">sous catégorie</label>
                </div>
            </div>
            <div class="pt-3">
                <button class="colorBtn btn text-white" type="button" data-bs-toggle="collapse" href="#cat2" aria-expanded="false" aria-controls="cat2">DESIGN</button>
            </div>
            <div class="ms-xl-5 pt-4 collapse show" id="cat2">
                <div>
                    <input type="radio" id="testa" name="selectWeb">
                    <label for="testa" class="select text-dark">sous catégorie</label>
                </div>
                <div class="mt-3">
                    <input type="radio" id="test" name="selectWeb">
                    <label for="test" class="select text-dark">sous catégorie</label>
                </div>
                <div class="mt-3">
                    <input type="radio" id="test" name="selectWeb">
                    <label for="test" class="select text-dark">sous catégorie</label>
                </div>
                <div class="mt-3">
                    <input type="radio" id="test" name="selectWeb">
                    <label for="test" class="select text-dark">sous catégorie</label>
                </div>
                <div class="mt-3">
                    <input type="radio" id="test" name="selectWeb">
                    <label for="test" class="select text-dark">sous catégorie</label>
                </div>
            </div>
            <div class="pt-3">
                <button class="colorBtn btn text-white" type="button" data-bs-toggle="collapse" href="#cat3" aria-expanded="false" aria-controls="cat3">APPLICATION</button>
            </div>
            <div class="ms-xl-5 pt-4 collapse show" id="cat3">
                <div>
                    <input type="radio" id="testa" name="selectWeb">
                    <label for="testa" class="select text-dark">sous catégorie</label>
                </div>
                <div class="mt-3">
                    <input type="radio" id="test" name="selectWeb">
                    <label for="test" class="select text-dark">sous catégorie</label>
                </div>
                <div class="mt-3">
                    <input type="radio" id="test" name="selectWeb">
                    <label for="test" class="select text-dark">sous catégorie</label>
                </div>
                <div class="mt-3">
                    <input type="radio" id="test" name="selectWeb">
                    <label for="test" class="select text-dark">sous catégorie</label>
                </div>
                <div class="mt-3">
                    <input type="radio" id="test" name="selectWeb">
                    <label for="test" class="select text-dark">sous catégorie</label>
                </div>
            </div>
  </div>
</div>
        <!-- Fin du menu a gauche catégorie responsive-->
        <aside class="col-md-2 d-none d-md-block mb-5 sticky ms-auto" id="asside">
            <h3 class="fs-4 text-white"><i class="fas fa-align-justify fs-5"></i> Catégorie</h3>
            <div class="text-center pt-5">
                <button class="colorBtn btn text-white" type="button" data-bs-toggle="collapse" href="#cat1" aria-expanded="false" aria-controls="cat">WEB</button>
            </div>
            <div class="text-center pt-3">
                <button class="colorBtn btn text-white" type="button" data-bs-toggle="collapse" href="#cat2" aria-expanded="false" aria-controls="cat2">DESIGN</button>
            </div>
            <div class="text-center pt-3">
                <button class="colorBtn btn text-white" type="button" data-bs-toggle="collapse" href="#cat3" aria-expanded="false" aria-controls="cat3">APPLICATION</button>
            </div>
        </aside>
        <!--fin du menu a gauche catégorie-->
        <!--les projets à la une-->
        <div class="col-md-7 mb-5 fs-5 text-dark align-self-center me-auto" id="featuredProjects">
            <div class="col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Site de vitrine pour ma boulangerie</h5>
                        <p class="text-muted">Moins de 500$•12 offres•client <img src="assets/img/flag.svg.png" alt="drapeau francais" class="sizeOfFlag"></p>
                        <p class="text-center badge bg-secondary">Paiement sécurisé</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                            volutpat nisl nec neque suscipit, at ultricies ex pulvinar. Donec blandit in tortor
                            eu porta. Etiam id justo quis quam varius iaculis in eget eros. Nulla in convallis
                            est. Integer rutrum nunc non rutrum venenatis. Proin pellentesque, nulla in rutrum
                            finibus, quam massa luctus libero, nec commodo enim mauris convallis ipsum. Maecenas
                            sit amet laoreet magna. Suspendisse potenti. Vivamus consequat dictum purus non
                            sollicitudin.</p>
                            <p class="card-text"><small class="text-muted">Déposé il y a 3 minutes</small></p>
                        <a href="#" class="colorBtn btn text-white">Voir plus..</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mt-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Site de vitrine pour ma boulangerie</h5>
                        <p class="text-muted">Moins de 500$•12 offres•client <img src="assets/img/51dJGBtZMlL._AC_UX679_.jpg" alt="drapeau anglais" class="sizeOfFlag"></p>
                        <p class="text-center badge bg-secondary">Paiement sécurisé</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                            volutpat nisl nec neque suscipit, at ultricies ex pulvinar. Donec blandit in tortor
                            eu porta. Etiam id justo quis quam varius iaculis in eget eros. Nulla in convallis
                            est. Integer rutrum nunc non rutrum venenatis. Proin pellentesque, nulla in rutrum
                            finibus, quam massa luctus libero, nec commodo enim mauris convallis ipsum. Maecenas
                            sit amet laoreet magna. Suspendisse potenti. Vivamus consequat dictum purus non
                            sollicitudin.</p>
                            <p class="card-text"><small class="text-muted">Déposé il y a 3 minutes</small></p>
                        <a href="#" class="colorBtn btn text-white">Voir plus..</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mt-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Site de vitrine pour ma boulangerie</h5>
                        <p class="text-muted">Moins de 500$•12 offres•client <img src="assets/img/flag.svg.png" alt="" class="sizeOfFlag"></p>
                        <p class="text-center badge bg-secondary">Paiement sécurisé</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                            volutpat nisl nec neque suscipit, at ultricies ex pulvinar. Donec blandit in tortor
                            eu porta. Etiam id justo quis quam varius iaculis in eget eros. Nulla in convallis
                            est. Integer rutrum nunc non rutrum venenatis. Proin pellentesque, nulla in rutrum
                            finibus, quam massa luctus libero, nec commodo enim mauris convallis ipsum. Maecenas
                            sit amet laoreet magna. Suspendisse potenti. Vivamus consequat dictum purus non
                            sollicitudin.</p>
                            <p class="card-text"><small class="text-muted">Déposé il y a 3 minutes</small></p>
                        <a href="#" class="colorBtn btn text-white">Voir plus..</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mt-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Site de vitrine pour ma boulangerie</h5>
                        <p class="text-muted">Moins de 500$•12 offres•client <img src="assets/img/flag.svg.png" alt="" class="sizeOfFlag"></p>
                        <p class="text-center badge bg-secondary">Paiement sécurisé</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                            volutpat nisl nec neque suscipit, at ultricies ex pulvinar. Donec blandit in tortor
                            eu porta. Etiam id justo quis quam varius iaculis in eget eros. Nulla in convallis
                            est. Integer rutrum nunc non rutrum venenatis. Proin pellentesque, nulla in rutrum
                            finibus, quam massa luctus libero, nec commodo enim mauris convallis ipsum. Maecenas
                            sit amet laoreet magna. Suspendisse potenti. Vivamus consequat dictum purus non
                            sollicitudin.</p>
                            <p class="card-text"><small class="text-muted">Déposé il y a 3 minutes</small></p>
                        <a href="#" class="colorBtn btn text-white">Voir plus..</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mt-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Site de vitrine pour ma boulangerie</h5>
                        <p class="text-muted">Moins de 500$•12 offres•client <img src="assets/img/flag.svg.png" alt="" class="sizeOfFlag"></p>
                        <p class="text-center badge bg-secondary">Paiement sécurisé</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                            volutpat nisl nec neque suscipit, at ultricies ex pulvinar. Donec blandit in tortor
                            eu porta. Etiam id justo quis quam varius iaculis in eget eros. Nulla in convallis
                            est. Integer rutrum nunc non rutrum venenatis. Proin pellentesque, nulla in rutrum
                            finibus, quam massa luctus libero, nec commodo enim mauris convallis ipsum. Maecenas
                            sit amet laoreet magna. Suspendisse potenti. Vivamus consequat dictum purus non
                            sollicitudin.</p>
                            <p class="card-text"><small class="text-muted">Déposé il y a 3 minutes</small></p>
                        <a href="#" class="colorBtn btn text-white">Voir plus..</a>
                    </div>
                </div>
            </div>
            <nav aria-label="...">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link text-dark" href="#">1</a></li>
                    <li class="page-item" aria-current="page">
                        <a class="page-link text-dark" href="#">2</a>
                    </li>
                    <li class="page-item "><a class="page-link text-dark" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link text-dark" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--fin des projets à la une-->
    </div>
</div>
</section>
<?php require 'includes/footer.php'; ?>