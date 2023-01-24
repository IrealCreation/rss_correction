<?php
    /* Partie "Contrôleur" de la page */

    // Inclusion du fichier des fonctions
    require_once("includes/functions.php");

    // Inclusion du tableau des flux RSS
    require_once("includes/listeFlux.php");

    // Définition de la constante du titre
    define("TITLE", "Accueil");

    $fluxAffiches = [];

    foreach($listeFlux as $categorie => $flux) {
        if(isset($_COOKIE[$categorie])) {
            $fluxAffiches[] = simplexml_load_file($flux);
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
        <h1>Votre flux personnalisé</h1>

        <div class="row mb-4 row-gap-4 ">
            <?php if(count($fluxAffiches) > 0) {
                foreach($fluxAffiches as $flux) { ?>

                    <h2><?= $flux->channel->title ?></h2>
                    <?php 
                    foreach($flux->channel->item as $article) {
                        // Récupération de l'image de l'article
                        $content = $article->children('media', true)->content; 
                        $contentattr = $content->attributes();
                        $image = $contentattr["url"];
                        
                        ?>

                        <div class="col-sm-6 col-md-4">
                            <article class="card">
                                <header class="card-header">
                                    <h3>
                                        <a href="<?= $article->link ?>">
                                            <?= $article->title ?>
                                        </a>
                                    </h3>
                                </header>
                                <img class="img-fluid" src="<?= $image ?>" alt="Illustration de <?= $article->title ?>">
                                <div class="card-body">
                                    <p><?= $article->description ?></p>
                                </div>
                                <footer class="card-footer">
                                    <p>Date de parution : <?= convertDate($article->pubDate, DATE_RSS, "d / m / Y") ?></p>
                                </footer>
                            </article>
                        </div>

                        <?php
                    }
                }
            }
            else { ?>
                <div class="alert alert-warning">
                    Veuillez sélectionner des flux à afficher sur vos <a href="/parametre">paramètres</a>.
                </div>

            <?php } ?>
        </div>
    </main>  
    
    <?php include("includes/footer.php"); ?>

</body>
</html>