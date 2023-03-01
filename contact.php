<?php
include './layout/header.php';
require(__DIR__.'/./inc/mail.php');
?>

<main>
    <div class="en-tête-photo" id="img-contact">
        <img src="assets/img/Contact.jpg" alt="Image en-tête pleine écran">
        <h1>Contact</h1>
    </div>

    <h2>Contactez-nous</h2>
    <div class="container-contact">
        <div class="contact-block">
            <div class="contact">
                <h3 class="h3-contact">Adresse</h3>
                <p>19 rue Albert Piolet</p>
                <p>Saint-Germain-en-Laye</p>
            </div>
            <div class="contact">
                <h3 class="h3-contact">Téléphone</h3>
                <p>06 46 02 21 83</p>
            </div>
            <div class="contact">
                <h3 class="h3-contact">Email</h3>
                <p>administration@gplean.fr</p>
            </div>
        </div>
        <div class="contact-block" id="recaptcha">
            <form action="contact.php" method="POST" onsubmit="send_mail(event)">
                <label for="nom">Nom</label> <br>
                <input type="text" id="nom" name="name" required> <br>
                <label for="nom">Email</label> <br>
                <input type="email" id="email" name="email" required> <br>
                <label for="nom">Entreprise</label> <br>
                <input type="text" id="entreprise" name="enterprise"> <br>
                <label for="nom">Téléphone</label> <br>
                <input type="tel" id="phone" name="phone" required> <br>
                <label for="nom">Sujet</label> <br>
                <input type="text" id="subject" name="subject" required> <br>
                <label for="message">Message</label> <br>
                <textarea name="message" id="message" rows="10" required></textarea> <br>
                <input type="checkbox" id="accept" name="accept" required>
                <label for="conditions d'utilisation du site" id="label-accept"> En cochant cette case, j'accepte les <a href="mentions-legales.php">conditions d'utilisations du site</a></label> <br>
                <button class="g-recaptcha" data-sitekey="6LfrFmsfAAAAANtpwlHXqknxiH4sB0W1218FmF_e" data-callback='onSubmit' data-action='submit'>Submit</button>
                <input type="submit" name="submitEmail" value="Envoyer"> 
            </form>
            <div id="empty"></div>
        </div>
    </div>

    <div class="cartes-contact">
        <div class="container-contact">
            <div class="contact-block">
                <img src="assets/img/France.png" alt="Carte France, Belgique, Suisse et Luxembourg : lieux d'intervention GPLEAN">
            </div>
            <div class="contact-block">
                <p>
                    Nous intervenons pour des opérations publiques et privées essentiellement sur la Région Ile-de-France mais aussi
                    ponctuellement dans tout le <strong>territoire français</strong>, en <strong>Suisse</strong>, au <strong>Luxembourg</strong> et en <strong>Belgique</strong>.
                </p>
                <figure>
                    <img src="assets/img/Île-de-France.png" alt="Carte Ile-de-France : lieux où est déjà intervenu GPLEAN">
                    <figcaption>Île-de-France</figcaption>
                </figure>
            </div>
        </div>
    </div>
</main>

<?php
include './layout/footer.php';
?>