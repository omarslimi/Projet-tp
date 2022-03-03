<?php
session_start();
require_once 'models/config.php';
require_once 'models/database.php';
require_once 'models/usersModel.php';
require_once 'controllers/loginController.php'; 
require 'includes/header.php';
?>
<form action="login.php" method="POST">
    <div class="container rounded-3" id="box">
        <div class="row justify-content-center">
            <h4 class="text-center mt-5 fw-bold fs-1" id="fontFamilyForm">Connectez-vous</h4>
            <div class="mt-1 mb-5 text-center">
            <a href="register.php">Créer un compte</a>
            </div>
            <div class="col-lg-6">
                <img src="assets/img/Login.gif" alt="image de formulaire" class="w-100">
            </div>
            <div class="shadowLogin col-lg-4 my-auto p-4">
                <div>
                <label class="labelLogin my-2" for="mail">Entrer votre adresse mail</label>
                <input type="text" class="form-control mb-2 <?= isset($formErrors['mail']) ? 'is-invalid' : ''; ?>" placeholder="ex : jean.dupont@exemple.com" id="mail" name="mail" value="<?= @$_POST['mail'] ?>">
                <div id="messageMail"></div>
                <?php if (isset($formErrors['mail'])) { ?>
                        <p class="invalid-feedback"><?= $formErrors['mail'] ?></p>
                    <?php } ?>
                </div>
                <div>
                    <label class="labelLogin my-2 <?= isset($formErrors['password']) ? 'is-invalid' : ''; ?>" for="password">Entrer un mot de passe</label>
                    <input type="password" class="form-control <?= isset($formErrors['password']) ? 'is-invalid' : ''; ?>" placeholder="ex : mot de passe" id="password" name="password" value="<?= @$_POST['password']; ?>">
                         <?php if (isset($formErrors['password'])) { ?>
                            <p class="invalid-feedback"><?= $formErrors['password'] ?></p>
                        <?php } ?>
                </div>
                    <div class="mt-3">
                      <input type="checkbox" id="keepLogin" name="keepLogin">
                      <label for="keepLogin" class="ms-2">Resté connecté</label>
                    </div>
                   <div class="text-center">
                <input type="submit" value="Valider" class="btn mt-3 text-white btnLogin" id="buttonSubmitForms" />
                <a href="#"><p class="mt-3">mot de passe oublié ?</p></a>
                </div>
            </div>
        </div>
    </div>
</form>
<?php if( $successLogin == true){ ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/loginFail.js"></script>
<?php } ?>
<?php require 'includes/footer.php'; ?>