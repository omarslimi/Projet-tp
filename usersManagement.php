<?php require 'includes/header.php'; ?>
<div class="container-fluid pb-5" id="containerAllDashboard">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="d-flex">
                <p id="titleOfRecentProject" class="mx-auto py-4">Gestion des utilisateurs</p>
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
                    <p class="menusOfDashboard" id="firstMenu">Dashboard</p>
                    <a href="../Omar/usersManagement.php" class="menusOfDashboard menusOfDashboardActive" id="secondMenu">Gestion des utilisateurs</a>
                    <p class="menusOfDashboard" id="thirdMenu">Gestion des annonces</p>
                    <p class="menusOfDashboard" id="fourthMenu">Gestion des modérateurs</p>
                </div>
            </div>
            <div class="d-grid d-xl-flex col-9">
                <div class="table-responsive boxAdminNumber3UsersManagement col-xl border">
                    <table class="tableRadius table table-Light table-striped">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">n°</th>
                                <th scope="col">Pseudo</th>
                                <th scope="col">Rôle</th>
                                <th scope="col">nb&nbsp;d'annonce</th>
                                <th scope="col">voir</th>
                                <th scope="col">modif</th>
                                <th scope="col">suppr</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th scope="row">1</td>
                                <td>omar</td>
                                <td>Utilisateurs</td>
                                <td>20</td>
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
                            <tr class="text-center">
                                <th scope="row">2</td>
                                <td>Kentin</td>
                                <td>Administrateur</td>
                                <td>0</td>
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
                            <tr class="text-center">
                                <th scope="row">3</td>
                                <td>Mohsen</td>
                                <td>Modérateur</td>
                                <td>0</td>
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
                            <tr class="text-center">
                                <th scope="row">4</td>
                                <td>Fred</td>
                                <td>Utilisateurs</td>
                                <td>2</td>
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
                            <tr class="text-center">
                                <th scope="row">5</td>
                                <td>Kiru</td>
                                <td>Utilisateurs</td>
                                <td>8</td>
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
                            <tr class="text-center">
                                <th scope="row">6</td>
                                <td>Dams</td>
                                <td>Utilisateurs</td>
                                <td>12</td>
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
                            <tr class="text-center">
                                <th scope="row">7</td>
                                <td>héléna</td>
                                <td>Utilisateurs</td>
                                <td>6</td>
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
                            <tr class="text-center">
                                <th scope="row">8</td>
                                <td>julien</td>
                                <td>Utilisateurs</td>
                                <td>0</td>
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
                            <tr class="text-center">
                                <th scope="row">9</td>
                                <td>steven</td>
                                <td>Utilisateurs</td>
                                <td>1</td>
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
                            <tr class="text-center">
                                <th scope="row">10</td>
                                <td>steven</td>
                                <td>Utilisateurs</td>
                                <td>1</td>
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
                            <tr class="text-center">
                                <th scope="row">11</td>
                                <td>steven</td>
                                <td>Utilisateurs</td>
                                <td>1</td>
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
                            <tr class="text-center">
                                <th scope="row">12</td>
                                <td>steven</td>
                                <td>Utilisateurs</td>
                                <td>1</td>
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
                            <tr class="text-center">
                                <th scope="row">13</td>
                                <td>steven</td>
                                <td>Utilisateurs</td>
                                <td>1</td>
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
                            <tr class="text-center">
                                <th scope="row">14</td>
                                <td>steven</td>
                                <td>Utilisateurs</td>
                                <td>1</td>
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
                            <tr class="text-center">
                                <th scope="row">15</td>
                                <td>steven</td>
                                <td>Utilisateurs</td>
                                <td>1</td>
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
<?php require 'includes/footer.php'; ?>