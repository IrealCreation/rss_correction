<?php
    /* Partie "Contrôleur" de la page */

    // Inclusion du fichier des fonctions
    require_once("includes/functions.php");

    // Définition de la constante du titre
    define("TITLE", "Accueil");

    // Récupération des trois flux que nous avons choisis par défaut : Climat, Cultures Web, Jeux Vidéos
    $fluxClimat = simplexml_load_file("https://www.lemonde.fr/climat/rss_full.xml");
    $fluxWeb = simplexml_load_file("https://www.lemonde.fr/cultures-web/rss_full.xml");
    $fluxJV = simplexml_load_file("https://www.lemonde.fr/jeux-video/rss_full.xml");

    if(isset($_GET["submit"])) {
        $nbArticles = $_GET["nbArticles"];
    }
    else {
        $nbArticles = 12;
    }

?>
<?php 
    /* Partie "Vue" de la page */
    include("includes/head.php"); 
?>
<body>
    <?php include("includes/header.php"); ?>

    <main class="container">
        <h1>Notre sélection de flux du Monde</h1>

            
        <form action="" method="GET">
                
            <div class="row m-4">
                <div class="col-sm-6 offset-sm-2">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="nbArticles">Nombre d'articles à afficher</label>
                        <select class="form-select" id="nbArticles" name="nbArticles">
                            <option value="12">12</option>
                            <option value="9">9</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-primary" type="submit" name="submit">
                        Afficher
                    </button>
                </div>
            </form>
            </div>
        </div>

        <h2>Climat</h2>
        <section class="row row-gap-4 mb-4">
            <?php // Récupération des articles du flux
            for ($i=0; $i < $nbArticles; $i++) { 

                $article = $fluxClimat->channel->item[$i];

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
            ?>
        </section>

        <h2>Cultures Web</h2>
        <section class="row row-gap-4 mb-4">
            <?php // Récupération des articles du flux
            for ($i=0; $i < $nbArticles; $i++) { 

                $article = $fluxWeb->channel->item[$i];

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
            ?>
        </section>

        <h2>Jeux Vidéo</h2>
        <section class="row row-gap-4 mb-4">
            <?php // Récupération des articles du flux
            for ($i=0; $i < $nbArticles; $i++) { 

                $article = $fluxJV->channel->item[$i];

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
            ?>
        </section>
    </main>  
    
    <?php include("includes/footer.php"); ?>

</body>
</html>