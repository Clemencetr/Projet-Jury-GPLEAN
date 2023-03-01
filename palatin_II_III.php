<?php
include './layout/header.php';
require(__DIR__.'/./inc/projectsQuery.php');
?>

<main>
    <div class="en-tête-photo" id="img-projets">
        <img src="assets/img/Page_Projet.jpg" alt="Image en-tête pleine écran">
        <div class="alpha" id="alpha-projet"></div>
        <h1>RTE - Palatin II et III</h1>
    </div>

    <h2 class="h2-projets">RTE - Palatin II et III - Puteaux (92)</h2>
    <h3 class="h3-projets">Accompagnement à la planification et pilotage projet « Aménagement de bureau pour RTE sur Palatin II et III »</h3>
    <div class="photo-lien">
        <a href="https://www.groupeduval.com/patrimoine/listings/palatin-ii-iii-a-la-defense/" target="_blank">
            <img class="grande-photo-projet" src="assets/img/RTE_palatin_II_III/le-palatin-ii-iii_admin.jpg" alt="Façade batiment Platin II et III">
        </a>
    </div>

    <div class="main-carousel carousel-projet">
            <?php foreach($palatinList as $palatin) : ?>
                <div class="cell">
                    <img src="<?= $palatin['picture'] ?>" alt="<?= $palatin['text_alt'] ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="resume-projet">
        <div class="contexte-metho">
            <h3 class="h3-resume">Contexte</h3>
            <ul>
                <li>• Délais très courts soumis à un jalon de fin de bail non modifiable</li>
                <li>• Agencement et aménagement de plateaux</li>
                <li>• Contraintes logistiques :
                    <ul>
                        <li>• Approvisionnement par un quai avec un espace limité</li>
                        <li>• Horaires d'approvisionnement resteints</li>
                        <li>• Espace de stockage tampon réduit</li>
                        <li>• Contraintes sur la dimension de camions pour les livraisons</li>
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
                <li>• Application des "5S"</li>
                <li>• Management Visuel</li>
            </ul>
        </div>
    </div>
    <a class="btn-retour-projets" href="projets.php">Retour</a>
</main>

<?php
include './layout/footer.php';
?>