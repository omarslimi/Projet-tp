<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Lien bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Lien Animate css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!--Lien Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Irish+Grover&family=Raleway&display=swap" rel="stylesheet">
    <!--link froala-->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <!--Lien CSS-->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Projet TP</title>
</head>

<body>
    <!-- Modal pour le bouton de la navbar rechercher-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Recherchez quelque chose</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="lastName"></label>
                    <input type="text" class="form-control mb-3" name="search" id="search" placeholder="ex : Application" required />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Rechercher</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la modal pour le bouton de la navbar rechercher-->
    <!-------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------Page accueil----------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------->
    <header <?= $_SERVER['PHP_SELF'] == '/Projet/Omar/index.php' ? 'id="pageHome"' : '' ?>>
        <!--début de la navbar-->
        <nav class="navbar navbar-expand-lg navbar-light <?= $_SERVER['PHP_SELF'] != '/Projet/Omar/index.php' ? 'navbarColor' : '' ?> fixed-top" id="navbar">
            <div class="container-fluid">
                <div class="d-lg-none col-4">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="col d-lg-none ms-4">
                    <a href="" class="nav-brand text-decoration-none text-white"><i class="far fa-gem me-1 text-white"></i>Devlop's</a>
                </div>
                <div class="row col-12 collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-md-flex d-grid">
                        <div class="col d-md-flex d-grid">
                            <?php if ($_SERVER['PHP_SELF'] == '/Projet/Omar/index.php') {  ?>
                                <p class="col-sm-2 col text-md-start text-center mt-3 me-3 ms-1" id="discoverNavbar"><a class="text-decoration-none text-white">Découvrir</a></p>
                            <?php } else { ?>
                                <p class="col-sm-2 col text-md-start text-center mt-3 me-3 ms-1" id="discoverNavbar"><a class="text-decoration-none text-white"  href="accueil">Découvrir</a></p>
                                
                            <?php } ?>
                            <p class="col-sm-9 col text-md-start text-center  mt-3"><a href="Ajouter-une-annonce" class="text-decoration-none text-white">Déposer une
                                    annonce</a></p>
                        </div>
                        <div class="col text-center mt-3 d-lg-inline d-none">
                            <a href="accueil" class="text-decoration-none">
                                <p class="text-white"><i class="far fa-gem me-1 text-white"></i>Devlop's</p>
                            </a>
                        </div>
                        <div class="col d-md-flex d-grid">
                            <p class="col-xl-9 col-sm-8 col text-center text-md-end ms-4 me-3 mt-3"><a href="" class="text-decoration-none text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Rechercher</a></p>
                        <div class="dropdown col-sm-2 col text-center text-md-end mt-3">
                            <a class="text-decoration-none text-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Mon&nbsp;compte
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <?php if(!$_SESSION) { ?>
                                <li><a class="dropdown-item" href="connexion">Connexion</a></li>
                                <li><a class="dropdown-item" href="inscription">Inscription</a></li>
                                <?php }else { ?>
                                <li><a class="dropdown-item" href="myAccount.php">Mon compte</a></li>
                                <li><a class="dropdown-item" href="logout.php">Déconnexion</a></li>
                                <?php } ?>
                            </ul>
                        </div>     
                    </div>
                    </div>
                </div>
            </div>
        </nav>
        <!--fin de la navbar-->
        <?php if ($_SERVER['PHP_SELF'] == '/Projet/Omar/index.php') { ?>
            <!--page acceuil contenu-->
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-6 pt-5">
                        <h2 class="text-center text-white" id="slogan">Trouvez des freelances disponibles</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center p-5 mt-5 ">
                    <a class="text-decoration-none btn p-3 me-xl-5 me-lg-5 me-sm-0" id="buttonDiscover">découvrir</a>
                    <a href="../Omar/Ajouter-une-annonce" class="text-decoration-none btn p-3" id="secondButton">déposer
                        une annonce</a>
                </div>
            </div>
        <?php } ?>
    </header>