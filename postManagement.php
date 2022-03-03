<?php require 'includes/header.php'; ?>
<div class="container-fluid pb-5" id="containerAllDashboard">
<div class="container-fluid mt-5">
        <div class="row">
        <div class="d-flex">
        <p id="titleOfRecentProject" class="mx-auto py-4">Gestion des annonces</p>
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
                        <div class="table-responsive">
                            <table class="tableRadius table table-Light table-striped">
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require 'includes/footer.php'; ?>