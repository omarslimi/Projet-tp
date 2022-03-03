<?php
session_start();
require_once 'models/config.php';
require_once 'models/database.php';
require_once 'models/typesModel.php';
require_once 'models/citiesModel.php';
require_once 'models/usersModel.php';
require_once 'controllers/myAccountController.php';
require 'includes/header.php';
?>
<div class="container-fluid" id="containerPageMyAccount">
    <div class="row">
        <div class="col-2 border d-xl-flex">
            <div class="my-auto align-self-center">
                <p class="menusOfDashboard menusOfDashboardActive" id="firstMenu">Mon compte</p>
                <p class="menusOfDashboard" id="secondMenu">Mes annonces</p>
                <p class="menusOfDashboard" id="thirdMenu">Supprimer mon compte</p>
            </div>
        </div>
        <div class="container col-10">
            <div class="row boxUserInformations">
                <div class="col border d-xl-flex">
                    <div class="my-auto align-self-center mx-auto">
                        <h3>Bienvenue sur votre espace personnel <nameMyAccount id="nameMyAccount"><?= $_SESSION['user']->firstName ?></nameMyAccount> !</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="testicon text-center">
                        <i class="fa-solid fa-user" id="icon_user" data-bs-toggle="modal" data-bs-target="#modalUserAvatar"></i>
                    </div>
                </div>
                <div class="col-6 my-auto">
                    <div class="row">
                        <div id="boxDescription" class="col-12">
                            <p class="text-decoration-none d-inline-block" id="description"><?= $userDetails->biography ?></p>
                            <i class="fa-solid fa-pen mt-1 ms-2" id="penDescription"></i>
                        </div>
                        <div class="d-none col-12" id="boxUpdateDescription">
                            <form action="myAccount.php" method="POST">
                                <label for="description">Ajouter une description</label>
                                <textarea name="description" id="description" rows="5" cols="30" class="form-control"><?= $userDetails->biography ?></textarea>
                                <input type="submit" value="Valider" class="btn btn-primary" name="updateDescription">
                            </form>
                        </div>
                        <div class="modal fade" id="modalUserAvatar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Selectionner une photo de profil</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="picture" class="form-label">Format accepté Png, Jpg, jpeg, gif</label>
                                            <input class="form-control <?= !isset($formErrors['picture']) ?: 'is-invalid' ?>" type="file" name="picture" id="picture" />
                                            <small class="invalid-feedback"><?= @$formErrors['picture'] ?></small>
                                        </div>
                                    </div>
                                    <form action="myAccount.php" method="POST">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <input type="submit" class="btn btn-primary" value="Valider">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border boxUserInformations">
                <div class="col">
                    <h3 class="ps-5 pt-5">Mes informations personnelles</h3>
                    <form action="myAccount.php" method="POST">
                        <div class="container-fluid rounded-3">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 mb-5">
                                    <div class="row">
                                        <div class="col">
                                            <label for="lastName" class="labelRegister mt-5 mb-1">Nom</label>
                                                <input type="text" class="form-control <?= isset($formErrors['lastName']) ? 'is-invalid' : ''; ?> " value="<?= $userDetails->lastName ?>" name="lastName" id="lastName" placeholder="ex : Dupont" disabled/>
                                            <?php if (isset($formErrors['lastName'])) { ?>
                                                <p class="invalid-feedback"><?= $formErrors['lastName'] ?></p>
                                            <?php } ?>
                                        </div>
                                        <div class="col">
                                            <label for="firstName" class="labelRegister mt-5 mb-1">Prénom</label>
                                                <input type="text" class="form-control mx-auto <?= isset($formErrors['firstName']) ? 'is-invalid' : ''; ?>" value="<?= $userDetails->firstName ?>" name="firstName" id="firstName" placeholder="ex : Jean" disabled/>
                                            <div id="messageFirstName"></div>
                                            <?php if (isset($formErrors['firstName'])) { ?>
                                                <p class="invalid-feedback"><?= $formErrors['firstName'] ?></p>
                                            <?php } ?>
                                        </div>
                                        <div>
                                            <label class="labelRegister mt-3 mb-1" for="adress">Votre adresse</label>
                                                <input type="text" class="form-control <?= isset($formErrors['adress']) ? 'is-invalid' : ''; ?>" placeholder="ex : 12 rue de la république" id="adress" name="adress" value="<?= $userDetails->adress ?>" disabled/>
                                            <div id="messageAddress"></div>
                                            <?php if (isset($formErrors['adress'])) { ?>
                                                <p class="invalid-feedback"><?= $formErrors['adress'] ?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <label class="labelRegister mt-3 mb-1 <?= isset($formErrors['zipCode']) ? 'is-invalid' : ''; ?>" for="zipCode">Votre code postal</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control <?= isset($formErrors['zipCode']) ? 'is-invalid' : ''; ?>" id="zipCode" name="zipCode" value="<?= isset($formErrors['zipCode']) || !empty($_POST['zipCode']) ? $_POST['zipCode'] : $userDetails->zip_code; ?>" placeholder="ex : 60200" disabled>
                                                <span class="input-group-text"><i class="fa-solid fa-pen"></i></span>
                                            </div>
                                            <?php if (isset($formErrors['zipCode'])) { ?>
                                                <p class="invalid-feedback"><?= $formErrors['zipCode'] ?></p>
                                            <?php } ?>
                                        </div>
                                        <div class="col-7">
                                            <label class="labelRegister mt-3 mb-1 <?= isset($formErrors['city']) ? 'is-invalid' : ''; ?>" for="city">Votre ville</label>
                                            <select name="city" id="city" class="d-block form-select mb-2 <?= isset($formErrors['city']) ? 'is-invalid' : ''; ?>" user-city="<?= isset($formErrors['city']) || !empty($_POST['city']) ? $_POST['city'] : $userDetails->id_cities; ?>" disabled>
                                                <option disabled selected class="text-center" value="<?= $userDetails->city ?>"></option>
                                            </select>
                                            <?php if (isset($formErrors['city'])) { ?>
                                                <p class="invalid-feedback"><?= $formErrors['city'] ?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Valider" class="btn text-white btnRegister mb-4" id="buttonSubmitForms1" name="personnalInformationsBtn" />
                            <p class="btn btn-warning text-white btnRegister mb-4" id="buttonModifyPersonnalInformations">Modifier</p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row border boxUserInformations">
                <div class="col">
                    <h3 class="ps-5 pt-5">Mes infos professionnelles</h3>
                    <form action="myAccount.php" method="POST">
                        <div class="container-fluid rounded-3">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 mb-5">
                                    <div class="row">
                                        <div class="col">
                                            <div>
                                                <label for="id_types" class="labelRegister mt-3 mb-1">Votre statut</label>
                                                <select name="id_types" id="id_types" class="d-block form-select mb-2 <?= isset($formErrors['id_types']) ? 'is-invalid' : ''; ?>" disabled>
                                                    <option disabled selected class="text-center">Je suis</option>
                                                    <?php foreach ($typesList as $t) { ?>
                                                        <option <?= isset($_POST['id_types']) && $_POST['id_types'] == $t->id || $userDetails->id_types == $t->id ? 'selected' : '' ?> value="<?= $t->id ?>"><?= $t->name ?></option>
                                                    <?php } ?>
                                                </select>
                                                <?php if (isset($formErrors['id_types'])) { ?>
                                                    <p class="invalid-feedback"><?= $formErrors['id_types'] ?></p>
                                                <?php } ?>
                                            </div>
                                            <div>
                                                <label for="businessName" class="labelRegister mt-3 mb-1">Nom de votre entreprise</label>
                                                    <input type="text" class="form-control mx-auto <?= isset($formErrors['businessName']) ? 'is-invalid' : ''; ?>" value="<?= $userDetails->businessName ?>" name="businessName" id="businessName" placeholder="ex : nom de l'entreprise" disabled>
                                                <?php if (isset($formErrors['businessName'])) { ?>
                                                    <p class="invalid-feedback"><?= $formErrors['businessName'] ?></p>
                                                <?php } ?>
                                            </div>
                                            <div>
                                                <label class="labelRegister mt-3 mb-1" for="siret">Votre numéro de siret</label>
                                                    <input type="text" class="siret form-control <?= isset($formErrors['siret']) ? 'is-invalid' : ''; ?>" placeholder="ex : 552178639 00132" id="siret" name="siret" value="<?= $userDetails->siret ?>" disabled>
                                                <?php if (isset($formErrors['siret'])) { ?>
                                                    <p class="invalid-feedback"><?= $formErrors['siret'] ?></p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Valider" class="btn text-white btnRegister mb-4" id="buttonSubmitForms2" name="professionalInformationsBtn" />
                            <p class="btn btn-warning text-white btnRegister mb-4" id="buttonModifyProfessionalInformations">Modifier</p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row border boxUserInformations">
                <div class="col">
                    <h3 class="ps-5 pt-5">Mon adresse mail</h3>
                    <form action="myAccount.php" method="POST">
                        <div class="container-fluid rounded-3">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 mb-5">
                                    <div class="row">
                                        <div class="col">
                                            <div>
                                                <label class="labelRegister mt-3 mb-1" for="mail">Votre adresse mail</label>
                                                    <input type="email" class="form-control <?= isset($formErrors['mail']) ? 'is-invalid' : ''; ?>" placeholder="ex : jean.dupont@exemple.com" id="mail" name="mail" value="<?= $userDetails->mail ?>" disabled>
                                                <?php if (isset($formErrors['mail'])) { ?>
                                                    <p class="invalid-feedback"><?= $formErrors['mail'] ?></p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Valider" class="btn text-white btnRegister mb-4" id="buttonSubmitForms3" name="mailBtn" />
                            <p class="btn btn-warning text-white btnRegister mb-4" id="buttonModifyMail">Modifier</p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row border boxUserInformations">
                <div class="col">
                    <h3 class="ps-5 pt-5">Mon mot de passe</h3>
                    <form action="inscription" method="POST">
                        <div class="container-fluid rounded-3">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 mb-5">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label class="labelRegister mt-3 mb-1 <?= isset($formErrors['password']) ? 'is-invalid' : ''; ?>" for="password">Mot de passe actuel</label>
                                                    <input type="password" class="form-control mb-2 <?= isset($formErrors['password']) ? 'is-invalid' : ''; ?>" id="password" name="password" value="<?= @$_POST['password']; ?>">
                                                    <?php if (isset($formErrors['password'])) { ?>
                                                        <p class="invalid-feedback"><?= $formErrors['password'] ?></p>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-6">
                                                    <label class="labelRegister mt-3 mb-1 <?= isset($formErrors['checkPassword']) ? 'is-invalid' : ''; ?>" for="checkPassword">Nouveau mot de passe</label>
                                                    <input type="password" class="form-control mb-2 mx-auto <?= isset($formErrors['checkPassword']) ? 'is-invalid' : ''; ?>" id="checkPassword" name="checkPassword" value="<?= @$_POST['checkPassword']; ?>">
                                                    <?php if (isset($formErrors['checkPassword'])) { ?>
                                                        <p class="invalid-feedback"><?= $formErrors['checkPassword'] ?></p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Valider" class="btn text-white btnRegister mb-4" id="buttonSubmitForms4" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if (isset($formErrors['picture'])) { ?>
    <script src="assets/js/updatePicture.js"></script>
<?php } ?>
<?php require 'includes/footer.php'; ?>