<?php
include './layout/header.php';
require(__DIR__.'/./inc/projectsQuery.php');
?>

<main>
    <div class="en-tête-photo" id="img-projets">
        <img src="assets/img/Page_Projet.jpg" alt="Image en-tête pleine écran">
        <div class="alpha" id="alpha-projet"></div>
        <h1>La Caserne Chanzy</h1>
    </div>

    <h2 class="h2-projets">La Caserne Chanzy - Reims (51)</h2>
    <h3 class="h3-projets">OPC Hôtel 5* Groupe MARRIOT, un restaurant, une salle fitness et un SPA. Pilotage complet des travaux et
        de l’agencement (lits, meubles, rideaux, tables, pupitres, cuisine restaurant, équipement gymnase, lit de massage, …)
    </h3>
    <div class="photo-lien">
        <a href="https://www.lacasernechanzy.com/fr/" target="_blank">
            <img class="grande-photo-projet" src="assets/img/Caserne_Chanzy/Façade_Caserne_Chanzy.jpg" alt="Façade de la caserne Chanzy">
        </a>
    </div>

    <div class="main-carousel carousel-projet">
        <?php foreach($chanzyList as $chanzy) : ?>
            <div class="cell">
                <img src="<?= $chanzy['picture'] ?>" alt="<?= $chanzy['text_alt'] ?>">
            </div>
        <?php endforeach; ?>
    </div>

    <div class="resume-projet">
        <div class="contexte-metho">
            <h3 class="h3-resume">Contexte</h3>
            <ul>
                <li>• Délais très courts</li>
                <li>• Rénovation lourde</li>
                <li>• Cavités en fondation (anciennes glacières)</li>
                <li>• Construction au-dessus de la zone arrière-scène de l'opéra de Reims</li>
                <li>• Contraintes logistiques :
                    <ul>
                        <li>• Rue Chanzy : axe circulation principale des bus de Reims</li>
                        <li>• Rue piétonne Ducoudray avec l'implentation du marché de Noël en face de la cathédrale</li>
                        <li>• Travaux de voirie de la Mairie sur rue Ducoudray</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="contexte-metho">
            <h3 class="h3-resume">Méthodologie lean construction</h3>
            <ul>
                <li>• Pilotage Last Planner® System (Zoning, Microzoning, Takt Time, Théorie des contraintes, chaîne critique)</li>
                <li>• Salle de pilotage (Big Room)</li>
                <li>• Protocole de gestion des crises</li>
                <li>• Gestion des flux</li>
                <li>• Gestion des stocks</li>
                <li>• Application des "5S"</li>
                <li>• Gabarit pour standardiser l'emplacement des salles de bain, les dimensions des meubles, bar et l'implentation des bureaux (Poka Yoke en terminologie de Lean Construction)</li>
                <li>• Management Visuel des flux de travaux</li>
            </ul>
        </div>
    </div>
    <a class="btn-retour-projets" href="projets.php">Retour</a>
</main>

<?php
include './layout/footer.php';
?>