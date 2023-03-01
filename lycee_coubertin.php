<?php
include './layout/header.php';
require(__DIR__.'/./inc/projectsQuery.php');
?>

<main>
    <div class="en-tête-photo" id="img-projets">
        <img src="assets/img/Page_Projet.jpg" alt="Image en-tête pleine écran">
        <div class="alpha" id="alpha-projet"></div>
        <h1>Lycée Pierre de Coubertin</h1>
    </div>

    <h2 class="h2-projets">Lycée Pierre de coubertin - Meaux (77)</h2>
    <h3 class="h3-projets">OPC Mission d’OPC LEAN dans le cadre de la rénovation globale et extension du lycée Pierre de Coubertin à Meaux (77)</h3>
    <div class="photo-lycée">
        <div class="photo-lycee-block">
            <a href="https://www.amenagement77.fr/projet/lycee-pierre-de-coubertin/" target="_blank">
                <img class="grande-photo-lycée" src="assets/img/Lycée_Coubertin/plan-lycee-e1600696303944-2.jpg" alt="Photo du lycée Pierre de Coubertin vue du ciel">
            </a>
        </div>
        <div class="photo-lycee-block">
            <img class="grande-photo-lycée" src="assets/img/Lycée_Coubertin/PLAN_MASSE-1500x1061.jpg" alt="Carte du lycée Pierre de Coubertin vu de haut">
        </div>
    </div>

    <div class="resume-projet">
        <div class="contexte-metho">
            <h3 class="h3-resume">Contexte</h3>
            <ul>
                <li>• Délais très courts</li>
                <li>• Intervention en phase APS APD PRO</li>
                <li>• Contraintes de travaux et coordination complexe site occupé (désamiantage, nuissances sonores, ...)</li>
                <li>• Contrainte calendrier scolaire</li>
                <li>• Contraintes logistiques :
                    <ul>
                        <li>• Activité scolaire</li>
                        <li>• Espaces réduits</li>
                        <li>• Zone de stockage réduite</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="contexte-metho">
            <h3 class="h3-resume">Méthodologie lean construction</h3>
            <ul>
                <li>• Pilotage Last Planner® System (Zoning, Microzoning, Théorie des contraintes, chaîne critique)</li>
                <li>• Coordination VDC (Virtual Design & Construction - Performance de pilotage en BIM)</li>
                <li>• Gestion des flux</li>
                <li>• Préfabrication</li>
                <li>• Application des "5S"</li>
            </ul>
        </div>
    </div>
    <a class="btn-retour-projets" href="projets.php">Retour</a>
</main>

<?php
include './layout/footer.php';
?>