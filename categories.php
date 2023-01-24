<?php
    /* Partie "Contrôleur" de la page */

    // Inclusion du fichier des fonctions
    require_once("includes/functions.php");

    // Inclusion du tableau des flux RSS
    require_once("includes/listeFlux.php");

    // Définition de la constante du titre
    define("TITLE", "Accueil");

    if(isset($_GET["cat"]) && isset($listeFlux[$_GET["cat"]])) {
        $flux = simplexml_load_file($listeFlux[$_GET["cat"]]);
    }

?>
<?php 
    /* Partie "Vue" de la page */
    include("includes/head.php"); 
?>
<body>
    <?php include("includes/header.php"); ?>

    <main class="container">
        <section class="row row-gap-4 mb-4">
            <?php if(isset($flux)) {
                // Affichons le flux RSS
                ?>
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
            else { ?>
                <div class="alert alert-danger">Le flux demandé n'existe pas !</div>
            <?php } ?>
        </section>
    </main>  
    
    <?php include("includes/footer.php"); ?>

</body>
</html>