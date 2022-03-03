<?php
$formErrors = [];
$user = new users;
if (count($_POST) > 0) {
    if (!empty($_POST['mail'])) {
        $user->mail=$_POST['mail'];
        if($user->checkIfMailExist() > 0) {
            $hash = $user->selectPasswordByMail();
        } else {
            $formErrors['mail'] = $formErrors['password'] = LOGIN_ERROR_INVALID;
        }
    } else {
        $formErrors['mail'] = LOGIN_MAIL_ERROR_EMPTY;
    }

    if(!empty($_POST['password'])){
        if (isset($hash)) {
            if(password_verify($_POST['password'], $hash->password)) {
                $_SESSION['user'] = $user->selectUserByMail();
                var_dump($_SESSION['user']->id);
                header('Location: index.php');
                exit;
            } else {
                $formErrors['password'] = $formErrors['password'] = LOGIN_ERROR_INVALID;
            }
}
    } else{
        $formErrors['password'] = $formErrors['password'] = PASSWORD_EMPTY;
    }

    if(count($formErrors) >= 1){
            $successLogin = true;
    }
}