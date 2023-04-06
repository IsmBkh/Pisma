<?php

session_start();
if(isset($_POST['send'])){
    // extraction des variables
    extract($_POST);
    // verifions si les variables existent et ne sont pas vides
    if(isset($prenom) && $prenom != "" &&
        isset($nom) && $nom != "" &&
        isset($email) && $email != "" &&
        isset($message) && $message != ""){
            // echo " tous les champs sont remplis";

            // envoyé l'email 
            $to = "ismailbkhwebdev@gmail.com";
            // objet du mail 
            $subject = "Vous avez reçu un Mail de : " . $email;

            $message = "
                <p>Vous avez reçu un message de <strong> ".$email."</strong></p>
                <p><strong>Visiteur : </strong> ". $nom ." </p>
                <p><strong>Message : </strong> ".$message."</p>  
            ";

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: <'.$email.'>' . "\r\n";

            // envoi du mail 
            $send = mail($to,$subject,$message,$headers);
            //verification de l'envoi
            if(!$send){
                $_SESSION['succes_messsage'] = "message envoyé";
                // REDIRECTION 
                header("location:validation.php");

            }else{
                $info = "message non envoyé";
            }
    }else {
        //si elles sont vides
        $info = "veuillez remplir tous les champs !"; 
    }
} 

?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Ismail Bakhtaoui</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    
</head>

<!-- http://localhost/Pisma/index.php -->

<body>

    <header class="sticky-top">
        <nav class="navbar navbar-expand navbar-white container">
            <a href="index.php" class="logo text-decoration-none nav-link btn-light" class="myname">Ismaïl Bakhtaoui</a>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item p-2">
                        <a href="projets.php" class="nav-link">Mes projets</a>
                    </li>
                    <li class="nav-item p-2">
                        <a href="index.php?page=contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="hero">
            <h1 class="p-2">Développeur Junior</h1>
            <a href="https://goo.gl/maps/qD1xefVx436HsKXL8" target="_blank">
                <img src="assets/img/place.svg" alt="" width="20" height="20">
                <strong>Montfermeil</strong> 
            </a>
            <a href="#contact" class="btn btn-outline-light">Me contacter</a>
        </div>


        <!-- A PROPOS -->

        <section class="about">

                <h2>A propos</h2>

            <div class="infos">

                <div class="info">
                    <h3>Mon parcours</h3>
                    <p>
                        Après plusieurs années d'études ainsi qu'une expérience en comptabilité chez Lafarge Holcim et OGF qui m'ont permis de développer un sens de l'organisation et du détail, j'ai décidé de me consacrer à ma passion pour l'informatique.
                    </p>
                    <p>
                        En effet, Durant la dématérialisation de la comptabilité au sein d'OGF et en observant le developpement des IA à travers le monde, j'ai réalisé l'intérêt que sucite le domaine informatique en moi.
                    </p>
                    <p>
                        Aujourd'hui en reconversion professionnelle, très motivé et rigoureux, j'apprends actuellement plusieurs languages et frameworks en autodidact afin de développer mon portfolio dans un premier temps et dans le but de proposer mes services à mes amis dans le court terme.
                    </p>
                    <p class="font-italic">
                        Ps : Ce site est en cours de développement et je prévois d'ajouter de nombreuses fonctionnalités axé Backend (Espace connexion, Backoffice...)
                    </p>

                    <h3>Soft skills</h3>
                    <ul>
                        <li>Esprit d'équipe</li>
                        <li>Autonome</li>
                        <li>Persévérant</li>
                        <li>Ambitieux</li>
                        <li>Ouverture d'esprit</li>
                        <li>Intelligence émotionnelle</li>
                        <li>Créatif</li>
                        <li>Organisé</li>
                    </ul>

                    <a class="curriculum" href="../assets/img/IsmailBakhtaoui-CVinformatique.pdf" target="_self" download="CV Ismail BAKHTAOUI">Télécharger mon CV</a> 
                </div>

                <div class="info">
                    <img src="" alt="">
                    <h3>Ismaïl Bakhtaoui</h3>
                    <q>
                        Ce que je préfère dans le métier de Développeur Web ?
                    <br>
                        Résoudre les problèmes, persévérer, créer.
                    </q>

                    <ul>
                        <li>26 ans</li>
                        <li>
                            <a href="https://goo.gl/maps/qD1xefVx436HsKXL8" target="_blank">
                                <img src="assets/img/place.svg" alt="" width="20" height="20">
                                <strong>Montfermeil</strong> 
                            </a>
                        </li>
                        <li>Hobbies: Sports, cinéma, langues étrangères</li>
                    </ul>

                </div>

            </div>


        </section>


        <!-- COMPETENCES -->


        <section class="skills">
            
            <h2>Compétences</h2>

            <div class="skills-types">
                <div class="background">
                    <div>
                        <h3>Front-End</h3>
                        <ul>
                            <li>HTML</li>
                            <li>CSS3</li>
                            <li>JavaScript</li>
                            <li>SASS</li>
                        </ul>
                    </div>
                </div>

                <div class="background">
                    <div>
                        <h3>Back-End</h3>
                        <ul>
                            <li>PHP</li>
                            <li>MySQL</li>
                        </ul>
                    </div>
                </div>

                <div class="background">
                    <div>
                        <h3>Framework</h3>
                        <ul>
                            <li>Bootstrap</li>
                            <li>jQuery</li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>


        <!-- CONTACT -->


<section class="form" id="contact">

    <?php 
    // afficher le msg d'erreur
        if(isset($info)) { ?>
            <p class="request_message" style="color:red">
                <?=$info?>
            </p>

        <?php
        }
    ?>
    
    <?php 
    // afficher le msg de succes
        if(isset( $_SESSION['succes_messsage'])) { ?>
            <p class="request_message" style="color:green">
                <?= $_SESSION['succes_messsage']?>
            </p>
        <?php
        }
    ?>

    <div class="container">

        <h2>Contact</h2>
        <p>Pour plus de renseignements, n'hésitez pas à me contacter !</p>

                     
        <p><abbr title="(obligatoire)" aria-hidden="true">*</abbr> Champs obligatoires</p>

        <form action="" method="POST">
            
            <div>
                <label for="prenom"><abbr title="(obligatoire)">*</abbr> Prénom</label>
                <input type="text" id="firstname" name="prenom" placeholder="Votre prénom" required>
            </div>

            <div>
                <label for="nom"><abbr title="(obligatoire)">*</abbr> Nom</label>
                <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
            </div>


            <div>
                <label for="tel">Téléphone</label>
                <input type="tel" id="tel" name="tel" placeholder="Téléphone">
            </div>

            <div>
                <label for="email"><abbr title="(obligatoire)">*</abbr> Mail</label>
                <input type="email" id="email" name="email" placeholder="mail@example.com" required>
            </div>

            <div>
                <label for="message"><abbr title="(obligatoire)">*</abbr> Message</label>
                <textarea id="message" name="message" cols="20" rows="8" placeholder ="Votre message" required></textarea>
            </div>

            <input type="submit" value ="Envoyer" name="send" id="send">

        </form>

        
    </div>

</section>              

</main>


</body>
</html>