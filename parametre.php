<?php
    /* Partie "Contrôleur" de la page */

    // Inclusion du fichier des fonctions
    require_once("includes/functions.php");

    // Définition de la constante du titre
    define("TITLE", "Accueil");
    
    if(isset($_POST["submit"])) {
        if(isset($_POST["climat"])) {
            setcookie("climat", $_POST["climat"], array(
                "expires" => time() + 3600 * 24 * 30,
                'secure' => false,
                'httponly' => false,
                'samesite' => 'strict',
                'path' => '/'
            ));
        }
        else {
            setcookie("climat", null, -3600);
            unset($_COOKIE["climat"]);
        }

        if(isset($_POST["cultures-web"])) {
            setcookie("cultures-web", $_POST["cultures-web"], array(
                "expires" => time() + 3600 * 24 * 30,
                'secure' => false,
                'httponly' => false,
                'samesite' => 'strict',
                'path' => '/'
            ));
        }
        else {
            setcookie("cultures-web", null, -3600);
            unset($_COOKIE["cultures-web"]);
        }

        if(isset($_POST["jeux-video"])) {
            setcookie("jeux-video", $_POST["jeux-video"], array(
                "expires" => time() + 3600 * 24 * 30,
                'secure' => false,
                'httponly' => false,
                'samesite' => 'strict',
                'path' => '/'
            ));
        }
        else {
            setcookie("jeux-video", null, -3600);
            unset($_COOKIE["jeux-video"]);
        }

        if(isset($_POST["tennis"])) {
            setcookie("tennis", $_POST["tennis"], array(
                "expires" => time() + 3600 * 24 * 30,
                'secure' => false,
                'httponly' => false,
                'samesite' => 'strict',
                'path' => '/'
            ));
        }
        else {
            setcookie("tennis", null, -3600);
            unset($_COOKIE["tennis"]);
        }

        if(isset($_POST["biologie"])) {
            setcookie("biologie", $_POST["biologie"], array(
                "expires" => time() + 3600 * 24 * 30,
                'secure' => false,
                'httponly' => false,
                'samesite' => 'strict',
                'path' => '/'
            ));
        }
        else {
            setcookie("biologie", null, -3600);
            unset($_COOKIE["biologie"]);
        }

        if(isset($_POST["societe"])) {
            setcookie("societe", $_POST["societe"], array(
                "expires" => time() + 3600 * 24 * 30,
                'secure' => false,
                'httponly' => false,
                'samesite' => 'strict',
                'path' => '/'
            ));
        }
        else {
            setcookie("societe", null, -3600);
            unset($_COOKIE["societe"]);
        }

        if(isset($_POST["gastronomie"])) {
            setcookie("gastronomie", $_POST["gastronomie"], array(
                "expires" => time() + 3600 * 24 * 30,
                'secure' => false,
                'httponly' => false,
                'samesite' => 'strict',
                'path' => '/'
            ));
        }
        else {
            setcookie("gastronomie", null, -3600);
            unset($_COOKIE["gastronomie"]);
        }

        if(isset($_POST["afrique"])) {
            setcookie("afrique", $_POST["afrique"], array(
                "expires" => time() + 3600 * 24 * 30,
                'secure' => false,
                'httponly' => false,
                'samesite' => 'strict',
                'path' => '/'
            ));
        }
        else {
            setcookie("afrique", null, -3600);
            unset($_COOKIE["afrique"]);
        }

        if(isset($_POST["argent"])) {
            setcookie("argent", $_POST["argent"], array(
                "expires" => time() + 3600 * 24 * 30,
                'secure' => false,
                'httponly' => false,
                'samesite' => 'strict',
                'path' => '/'
            ));
        }
        else {
            setcookie("argent", null, -3600);
            unset($_COOKIE["argent"]);
        }
    }

?>
<?php 
    /* Partie "Vue" de la page */
    include("includes/head.php"); 
?>
<body>
    <?php include("includes/header.php"); ?>

    <main class="container">
        <h1>Paramètres du flux personnalisé</h1>

        <form action="" method="POST">
            <div class="row">
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <label for="climat" class="form-control">Climat</label>
                        <div class="input-group-text">
                            <input type="checkbox" class="form-check-input" id="climat" name="climat" <?= (isset($_COOKIE["climat"]) || isset($_POST["climat"]) ? "checked" : "") ?>>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <label for="jeux-video" class="form-control">Jeux vidéo</label>
                        <div class="input-group-text">
                            <input type="checkbox" class="form-check-input" id="jeux-video" name="jeux-video" <?= (isset($_COOKIE["jeux-video"]) || isset($_POST["jeux-video"]) ? "checked" : "") ?>>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <label for="cultures-web" class="form-control">Cultures web</label>
                        <div class="input-group-text">
                            <input type="checkbox" class="form-check-input" id="cultures-web" name="cultures-web" <?= (isset($_COOKIE["cultures-web"]) || isset($_POST["cultures-web"]) ? "checked" : "") ?>>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <label for="tennis" class="form-control">Tennis</label>
                        <div class="input-group-text">
                            <input type="checkbox" class="form-check-input" id="tennis" name="tennis" <?= (isset($_COOKIE["tennis"]) || isset($_POST["tennis"]) ? "checked" : "") ?>>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <label for="biologie" class="form-control">Biologie</label>
                        <div class="input-group-text">
                            <input type="checkbox" class="form-check-input" id="biologie" name="biologie" <?= (isset($_COOKIE["biologie"]) || isset($_POST["biologie"]) ? "checked" : "") ?>>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <label for="societe" class="form-control">Société</label>
                        <div class="input-group-text">
                            <input type="checkbox" class="form-check-input" id="societe" name="societe" <?= (isset($_COOKIE["societe"]) || isset($_POST["societe"]) ? "checked" : "") ?>>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <label for="gastronomie" class="form-control">Gastronomie</label>
                        <div class="input-group-text">
                            <input type="checkbox" class="form-check-input" id="gastronomie" name="gastronomie" <?= (isset($_COOKIE["gastronomie"]) || isset($_POST["gastronomie"]) ? "checked" : "") ?>>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <label for="afrique" class="form-control">Afrique</label>
                        <div class="input-group-text">
                            <input type="checkbox" class="form-check-input" id="afrique" name="afrique" <?= (isset($_COOKIE["afrique"]) || isset($_POST["afrique"]) ? "checked" : "") ?>>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="input-group mb-3">
                        <label for="argent" class="form-control">Argent</label>
                        <div class="input-group-text">
                            <input type="checkbox" class="form-check-input" id="argent" name="argent" <?= (isset($_COOKIE["argent"]) || isset($_POST["argent"]) ? "checked" : "") ?>>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" type="submit" name="submit">Enregistrer</button>
            </div>
        </form>
    </main>  
    
    <?php include("includes/footer.php"); ?>

</body>
</html>