<?php
if (!empty($_GET['zipCode'])) {
    require_once '../models/database.php';
    require_once '../models/citiesModel.php';
    $city = new cities;
    $city->zip_code = $_GET['zipCode'];
    $citiesList = $city->selectZip_codeList();
    echo json_encode($citiesList);
} else {
    $type = new types;
    $user = new users;
    $typesList = $type->selectTypesList();
    $formErrors = [];

    if (count($_POST) > 0) {
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

        if (!empty($_POST['id_types'])) {
            $user->id_types = strip_tags($_POST['id_types']);
        } else {
            $formErrors['id_types'] = IDTYPES_ERROR;
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

        if (!empty($_POST['zipCode'])) {
            if (preg_match($regex['zipCodeRegex'], $_POST['zipCode'])) {
                $user->id_cities = strip_tags($_POST['zipCode']);
            } else {
                $formErrors['zipCode'] = ZIPCODE_ERROR_INVALID;
            }
        } else {
            $formErrors['zipCode'] = ZIPCODE_EMPTY;
        }

        if (!empty($_POST['city'])) {
            $user->id_cities = strip_tags($_POST['city']);
        } else{
            $formErrors['city'] = CITY_EMPTY;
        }

        if (!empty($_POST['siret'])) {
            if (preg_match($regex['siretRegex'], $_POST['siret'])) {
                $user->siret = strip_tags($_POST['siret']);
                 if($user->checkIfSiretExist() > 0){
                     $formErrors['siret'] = SIRET_ERROR_EXISTS;
                 }
            } else {
                $formErrors['siret'] = SIRET_ERROR_INVALID;
            }
        } else {
            $formErrors['siret'] = SIRET_EMPTY;
        }

        if (!empty($_POST['mail'])) {
            if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                $user->mail = strip_tags($_POST['mail']);
            } else {
                $formErrors['mail'] = MAIL_ERROR_INVALID;
            }
        } else {
            $formErrors['mail'] = MAIL_EMPTY;
        }

        if (!empty($_POST['password'])) {
            if (preg_match($regex['passwordRegex'], $_POST['password'])) {
                $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            } else {
                $formErrors['password'] = PASSWORD_ERROR_INVALID;
            }
        } else {
            $formErrors['password'] = PASSWORD_EMPTY;
        }

        if (!empty($_POST['checkPassword'])) {
            if ($_POST['password'] === $_POST['checkPassword']) {
                $user->password = password_hash($_POST['checkPassword'], PASSWORD_DEFAULT);
            } else {
                $formErrors['checkPassword'] = CHECKPASSWORD_ERROR_DIFFERENT;
            }
        } else {
            $formErrors['checkPassword'] = CHECKPASSWORD_EMPTY;
        }

        if(count($formErrors) == 0){
            $user->biography = 'Je m\'appelle ' . $user->firstName . ', je suis un ' . $typesList[$_POST['id_types'] -1]->name;
            if ($user->insertUser()) {
                $success = true;
        
                $message = '
                <p>Bonjour ' . $_POST['firstName'] . '</p>
                <p>Votre inscription est validé</p>
                ';
        
                $headers = array(
                    'From'=>'no-reply@devlop\'s.fr',
                    'MIME-Version'=>'1.0',
                    'Content-type'=>'text/html; charset=UTF8'
                );
        
                mail($_POST['mail'], 'Bienvenue parmi nous', $message, $headers);
            }
        }
        
    }
}