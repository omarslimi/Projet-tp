<?php require 'includes/header.php'; ?>
<div class="container-fluid pb-5" id="containerAllDashboard">
    <p class="titleWelcomeDashboard text-center pt-5">Bienvenue sur le <dashboard id="titleDashboardWord">Dashboard</dashboard>
    </p>
    <div class="container-fluid mt-5">
        <div class="row">
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
            <div class="boxAdminNumber1 col border me-5 d-none d-xl-flex">
                <div class="my-auto align-self-center">
                    <p class="menusOfDashboard menusOfDashboardActive" id="firstMenu">Dashboard</p>
                    <a href="../Omar/usersManagement.php" class="menusOfDashboard" id="secondMenu">Gestion des utilisateurs</a>
                    <p class="menusOfDashboard" id="thirdMenu">Gestion des annonces</p>
                    <p class="menusOfDashboard" id="fourthMenu">Gestion des modérateurs</p>
                </div>
            </div>
            <div class="col-xl-10 gap-5">
                <div class="d-none d-xl-flex col-12 mb-5">
                    <div class="boxAdminNumber2 col-md col-8 border d-flex me-5">
                        <div class="col-6 align-self-center">
                            <p class="m-0 text-center">529</p>
                            <p class="m-0 text-center">Inscrits</p>
                        </div>
                        <div class="col-6 align-self-center">
                            <i class="fas fa-users" id="iconRegister"></i>
                        </div>
                    </div>
                    <div class="boxAdminNumber2 col border d-flex me-5">
                        <div class="col-6 align-self-center">
                            <p class="m-0 text-center">336</p>
                            <p class="m-0 text-center">Projects</p>
                        </div>
                        <div class="col-6 align-self-center">
                            <i class="fas fa-laptop-code" id="iconRegister"></i>
                        </div>
                    </div>
                    <div class="boxAdminNumber2 col border d-flex me-5">
                        <div class="col-6 align-self-center">
                            <p class="m-0 text-center">890</p>
                            <p class="m-0 text-center">Visiteurs</p>
                        </div>
                        <div class="col-6 align-self-center">
                            <i class="fas fa-eye" id="iconRegister"></i>
                        </div>
                    </div>
                    <div class="boxAdminNumber2 col me-5 border d-flex">
                        <div class="col align-self-center">
                            <p class="m-0 text-center">6</p>
                            <p class="m-0 text-center">connecté</p>
                        </div>
                        <div class="col align-self-center">
                            <i class="fas fa-signal" id="iconRegister"></i>
                        </div>
                    </div>
                </div>
                <div class="d-xl-flex col-12">
                    <div class="boxAdminNumber3 col-xl border">
                        <div class="d-flex">
                            <p id="titleOfRecentProject" class="ms-3 mt-3">Project récent</p>
                            <button class="seeMoreRecentProjectBtn btn text-white ms-auto me-3 mt-3">Voir tout</button>
                        </div>
                        <div class="table-responsive">
                            <table class="tableRadius table table-Light table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Titre</th>
                                        <th scope="col">Budget</th>
                                        <th scope="col">Pays</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">voir</th>
                                        <th scope="col">modif</th>
                                        <th scope="col">suppr</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Site de vitrine pour ma boulangerie</th>
                                        <td>Moins de 500</td>
                                        <td>France</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                            volutpat nisl nec neque suscipit, at ultricies ex pulvinar. Donec blandit in tortor
                                            eu porta. </td>
                                        <td>
                                            <i class="seeAnnounce text-success fs-4 fas fa-eye"></i>
                                        </td>
                                        <td>
                                            <i class="seeAnnounce text-warning fs-4 fas fa-edit"></i>
                                        </td>
                                        <td>
                                            <i class="seeAnnounce text-danger fs-4 fas fa-trash-alt"></i>
                                        </td>
                                    </tr>


                                    <tr>
                                        <th scope="row">Site de vitrine pour ma boulangerie</th>
                                        <td>Plus de 500</td>
                                        <td>France</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                            volutpat nisl nec neque suscipit, at ultricies ex pulvinar. Donec blandit in tortor
                                            eu porta. </td>
                                        <td>
                                            <i class="seeAnnounce text-success fs-4 fas fa-eye"></i>
                                        </td>
                                        <td>
                                            <i class="seeAnnounce text-warning fs-4 fas fa-edit"></i>
                                        </td>
                                        <td>
                                            <i class="seeAnnounce text-danger fs-4 fas fa-trash-alt"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Site de vitrine pour ma boulangerie</th>
                                        <td>Plus de 500</td>
                                        <td>France</td>
                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                            volutpat nisl nec neque suscipit, at ultricies ex pulvinar. Donec blandit in tortor
                                            eu porta.
                                        </td>
                                        <td>
                                            <i class="seeAnnounce text-success fs-3 fas fa-eye"></i>
                                        </td>
                                        <td>
                                            <i class="seeAnnounce text-warning fs-3 fas fa-edit"></i>
                                        </td>
                                        <td>
                                            <i class="seeAnnounce text-danger fs-3 fas fa-trash-alt"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="boxAdminNumber4 col-xl-3 border ms-xl-5 mt-xl-0 mt-3">
                        <div class="d-flex">
                            <p id="titleOfUsersBox" class="pt-4 ps-4">Utilisateurs</p>
                            <button class="seeMoreUsersBtn btn text-white ms-auto me-3 mt-3">Voir tout</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">n°</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prénom</th>
                                        <th scope="col">Rôle</th>
                                        <th scope="col">nb&nbsp;d'annonce</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($typesList as $t) { ?>
                                    <tr>
                                        <th class="text-center">1</th>
                                        <td class="text-center">Slimi</td>
                                        <td class="text-center">Omar</td>
                                        <td class="text-center">Utilisateurs</td>
                                        <td class="text-center">6</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require 'includes/footer.php'; ?>