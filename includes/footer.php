<!-------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------Footer----------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------->
<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web</a></li>
                        <li><a href="#">Graphisme</a></li>
                        <li><a href="#">Application</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>À Propos</h3>
                    <ul>
                        <li><a href="#">Conditions d'utilisation</a></li>
                        <li><a href="#">Mentions légales</a></li>
                        <li><a href="#">Nous Contacter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                <p class="copyright">Devlop's © 2021</p>
            </div>
        </div>
    </footer>
</div>
<!-- Flèche pour remonter -->
<div id="divArrow" class="d-none">
<i class="fa-solid fa-arrow-up"></i>
</div>
<!-- Fin flèche pour remonter -->
<script src="https://kit.fontawesome.com/ca41a525e0.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
<script src="assets/js/cleave.min.js"></script>
<script>
  new FroalaEditor('textarea#froala-editor')
</script>
<script src="assets/js/myAccount.js"></script>
<script src="assets/js/updateCities.js"></script>
<!-- script pour la validation de l'inscrition sweetalert2-->
<?php if($_SERVER['PHP_SELF'] == '/Projet/Omar/adminManagement.php') { ?>
    <script src="assets/js/adminManagement.js"></script>
<?php } else if ($_SERVER['PHP_SELF'] == '/Projet/Omar/login.php') { ?>
    <script src="assets/js/loginCheck.js"></script>
<?php } else if ($_SERVER['PHP_SELF'] == '/Projet/Omar/register.php') { ?>
    <script src="assets/js/registerCheck.js"></script>
    <script src="assets/js/citiesJs.js"></script>
<?php } else if ($_SERVER['PHP_SELF'] == '/Projet/Omar/MyAccount.php') { ?>
<?php } else { ?>
    <script src="assets/js/script.js"></script>
<?php } ?>
</body>

</html>