<?php
include './layout/header.php';
require(__DIR__.'/./inc/projectsQuery.php');
?>

<main>
    <div class="en-tête-photo" id="img-projets">
        <img src="assets/img/Page_Projet.jpg" alt="Image en-tête pleine écran">
        <div class="alpha" id="alpha-projet"></div>
        <h1>Hémicycle Simone Veil</h1>
    </div>

    <h2 class="h2-projets">Hémicycle Simone Veil - Saint-Ouen (93)</h2>
    <h3 class="h3-projets">OPC Aménagement de l’Hémicycle, d’une salle polyvalente et construction de deux pavillons de contrôle du futur hôtel
        de la Région Ile-de-France à Saint-Ouen (Marché Public)
    </h3>
    <div class="photo-lien">
        <a href="https://www.denu-paradon.com/blank-1-1" target="_blank">
            <img class="grande-photo-projet" src="assets/img/Hémicycle_SimoneVeil/HEMICYCLE.jpg" alt="Photo du batiment de l'Hemicycle Simone Veil">
        </a>
    </div>

    <div class="main-carousel carousel-projet">
        <?php foreach($hemicycleList as $hemicycle) : ?>
            <div class="cell">
                <img src="<?= $hemicycle['picture'] ?>" alt="<?= $hemicycle['text_alt'] ?>">
            </div>
        <?php endforeach; ?>
    </div>

    <div class="resume-projet">
        <div class="contexte-metho">
            <h3 class="h3-resume">Contexte</h3>
            <ul>
                <li>• Délais très courts</li>
                <li>• Zone de stockage réduite</li>
                <li>• Contraintes de travaux et coordination complexe sur la zone Hémicycle</li>
                <li>• Contraintes technique (faux plafond monoacoustique hémicycle, renfort de structure, gradin en suspension)</li>
                <li>• Contraintes logistiques :
                    <ul>
                        <li>• Coactivité avec projet en cours</li>
                        <li>• Travaux de voirie et aménagement extérieurs</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="contexte-metho">
            <h3 class="h3-resume">Méthodologie lean construction</h3>
            <ul>
                <li>• Pilotage Last Planner® System (Zoning, Microzoning, Théorie des contraintes, chaîne critique)</li>
                <li>• Livraisons just-in time exemple pupitres hémicycle</li>
                <li>• Gestion des flux</li>
                <li>• Application des "5S"</li>
            </ul>
        </div>
    </div>
    <a class="btn-retour-projets" href="projets.php">Retour</a>
</main>

<?php
include './layout/footer.php';
?>