<?php
include './layout/header.php';
require(__DIR__.'/./inc/projectsQuery.php');
?>

<main>
    <div class="en-tête-photo" id="img-projets">
        <img src="assets/img/Page_Projet.jpg" alt="Image en-tête pleine écran">
        <div class="alpha" id="alpha-projet"></div>
        <h1>Restaurant Drouant</h1>
    </div>

    <h2 class="h2-projets">Restaurant Drouant - Paris (75)</h2>
    <h3 class="h3-projets">OPC Restaurant Drouant Paris (Marché privé)</h3>
    <div class="photo-lien">
        <a href="https://drouant.com/fr/" target="_blank">
            <img class="grande-photo-projet" src="assets/img/Restaurant_Drouant/RESTAURANT-DROUANT.jpg" alt="Façade du restaurant Drouant à Paris">
        </a>
    </div>

    <div class="main-carousel carousel-projet">
        <?php foreach($drouantList as $drouant) : ?>
            <div class="cell">
                <img src="<?= $drouant['picture'] ?>" alt="<?= $drouant['text_alt'] ?>">
            </div>
        <?php endforeach; ?>
    </div>

    <div class="resume-projet">
        <div class="contexte-metho">
            <h3 class="h3-resume">Contexte</h3>
            <ul>
                <li>• Délais très courts</li>
                <li>• Date d'ouverture impérative pour le Prix Goncourt 2019 (Novembre) avec un début de travaux en Septembre</li>
                <li>• Zone de stockage réduite (30m²)</li>
                <li>• Contraintes logistiques (projet au centre de Paris)</li>
            </ul>
        </div>
        <div class="contexte-metho">
            <h3 class="h3-resume">Méthodologie lean construction</h3>
            <ul>
                <li>• Pilotage Last Planner® System (Zoning, Microzoning, Théorie des contraintes, chaîne critique)</li>
                <li>• Intégration de la MOA et MOE pour le choix stratégique et de validation pour répondre aux délais du projet</li>
                <li>• Gestion des flux</li>
                <li>• Gestion des stocks</li>
                <li>• Application des "5S"</li>
            </ul>
        </div>
    </div>
    <a class="btn-retour-projets" href="projets.php">Retour</a>
</main>

<?php
include './layout/footer.php';
?>