<?php
$regex = [
    'nameRegex' => '/^[a-zA-Z- \'À-ÖØ-öø-ÿ]+$/',
    'businessNameRegex' => '/^[a-zA-Z-0-9 \'À-ÖØ-öø-ÿ]+$/',
    'adressRegex' => '/^([0-9À-ÖØ-öø-ÿ]+)\s([a-zÀ-ÖØ-öø-ÿ]+)\s([A-Z]{0,1}[a-zÀ-ÖØ-öø-ÿ]+)\s{0,1}([A-Z]{0,1}[a-zÀ-ÖØ-öø-ÿ]+)\s{0,1}([a-z0-9À-ÖØ-öø-ÿ]+)$/',
    'passwordRegex' => '#^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$#',
    'siretRegex' => '/^([0-9]{9}){1}[ ]{1}([0-9]{5}){1}$/',
    'zipCodeRegex' => '/^[0-9]{5}(?:-[0-9]{4})?$/'
];

define('LASTNAME_EMPTY', 'Entrer votre nom');
define('LASTNAME_ERROR_INVALID', 'Entrer un nom correct');

define('FIRSTNAME_EMPTY', 'Entrer votre prénom');
define('FIRSTNAME_ERROR_INVALID', 'Entrer un prénom correct');

define('BUSINESSNAME_EMPTY', 'Entrer le nom de votre entreprise');
define('BUSINESSNAME_ERROR', 'Le nom de l\'entreprise doit contenir minimun 3 caractères');
define('BUSINESSNAME_ERROR_INVALID', 'Entrer un nom d\'entreprise correct');

define('IDTYPES_ERROR', 'Choisissez votre statut');

define('ADRESS_EMPTY', 'Entrer votre adresse');
define('ADRESS_ERROR_INVALID', 'Entrer une adresse correct');

define('ZIPCODE_EMPTY', 'Entrer un code postal');
define('ZIPCODE_ERROR_INVALID', 'Entrer un code postal correct');

define('CITY_EMPTY', 'Entrer une ville');

define('SIRET_EMPTY', 'Entrer votre numéro de siret');
define('SIRET_ERROR_INVALID', 'Entrer un siret correct');
define('SIRET_ERROR_EXISTS', 'Le numéro de siret est déja utilisé');

define('MAIL_EMPTY', 'Entrer votre adresse mail');
define('MAIL_ERROR_INVALID', 'Entrer une adresse mail correct');
define('MAIL_ERROR_EXISTS', 'L\'adresse mail est déja utilisé');

define('PASSWORD_EMPTY', 'Entrer un mot de passe');
define('PASSWORD_ERROR_INVALID', 'le mot de passe doit contenir minimum 8 caractères, une majuscule, un chiffre et un caractère spécial');

define('CHECKPASSWORD_EMPTY', 'Confirmer le mot de passe');
define('CHECKPASSWORD_ERROR_DIFFERENT', 'Les mots de passe ne correspondent pas');

define('LOGIN_MAIL_ERROR_EMPTY', 'Entrer votre adresse mail');
define('LOGIN_ERROR_INVALID', 'L\'adresse mail ou le mot de passe est invalide');

define('TITLE_ERROR_EMPTY', 'Entrer un titre');
define('TITLE_ERROR_INVALID', 'Entrer un titre correct');
define('TITLE_ERROR', 'le titre doit comporter minimun 7 caractères');

define('CATEGORY_EMPTY', 'Veuillez choisir une catégorie');