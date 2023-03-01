<?php
include './layout/header.php';
require(__DIR__ . '/./inc/thumbnailsQuery.php');
require(__DIR__ . '/./inc/partnersQuery.php');
require(__DIR__ . '/./inc/clientsQuery.php');
?>

<main>
    <div class="en-tête-photo" id="img-projets-references">
        <img src="assets/img/Projets-References.jpg" alt="Image en-tête pleine écran">
        <div class="alpha" id="alpha-projets-references"></div>
        <h1>Projets / Références</h1>
    </div>

    <div class="img-projets">
        <?php foreach ($thumbnailList as $thumbnail) : ?>
            <a href="<?= $thumbnail['lien'] ?>"><img src="<?= $thumbnail['picture'] ?>" alt="<?= $thumbnail['text_alt'] ?>"></a>
        <?php endforeach; ?>
    </div>

    <div id="section-nbr">
        <div class="nbr-decompte">
            <div class="count">
                <p class="num"><span>36</span></p> Clients
            </div>
            <div class="count">
                <p class="num"><span>52</span></p> Projet LPS
            </div>
            <div class="count">
                <p class="num"><span>32</span></p> Affaires
            </div>
        </div>
    </div>

    <div class="slider">
        <div class="temoignages-clients">
            <?php foreach ($clientList as $client) : ?>
                <?php if ($client['id'] == 1) : ?>
                    <div class="slide-client active" id="content1">
                        <p>"<?= $client['comments'] ?>"</p>
                        <p><span><?= $client['organization'] ?></span></p>
                    </div>
                <?php else : ?>
                    <?php if ($client['id'] == 2) : ?>
                        <div class="slide-client" id="content2">
                            <p>"<?= $client['comments'] ?>"</p>
                            <p><span><?= $client['organization'] ?></span></p>
                        </div>
                    <?php else : ?>
                        <?php if ($client['id'] == 3) : ?>
                            <div class="slide-client" id="content3">
                                <p>"<?= $client['comments'] ?>"</p>
                                <p><span><?= $client['organization'] ?></span></p>
                            </div>
                        <?php else : ?>
                            <div class="slide-client" id="content4">
                                <p>"<?= $client['comments'] ?>"</p>
                                <p><span><?= $client['organization'] ?></span></p>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <button id="next" onclick="next()"><img src="./assets/img/next.png" alt="Img_flèche_next"></button>
        <button id="prev" onclick="prev()"><img src="./assets/img/prev.png" alt="Img_flèche_previous"></button>

        <div class="dot-container">
            <button onclick="dot(1)"></button>
            <button onclick="dot(2)"></button>
            <button onclick="dot(3)"></button>
            <button onclick="dot(4)"></button>
        </div>
    </div>

    <div class="partenaires">
        <div class="slide-partners">
            <div class="img-partners">
                <?php foreach ($partnerList as $partner) : ?>
                        <img src="<?= $partner['picture'] ?>" alt="<?= $partner['text_alt'] ?>">
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</main>

<?php
include './layout/footer.php';
?>