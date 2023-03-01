<?php
include './layout/header.php';
require(__DIR__.'/./inc/projectsQuery.php');
?>

<main>
    <div class="en-tête-photo" id="img-projets">
        <img src="assets/img/Page_Projet.jpg" alt="Image en-tête pleine écran">
        <div class="alpha" id="alpha-projet"></div>
        <h1>Résidence étudiante Grand Morillon</h1>
    </div>

    <h2 class="h2-projets">Résidence étudiante Grand Morillon - Suisse</h2>
    <h3 class="h3-projets">Accompagnement en appel d’offres et en travaux à la planification et stratégie Lean Construction.
        Résidence étudiante de l’Institut des hautes études internationales et du développement (IHEID). 634 Studios (Suisse).
        Architecte Kengo Kuma. Préfabrication. 19 mois (Gros Œuvre inclus).</h3>
    <div class="photo-lien">
        <a href="https://www.graduateinstitute.ch/fr/housing/our-residences/residence-etudiante-grand-morillon" target="_blank">
            <img class="grande-photo-projet" src="assets/img/Grand_Morillon/GRAND-MORILLON-projet.jpg" alt="Photo de la résidence étudiante Grand Morillon en Suisse">
        </a>
    </div>

    <div class="main-carousel carousel-projet">
        <?php foreach($morillonList as $morillon) : ?>
            <div class="cell">
                <img src="<?= $morillon['picture'] ?>" alt="<?= $morillon['text_alt'] ?>">
            </div>
        <?php endforeach; ?>
    </div>

    <div class="resume-projet">
        <div class="contexte-metho">
            <h3 class="h3-resume">Contexte</h3>
            <ul>
                <li>• Délais extrêmement courts</li>
                <li>• Capacité des usines pour la fabrication du mobilier</li>
                <li>• Contraintes logistiques :
                    <ul>
                        <li>• Flux important de matières</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="contexte-metho">
            <h3 class="h3-resume">Méthodologie lean construction</h3>
            <ul>
                <li>• Pilotage Last Planner® System (Zoning, Microzoning, Takt Time, Théorie des contraintes, chaîne critique)</li>
                <li>• Salle de pilotage (Big Room)</li>
                <li>• Gestion des flux</li>
                <li>• Gestion des stocks</li>
                <li>• Logistique</li>
                <li>• Application des "5S"</li>
                <li>• Préfabrication (cabines sanitaires, réseaux d'évacuation)</li>
            </ul>
        </div>
    </div>
    <a class="btn-retour-projets" href="projets.php">Retour</a>
    <div class="annexe">
        <h4>Liens Annexes</h4>
        <a href="https://www.youtube.com/watch?v=yaeSk4nHD8c" target="_blank">Résidence étudiante Grand Morillon par Kengo Kuma - Youtube</a> <br>
        <a href="https://cche.ch/fr/projets/residence-etudiante-du-grand-morillon/" target="_blank">Résidence étudiante du Grand Morillon – CCHE</a>
    </div>
</main>

<?php
include './layout/footer.php';
?>