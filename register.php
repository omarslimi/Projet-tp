<?php
session_start(); 
require_once 'models/config.php';
require_once 'models/database.php';
require_once 'models/typesModel.php';
require_once 'models/citiesModel.php';
require_once 'models/usersModel.php';
require_once 'controllers/registerController.php'; 
require 'includes/header.php'; 
?>

<form action="inscription" method="POST">
    <div class="container rounded-3" id="box">
        <div class="row justify-content-center">
            <h4 class="text-center mt-5 fw-bold fs-1" id="fontFamilyForm">Inscrivez-vous</h4>
            <div class="mt-1 mb-5 text-center">
            <a href="login.php">Déjà client ?</a>
            </div>
            <div class="col-lg-6 my-auto">
                <img src="assets/img/Register.gif" alt="image de formulaire" class="w-100">
            </div>
            <div class="shadowRegister col-lg-4 mb-5">
                <div class="row">
                    <div class="col-6">
                <label for="lastName" class="labelRegister mt-5 mb-1">Nom</label>
                <input type="text" class="form-control mb-2 <?= isset($formErrors['lastName']) ? 'is-invalid' : '' ; ?>" value="<?= @$_POST['lastName']; ?>" name="lastName" id="lastName" placeholder="ex : Dupont" />
                <div id="messageName"></div>
                <?php if (isset($formErrors['lastName'])) { ?>
                        <p class="invalid-feedback"><?= $formErrors['lastName'] ?></p>
                    <?php } ?>
                    </div>
                    <div class="col-6">
                <label for="firstName" class="labelRegister mt-5 mb-1">Prénom</label>
                <input type="text" class="form-control mb-2 mx-auto <?= isset($formErrors['firstName']) ? 'is-invalid' : ''; ?>" value="<?= @$_POST['firstName']; ?>" name="firstName" id="firstName" placeholder="ex : Jean" />
                <div id="messageFirstName"></div>
                <?php if (isset($formErrors['firstName'])) { ?>
                        <p class="invalid-feedback"><?= $formErrors['firstName'] ?></p>
                    <?php } ?>
                    </div>
                </div>
                <div>
                    <label for="businessName" class="labelRegister mt-3 mb-1">Nom de votre entreprise</label>
                    <input type="text" class="form-control mb-2 mx-auto <?= isset($formErrors['businessName']) ? 'is-invalid' : ''; ?>" value="<?= @$_POST['businessName']; ?>" name="businessName" id="businessName" placeholder="ex : nom de l'entreprise">
                    <div id="messageNameCompany"></div>
                    <?php if (isset($formErrors['businessName'])) { ?>
                        <p class="invalid-feedback"><?= $formErrors['businessName'] ?></p>
                    <?php } ?>
                </div>
                <div>
                <label for="id_types" class="labelRegister mt-3 mb-1">Votre statut</label>
                <select name="id_types" id="id_types" class="d-block form-select mb-2 <?= isset($formErrors['id_types']) ? 'is-invalid' : ''; ?>">
                    <option disabled selected class="text-center">Je suis</option>
                    <?php foreach ($typesList as $t) { ?>
                                <option <?= isset($_POST['id_types']) && $_POST['id_types'] == $t->id ? 'selected' : '' ?> value="<?= $t->id ?>"><?= $t->name ?></option>
                    <?php } ?>
                </select>
                <?php if (isset($formErrors['id_types'])) { ?>
                        <p class="invalid-feedback"><?= $formErrors['id_types'] ?></p>
                    <?php } ?>
                </div>

                <div>
                <label class="labelRegister mt-3 mb-1" for="adress">Votre adresse</label>
                <input type="text" class="form-control mb-2 <?= isset($formErrors['adress']) ? 'is-invalid' : ''; ?>" placeholder="ex : 12 rue de la république" id="adress" name="adress" value="<?= @$_POST['adress']; ?>">
                <div id="messageAddress"></div>
                <?php if (isset($formErrors['adress'])) { ?>
                        <p class="invalid-feedback"><?= $formErrors['adress'] ?></p>
                    <?php } ?>
                </div>

                <div class="row">
                    <div class="col-5">
                    <label class="labelRegister mt-3 mb-1 <?= isset($formErrors['zipCode']) ? 'is-invalid' : ''; ?>" for="zipCode">Votre code postal</label>
                    <input type="text" class="form-control mb-2  <?= isset($formErrors['zipCode']) ? 'is-invalid' : ''; ?>"  id="zipCode" name="zipCode" value="<?= @$_POST['zipCode']; ?>" placeholder="ex : 60200">
                         <?php if (isset($formErrors['zipCode'])) { ?>
                            <p class="invalid-feedback"><?= $formErrors['zipCode'] ?></p>
                        <?php } ?>
                    </div>
                    <div class="col-7">
                    <label class="labelRegister mt-3 mb-1 <?= isset($formErrors['city']) ? 'is-invalid' : ''; ?>" for="city">Votre ville</label>
                        <select name="city" id="city" class="d-block form-select mb-2 <?= isset($formErrors['city']) ? 'is-invalid' : ''; ?>">
                            <option disabled selected class="text-center">Ma ville</option>
                        </select>
                        <?php if (isset($formErrors['city'])) { ?>
                            <p class="invalid-feedback"><?= $formErrors['city'] ?></p>
                        <?php } ?>
                    </div>
                </div>

                <div>
                <label class="labelRegister mt-3 mb-1" for="siret">Votre numéro de siret</label>
                <input type="text" class="siret form-control mb-2 <?= isset($formErrors['siret']) ? 'is-invalid' : ''; ?>" placeholder="ex : 552178639 00132" id="siret" name="siret" value="<?= @$_POST['siret']; ?>">
                <div id="messageSiret"></div>
                <?php if (isset($formErrors['siret'])) { ?>
                        <p class="invalid-feedback"><?= $formErrors['siret'] ?></p>
                    <?php } ?>
                </div>

                <div>
                <label class="labelRegister mt-3 mb-1" for="mail">Votre adresse mail</label>
                <input type="email" class="form-control mb-2 <?= isset($formErrors['mail']) ? 'is-invalid' : ''; ?>" placeholder="ex : jean.dupont@exemple.com" id="mail" name="mail" value="<?= @$_POST['mail']; ?>">
                <div id="messageMail"></div>
                <?php if (isset($formErrors['mail'])) { ?>
                        <p class="invalid-feedback"><?= $formErrors['mail'] ?></p>
                    <?php } ?>
                </div>
                <div class="row">
                    <div class="col-6">
                    <label class="labelRegister mt-3 mb-1 <?= isset($formErrors['password']) ? 'is-invalid' : ''; ?>" for="password">Mot de passe</label>
                    <input type="password" class="form-control mb-2 <?= isset($formErrors['password']) ? 'is-invalid' : ''; ?>"  id="password" name="password" value="<?= @$_POST['password']; ?>">
                         <?php if (isset($formErrors['password'])) { ?>
                            <p class="invalid-feedback"><?= $formErrors['password'] ?></p>
                        <?php } ?>
                    </div>
                    <div class="col-6">
                    <label class="labelRegister mt-3 mb-1 <?= isset($formErrors['checkPassword']) ? 'is-invalid' : ''; ?>" for="checkPassword">Confirmer&nbsp;le&nbsp;mot&nbsp;de&nbsp;passe</label>
                    <input type="password" class="form-control mb-2 mx-auto <?= isset($formErrors['checkPassword']) ? 'is-invalid' : ''; ?>"  id="checkPassword" name="checkPassword" value="<?= @$_POST['checkPassword']; ?>">
                         <?php if (isset($formErrors['checkPassword'])) { ?>
                            <p class="invalid-feedback"><?= $formErrors['checkPassword'] ?></p>
                        <?php } ?>
                    </div>
                </div>
                <div class="text-center">
                <input type="submit" value="Valider" class="btn my-3 text-white btnRegister" id="buttonSubmitForms" />
                </div>
            </div>
        </div>
    </div>
</form>
<?php if(isset($success) && $success == true){ ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/registerSuccess.js"></script>
<?php } ?>
<?php require 'includes/footer.php'; ?>