<?php require 'includes/header.php'; ?>
<div class="container-fluid pb-5" id="containerAllDashboard">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="d-flex">
                <p id="titleOfRecentProject" class="mx-auto py-4">Gestion des modérateurs</p>
            </div>
            <!-- menu a gauche responsive -->
            <a class="btn d-block d-xl-none text-white w-50 mx-auto mb-4" id="btnCatResponsive" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Catégories</a>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <button class="colorBtn btn text-white" type="button" data-bs-toggle="collapse" href="#cat1" aria-expanded="false" aria-controls="cat">WEB</button>
                    <div class="pt-3">
                        <button class="colorBtn btn text-white" type="button" data-bs-toggle="collapse" href="#cat2" aria-expanded="false" aria-controls="cat2">DESIGN</button>
                    </div>
                    <div class="pt-3">
                        <button class="colorBtn btn text-white" type="button" href="#">APPLICATION</button>
                    </div>
                </div>
            </div>
            <!-- menu a gauche non responsive -->
            <div class="boxAdminNumber1 col-2 border me-5 d-none d-xl-flex">
                <div class="my-auto align-self-center">
                    <p class="menusOfDashboard menusOfDashboardActive" id="firstMenu">Dashboard</p>
                    <a href="../Omar/usersManagement.php" class="menusOfDashboard" id="secondMenu">Gestion des utilisateurs</a>
                    <p class="menusOfDashboard" id="thirdMenu">Gestion des annonces</p>
                    <p class="menusOfDashboard" id="fourthMenu">Gestion des modérateurs</p>
                </div>
            </div>
            <div class="d-grid d-xl-flex col-9">
                <div class="boxAdminNumber3UsersManagement col-xl border">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <p>Nombre de modérateurs : <span id="tasksCount">0</span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="addNewTask" class="form-label">Ajouter un modérateurs</label>
                                <input type="text" class="form-control" id="addNewTask" placeholder="Nom du modérateurs" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <button id="addButton" class="btn btn-outline-success">Ajouter</button>
                                <button id="removeButton" class="btn btn-outline-danger">Supprimer les tâches terminés</button>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col">
                                <ul id="list">

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'includes/footer.php'; ?>