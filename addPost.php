<?php 
session_start();
require 'includes/header.php';
require_once 'models/database.php';
require_once 'models/categoriesModel.php';
require_once 'models/postModel.php';
require_once 'controllers/addPostController.php'; 
?>
<form action="addPost.php" method="POST">
    <div class="container rounded-3" id="box">
        <div class="row justify-content-center">
            <h4 class="text-center mt-5 fw-bold fs-1" id="fontFamilyForm">Déposer une annonce</h4>
            <div class="col-lg-6">
                <img src="assets/img/Login-rafiki-login.png" alt="image de formulaire" class="w-100">
            </div>
            <div class="col-lg-6">
                <div>
                <label for="title" class="mt-5">Quel est le titre de l’annonce ?</label>
                <input type="text" class="form-control <?= isset($formErrors['title']) ? 'is-invalid' : ''; ?>" value="<?= @$_POST['title']; ?>" name="title" id="title" placeholder="ex : site web de vente de moto" />
                <?php if (isset($formErrors['title'])) { ?>
                        <p class="invalid-feedback"><?= $formErrors['title'] ?></p>
                    <?php } ?>
                </div>
                <div>
                <label for="selectCategory" class="mt-3">Choisissez une catégorie suggérée</label>
                <select name="selectCategory" id="selectCategory" class="d-block form-select <?= isset($formErrors['selectCategory']) ? 'is-invalid' : ''; ?>">
                    <option disabled selected>--Choisissez--</option>
                    <?php foreach ($categoryList as $c) { ?>
                    <option <?= isset($_POST['selectCategory']) && $_POST['selectCategory'] == $c->id ? 'selected' : '' ?> value="<?= $c->id ?>" ><?= $c->name ?></option>
                    <?php } ?>
                </select>
                <?php if (isset($formErrors['selectCategory'])) { ?>
                        <p class="invalid-feedback"><?= $formErrors['selectCategory'] ?></p>
                    <?php } ?>
                </div>
                <div>
                <label class="mt-3 <?= isset($formErrors['title']) ? 'is-invalid' : ''; ?>" for="budget">Quel est votre budget ?</label>
                <select name="budget" id="budget" class="d-block form-select <?= isset($formErrors['budget']) ? 'is-invalid' : ''; ?>">
                    <option disabled selected>--Choisissez--</option>
                    <?php foreach ($BudgetrangesList as $b) { ?>
                    <option <?= isset($_POST['budget']) && $_POST['budget'] == $b->id ? 'selected' : '' ?> value="<?= $b->id ?>" ><?= $b->range ?></option>
                    <?php } ?>
                </select>
                <?php if (isset($formErrors['budget'])) { ?>
                        <p class="invalid-feedback"><?= $formErrors['budget'] ?></p>
                    <?php } ?>
                </div>
                <div>
                <label class="mt-3" for="froala-editor">Dites-nous en plus</label>
                <textarea name="froala-editor" id="froala-editor" class="<?= isset($formErrors['froala-editor']) ? 'is-invalid' : ''; ?>" value="<?= @$_POST['froala-editor']; ?>"></textarea>
                <?php if (isset($formErrors['froala-editor'])) { ?>
                        <p class="invalid-feedback"><?= $formErrors['froala-editor'] ?></p>
                    <?php } ?>
                </div>
                <input type="submit" value="Valider" class="btn mt-3 text-white" id="buttonSubmitForms" />
            </div>
        </div>
</form>
</div>
<?php require 'includes/footer.php'; ?>