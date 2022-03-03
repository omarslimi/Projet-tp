<?php
$user = new users;
$type = new types;
$typesList = $type->selectTypesList();
$user->id = $_SESSION['user']->id;
$userNameTypes = $user->selectNameOfTypes();
$siret = $user->selectUserSiret();

if (isset($_POST['personnalInformationsBtn'])) {
    var_dump($_POST);
    $formErrors = [];
    if (!empty($_POST['lastName'])) {
        if (preg_match($regex['nameRegex'], $_POST['lastName'])) {
            $user->lastName = strip_tags($_POST['lastName']);
        } else {
            $formErrors['lastName'] = LASTNAME_ERROR_INVALID;
        }
    } else {
        $formErrors['lastName'] = LASTNAME_EMPTY;
    }

    if (!empty($_POST['firstName'])) {
        if (preg_match($regex['nameRegex'], $_POST['firstName'])) {
            $user->firstName = strip_tags($_POST['firstName']);
        } else {
            $formErrors['firstName'] = FIRSTNAME_ERROR_INVALID;
        }
    } else {
        $formErrors['firstName'] = FIRSTNAME_EMPTY;
    }

    if (!empty($_POST['adress'])) {
        if (preg_match($regex['adressRegex'], $_POST['adress'])) {
            $user->adress = strip_tags($_POST['adress']);
        } else {
            $formErrors['adress'] = ADRESS_ERROR_INVALID;
        }
    } else {
        $formErrors['adress'] = ADRESS_EMPTY;
    }

    if (!empty($_POST['city'])) {
        $user->id_cities = strip_tags($_POST['city']);
    } else{
        $formErrors['city'] = CITY_EMPTY;
    }

    if (count($formErrors) == 0) {
        $userPersonnalInformations = $user->modifyPersonalInformations();
    }
}

if (isset($_POST['professionalInformationsBtn'])) {
    $formErrors = [];

    if (!empty($_POST['id_types'])) {
        $user->id_types = strip_tags($_POST['id_types']);
    } else {
        $formErrors['id_types'] = IDTYPES_ERROR;
    }

    if (!empty($_POST['businessName'])) {
        if (strlen($_POST['businessName']) >= 1) {
            if (preg_match($regex['businessNameRegex'], $_POST['businessName'])) {
                $user->businessName = strip_tags($_POST['businessName']);
            } else {
                $formErrors['businessName'] = BUSINESSNAME_ERROR_INVALID;
            }
        } else {
            $formErrors['businessName'] = BUSINESSNAME_ERROR;
        }
    } else {
        $formErrors['businessName'] = BUSINESSNAME_EMPTY;
    }

    if (!empty($_POST['siret'])) {
        if (preg_match($regex['siretRegex'], $_POST['siret'])) {
            $user->siret = strip_tags($_POST['siret']);
             if($user->checkIfSiretExist() > 0 && $user->siret != $siret){
                 $formErrors['siret'] = SIRET_ERROR_EXISTS;
             }
        } else {
            $formErrors['siret'] = SIRET_ERROR_INVALID;
        }
    } else {
        $formErrors['siret'] = SIRET_EMPTY;
    }

    if (count($formErrors) == 0) {
        $userProfessionalInformations = $user->modifyProfessionalInformations();
    }
}

if(isset($_POST['mailBtn'])){
    $formErrors = [];

    if (!empty($_POST['mail'])) {
        if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $user->mail = strip_tags($_POST['mail']);
            if($user->checkIfMailExist() > 0){
                $formErrors['mail'] = MAIL_ERROR_EXISTS;
            }
        } else {
            $formErrors['mail'] = MAIL_ERROR_INVALID;
        }
    } else {
        $formErrors['mail'] = MAIL_EMPTY;
    }

    if (count($formErrors) == 0) {
        $modifyMail = $user->modifyMail();
    }
}
if(isset($_POST['updateDescription'])){
    if(!empty($_POST['description'])){
        $user->biography = strip_tags($_POST['description']);
        $user->modifyBiography();
    }
}
$userDetails = $user->selectUserById();