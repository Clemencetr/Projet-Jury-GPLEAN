<?php

require(__DIR__.'/db.php');


if(isset($_POST['submitEmail'])) {
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['subject']) && !empty($_POST['message']) && !empty($_POST['accept'])) {

        $nom = $_POST['name'];
        $mail = $_POST['email'];
        $entreprise = $_POST['enterprise'];
        $télephone = $_POST['phone'];
        $sujet = $_POST['subject'];
        $message = $_POST['message'];

        $sql = "
                INSERT INTO users_mails (name, email, enterprise, phone, subject, message)
                VALUES ('{$nom}','{$mail}','{$entreprise}','{$télephone}','{$sujet}','{$message}')
                ";

                $queryRegister = $pdo->query($sql);
                $sendmail = $queryRegister->fetchAll(PDO::FETCH_ASSOC);


                echo "<p class='success'>Votre message a bien été envoyé avec succes !</p>";
    }else{
        echo "<p class='error'>Une information est manquante</p>";
    }
}