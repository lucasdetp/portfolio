<?php
if (isset($_GET['accepte-cookie'])) {
    setcookie('accepte-cookie', 'true', time() + 31 * 24 * 3600);
    header('Location:./');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Portfolio de ECHEVERRIA Lucas - Développeur web</title>
</head>

<body>
    <div class="preloader">
        <div class="loader-letter">
            <span class="lettre">C</span>
            <span class="lettre">H</span>
            <span class="lettre">A</span>
            <span class="lettre">R</span>
            <span class="lettre">G</span>
            <span class="lettre">E</span>
            <span class="lettre">M</span>
            <span class="lettre">E</span>
            <span class="lettre">N</span>
            <span class="lettre">T</span>
        </div>
        <span class="loader"></span>
    </div>
    <div class="stars">
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
    </div>
    <div class="bubbles">
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
    </div>
    <div class="container">
        <header>
            <div class="top-menu">
                <ul>
                    <li class="active" data-menu="about">
                        <a href="#about">
                            <img src="img/user.svg" alt="user">
                            <span class="link">A propos</span>
                        </a>
                    </li>
                    <li data-menu="experience-and-qualifications">
                        <a href="#experience-and-qualifications">
                            <img src="img/file.svg" alt="file">
                            <span class="link">Expériences & Diplômes</span>
                        </a>
                    </li>
                    <li data-menu="work">
                        <a href="#work">
                            <img src="img/folder-open.svg" alt="folder-open">
                            <span class=" link">Mes travaux</span>
                        </a>
                    </li>
                    <li data-menu="competences">
                        <a href="#competences">
                            <img src="img/user-check.svg" alt="user-check">
                            <span class="link">Compétences</span>
                        </a>
                    </li>
                    <li data-menu="contact">
                        <a href="#contact">
                            <img src="img/address-card.svg" alt="adress-card">
                            <span class="link">contact</span>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
        <div id="me" class="me">
            <div class="me-img">
                <img src="img/IMG_4536 (1).jpg" alt=photo de profile">
            </div>
            <div class="me-info">
                <h2 class="title">ECHEVERRIA Lucas</h2>
                <div class="me-details">
                    <h3 class="target" id="target"></h3>
                    <p class="blink">|</p>
                </div>
            </div>
            <div class="social">
                <a href="https://www.linkedin.com/in/echeverria-lucas/" target="_blank"><img src="img/linkedin.svg" alt="logo linkedin"></a>
                <a href="https://github.com/lucasdetp" target="_blank"><img src="img/github.svg" alt="logo github"></a>
            </div>
            <div class="links">
                <a href="img/ECHEVERRIA_Lucas_CV.pdf" target="_blank">télécharge mon cv</a>
                <a href="#contact" data-menu="contact" id="contact-me">contact moi</a>
            </div>
        </div>
        <section id="about" class="about active">
            <div class="about-me p-3">
                <h3 class="specialtitle">A <span>Propos</span></h3>
                <div class="row">
                    <div class="text">
                        <p>
                            Salut,
                            à la suite de mon BTS système numérique. J'intègre l'école My Digital School à Lyon afin de
                            réaliser un
                            bachelor Développeur web.
                            Actuellement, je suis à la recherche d'un poste de développeur dans le but d'effectuer mon
                            bachelor en
                            alternance. Le rythme de l'alternance
                            est de deux semaines en entreprise et une semaine en formation.
                            Je vous laisse en découvrir plus sur moi en visitant mon portfolio ;)
                        </p><br>
                        <p>Une aide à l’embauche de <strong>8.000€</strong> pour tout contrat d’apprentissage signé avant le <strong>31 Décembre 2022.</strong></p>
                    </div>
                    <div class="info">
                        <ul>
                            <li><strong>âge :</strong> 20</li>
                            <li><strong>adresse :</strong> Lyon, France</li>
                            <li><strong>École :</strong> My Digital School</li>
                            <li><strong>Formation :</strong> développeur web</li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="experience-and-qualifications" class="experience-and-qualifications">
            <div class="my-experience-and-qualifications p-3">
                <h3 class="specialtitle">E<span>xpériences & Diplômes</span></h3>
                <div class="row">
                    <div class="experience">
                        <div class="title">
                            <img src="img/briefcase.svg" alt="briefcase">
                            <h4>expériences</h4>
                        </div>
                        <div class="exp-box">
                            <span>2021</span>
                            <h4>Technicien au support informatique de Thuasne</h4>
                            <h5>Stage de 5 semaines</h5>
                            <p>
                                <li>Préaparation de PC</li>
                                <li>Changement de composant</li>
                            </p>
                        </div>
                    </div>
                    <div class="education">
                        <div class="title">
                            <img src="img/university-solid.svg" alt="university-logo">
                            <h4>Formations</h4>
                        </div>
                        <div class="edu-box">
                            <span>2022 - 2023</span>
                            <h4>Bachelor Développeur web</h4>
                            <h5>My Digital School</h5>
                            <p>
                                <li>POO</li>
                                <li>Développement front/back</li>
                                <li>Base de donnée</li>
                                <li>API</li>
                                <li>...</li>
                            </p>
                        </div>
                        <div class="edu-box">
                            <span>2020 - 2022</span>
                            <h4>BTS Système numérique</h4>
                            <h5>Lycée Edouard Branly</h5>
                            <p>
                                <li>Développement front/back</li>
                                <li>Développement en C#</li>
                                <li>Python</li>
                            </p>
                        </div>
                        <div class="edu-box">
                            <span>2020</span>
                            <h4>Baccalauréat Scientifique spécialité S.V.T - option ISN</h4>
                            <h5>Lycée Claude Fauriel</h5>
                            <p>
                                <li>Développement front</li>
                                <li>Python</li>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="work" class="work">
            <div class="my-work p-3">
                <h3 class="specialtitle">M<span>es travaux</span></h3>
                <div class="work-container">
                    <div class="box">
                        <div class="box-content">
                            <a href="https://github.com/lucasdetp/mds-poo-exercice-catalog" target="_blank">
                                <h4>Catalogue de films et séries</h4>
                                <p>Réalisation d'un site permettant l'affichage d'une base de donnée de films et séries.
                                    Plusieurs fonctionnalités ont été ajoutées comme un filtre en fonction du genre, l'affichage d'un film ou d'une série de façon aléatoire, l'affichage en fonction des meilleurs note ou de leur date de sortie. Utilisation de Laravel.<span><br><br>Date 2022</p></span>
                            </a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-content">
                            <a href="https://github.com/lucasdetp/cercles" target="_blank">
                                <h4>Cercles aléatoire</h4>
                                <p>En javascript vanilla, affichage de cercles de manière aléatoire avec une taille,
                                    position, couleur, temps d'affichage aléatoire.
                                    <h4><br>Sous-projet</h4>
                                    <p>Réalisation du même projet sur le framework Vue.js.
                                        <span><br><br>Date 2022 - 2022</span>
                                    </p>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-content">
                            <h4>Relais R3X</h4>
                            <p>Réalisation d'un logiciel en C#, pour l'association des radio amateurs du Rhône.
                                Dans le butd'afficher différentes mesures de température,
                                humidté... <span><br><br>2021 - 2022</p></span>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-content">
                            <h4>Création d'un site</h4>
                            <p>Réalisation d'un site, afin de présenter nos projets, pour ma part le jeu de l'oie.
                                Utilisation du langages HTML, CSS et JavaScript.<span><br><br>2020 - 2021</p></span>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-content">
                            <h4>Jeu de l'oie</h4>
                            <p>Réalisation du jeu de l'oie, sur arduino. A l'aide, d'un afficheur de 64 pixels et
                                de deux boutons. <span><br><br>2020 - 2021</p></span>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-content">
                            <h4>Un site sur la bataille navale</h4>
                            <p>Réalisation d'un site sur la bataille navale dans le cadre de l'option ISN
                                (Informatique et Science du Numérique).
                                Intégrant mon jeu de la bataille navale codé en Python.<span><br><br>2019 - 2020</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="competences" class="competences">
            <div class="my-competences p-3">
                <h3 class="specialtitle">C<span>ompétences</span></h3>
                <div class="skills p-3">
                    <div class="row">
                        <div class="skill-left">
                            <div class="skill">
                                <div class="title">
                                    <img src="img/paintbrush.svg" alt="paintbrush">
                                    <h4>Logiciel</h4>
                                </div>
                                <div class="skill-box">
                                    <h4>Suite Office</h4>
                                    <div class="progress">
                                        <span data-progress="90%"></span>
                                    </div>
                                </div>
                                <div class="skill-box">
                                    <h4>Suite Adobe</h4>
                                    <div class="progress">
                                        <span data-progress="70%"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-right">
                            <div class="languages">
                                <div class="title">
                                    <img src="img/flag.svg" alt="flag">
                                    <h4>langages</h4>
                                </div>
                                <div class="language">
                                    <h4>Français</h4>
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="language">
                                    <h4>Espagnol</h4>
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="language">
                                    <h4>Anglais</h4>
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="knowledges">
                                <div class="title">
                                    <img src="img/list.svg" alt="list">
                                    <h4>Connaissances</h4>
                                </div>
                                <div class="knowledge-container">
                                    <div class="knowledge-box">
                                        <img src="img/check.svg" alt="check">
                                        <h4>HTML</h4>
                                    </div>
                                    <div class="knowledge-box">
                                        <img src="img/check.svg" alt="check">
                                        <h4>CSS</h4>
                                    </div>
                                    <div class="knowledge-box">
                                        <img src="img/check.svg" alt="check">
                                        <h4>Sass</h4>
                                    </div>
                                    <div class="knowledge-box">
                                        <img src="img/check.svg" alt="check">
                                        <h4>PHP</h4>
                                    </div>
                                    <div class="knowledge-box">
                                        <img src="img/check.svg" alt="check">
                                        <h4>JavaScript</h4>
                                    </div>
                                    <div class="knowledge-box">
                                        <img src="img/check.svg" alt="check">
                                        <h4>C#</h4>
                                    </div>
                                    <div class="knowledge-box">
                                        <img src="img/check.svg" alt="check">
                                        <h4>Python</h4>
                                    </div>
                                    <div class="knowledge-box">
                                        <img src="img/check.svg" alt="check">
                                        <h4>Git</h4>
                                    </div>
                                    <div class="knowledge-box">
                                        <img src="img/check.svg" alt="check">
                                        <h4>Linux</h4>
                                    </div>
                                    <div class="knowledge-box">
                                        <img src="img/check.svg" alt="check">
                                        <h4>Laravel</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="contact">
            <div class="contact-me p-3">
                <h3 class="specialtitle">C<span>ontactez moi</span></h3>
                <div class="contact-container">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52964.93967378549!2d4.80634682285029!3d45.7586283998617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea516ae88797%3A0x408ab2ae4bb21f0!2sLyon!5e0!3m2!1sfr!2sfr!4v1669575805968!5m2!1sfr!2sfr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="info-list">
                        <ul>
                            <li><strong>Adresse :</strong> Lyon, France</li>
                            <li><strong>Email :</strong> detplucas@gmail.com</li>
                            <li><strong>Téléphone :</strong>06 23 30 84 797</li>
                        </ul>
                    </div>
                </div>
                <div class="form-title">
                    <h3 class="specialtitle">E<span>nvoyez-moi un message</span></h3>
                </div>
                <div class="container2">
                    <div class="contact-box">
                        <div class="right">
                            <?php

                            // Démarrage de la session

                            session_start();

                            // Vérification de la soumission du formulaire

                            if (isset($_POST['submit'])) {

                                // Récupération des données du formulaire

                                $nom = $_POST['nom'];
                                $email = $_POST['email'];
                                $message = $_POST['message'];
                                // En-têtes de l'email
                                $headers = "From: $nom <$email>\r\n";
                                // Envoi de l'email
                                if (mail("detplucas@gmail.com", "Formulaire de contact de mon portfolio", $message, $headers)) {
                                    // Message de confirmation
                                    $_SESSION['sent'] = true;
                                } else {
                                    // Message d'erreur
                                    $_SESSION['error'] = true;
                                }
                            }
                            ?>

                            <form method="post" action="">

                                <input type="text" placeholder="Entrer votre nom" name="nom" class="field" required><br>

                                <input type="email" name="email" placeholder="Entrer votre email" class="field" required><br>

                                <textarea name="message" placeholder="Entrer votre message" class="field" required></textarea><br>
                                <input type="submit" name="submit" value="Envoyer" class="field2">
                            </form>

                            <?php
                            if (isset($_SESSION['sent']) && $_SESSION['sent'] == true) {
                                echo "<p style='color: green; font-weight: bold; margin-top: 20px'>Votre message a été envoyé avec succès</p>";
                                unset($_SESSION['sent']); // Suppression de la variable de session
                            }
                            if (isset($_SESSION['error']) && $_SESSION['error'] == true) {
                                echo "<p style='color: red; font-weight: bold; margin-top: 20px'>Erreur lors de l'envoi du message</p>";
                                unset($_SESSION['error']); // Suppression de la variable de session
                            }
                            ?>
                        </div>
                    </div>
                </div>

        </section>

    </div>
    <button id="top-btn" title="Go to top"></button>
    <script src=" js/main.js"></script>
</body>

</html>