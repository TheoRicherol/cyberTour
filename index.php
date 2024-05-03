<?php
require 'vendor/autoload.php';

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest">
    <title>Cyber Tour</title>
</head>
<body>
<div class="background-embed-video-container">
    <iframe src="https://player.vimeo.com/video/933693830?background=1&responsive=1"  allowfullscreen></iframe>
</div>
<?php include "assets/includes/header.php" ?>
<main>
    <section id="whatis">
        <div class="section-container col-desktop col-mobile center-mobile">
            <div class="col-mobile center-mobile">
                <div class="logo desktop-display-none">
                    <img src="assets/img/logo_cyberTour.svg" alt="Logo CyberTour">
                </div>
            </div>

            <div class="bg-blue-gradient">
                <div class="bricks row-desktop col-mobile">
                    <div class="brick">
                        <div class="brick-title">
                            <h3 class="white-text">Des Conférences</h3>
                            <img src="assets/img/conference_picto.svg" alt=""></div>
                        <div class="brick-content">
                            <p class="white-text">Au cœur de notre mission, nos conférences visent à acculturer et sensibiliser les acteurs publics
                                et privés aux enjeux du numérique. Chaque événement est une opportunité de plonger dans
                                les
                                dernières tendances, défis et innovations, présentées par des experts du domaine.</p>
                        </div>
                    </div>
                    <div class="brick row-desktop col-mobile">
                        <div class="brick-title">
                            <h3 class="white-text">Le Journal de la Cyber</h3>
                            <img src="assets/img/journal_picto.svg" alt=""></div>
                        <div class="brick-content">
                            <p class="white-text">Le Journal de la Cyber est notre voix dans le monde de la
                                cybersécurité,
                                une
                                publication
                                périodique qui complète nos conférences et formations. Chaque édition est riche en
                                analyses,
                                en
                                retours d'expérience, en études de cas, en portraits, et en astuces offrant à nos
                                lecteurs
                                des
                                insights précieux sur les pratiques et les innovations en matière de cybersécurité.</p>
                        </div>
                    </div>
                    <div class="brick">
                        <div class="brick-title">
                            <h3 class="white-text">Des Formations</h3>
                            <img src="assets/img/formation_picto.svg" alt=""></div>
                        <div class="brick-content">
                            <p class="white-text">Nous offrons des formations pratiques pour tous les niveaux, conçues
                                pour
                                fournir aux
                                participants les compétences nécessaires pour naviguer et sécuriser leur espace
                                numérique.
                                Nos
                                formateurs adaptent les formations aux besoins spécifiques de chaque public,
                                garantissant
                                ainsi
                                la pertinence de chacune des sessions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="steps" class="bg-white">
        <div class="section-container row-desktop">
            <div class="side-section-title-text blue-gradient-text-mobile blue-gradient-text-desktop mobile-display-none">étapes</div>
            <div class="content col-desktop">
                <div class="section-title row-desktop row-mobile center-desktop center-mobile">
                    <img src="assets/img/title_graphicElement.svg" alt="">
                    <h2 class="ultra blue-gradient-text-mobile blue-gradient-text-desktop">étapes</h2>
                </div>
                <div class="steps-container row-desktop">
                    <div class="step col-desktop">
                        <div class="big-dash bg-grey"></div>
                        <div class="cards row-desktop old">
                            <!-- TODO:Flèche des évènements passés -->
                            <div class="step-card col-mobile col-desktop center-desktop center-mobile">
                                <div class="cards-images">
                                    <div class="bg-blue-gradient bg-img-blue-gradient"></div>
                                    <img src="assets/img/auch.webp" alt="Image de la ville de Auch">
                                </div>
                                <div class="step-infos col-desktop col-mobile center-desktop center-mobile">
                                    <p class="infos blue-gradient-text-mobile blue-gradient-text-desktop">
                                        <strong class="date">4 avril 2024</strong>,<br> le CyberTour s'arrête <br>à AUCH
                                    </p>
                                    <h3 class="infos blue-gradient-text-mobile blue-gradient-text-desktop">Les rencontres <br>du Gers</h3>

                                    <a class="button" href="/ct32">Le reTOUR !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step col-desktop">
                        <div class="big-dash bg-blue-gradient"></div>
                        <div class="cards row-desktop new">
                            <div class="step-card col-mobile col-desktop center-desktop center-mobile">
                                <div class="cards-images">
                                    <div class="bg-blue-gradient bg-img-blue-gradient"></div>
                                    <img src="assets/img/rodez.webp" alt="Image de la ville de Rodez">
                                </div>
                                <div class="step-infos col-desktop col-mobile center-desktop center-mobile">
                                    <p class="infos blue-gradient-text-mobile blue-gradient-text-desktop">
                                        <strong class="date">16 mai 2024</strong>,<br> le CyberTour s'arrête <br>à RODEZ
                                    </p>
                                    <h3 class="infos blue-gradient-text-mobile blue-gradient-text-desktop">Les rencontres <br> de RODEZ</h3>
<!--                                    TODO: Ajouter le lien d'inscription-->
                                    <a class="button" target="_blank" href="https://www.linscription.com/pro/activite.php?P1=181748">Inscription</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step col-desktop center-desktop center-mobile">
                        <div class="big-dash bg-blue-gradient"></div>
                        <div class="cards row-desktop new">
                            <div class="step-card col-mobile col-desktop center-desktop center-mobile">
                                <div class="cards-images">
                                    <div class="bg-blue-gradient bg-img-blue-gradient"></div>
                                    <img src="assets/img/toulouse.webp" alt="Image de la ville de Toulouse">
                                </div>
                                <div class="step-infos col-desktop col-mobile center-desktop center-mobile">
                                    <p class="infos blue-gradient-text-mobile blue-gradient-text-desktop">
                                        <strong class="date">18-19 septembre 2024</strong>, <br> le CyberTour s'arrête
                                        <br>à
                                        TOULOUSE
                                    </p>
                                    <h3 class="infos blue-gradient-text-mobile blue-gradient-text-desktop">Les rencontres <br>de TOULOUSE</h3>
                                    <a class="button disabled">Prochainement</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="speakers">
        <div class="section-container col-desktop bg-grey-light">
            <div class="big-graphic-element">
                <img src="assets/img/smallRoundedSquares_graphicElement.png" alt="">
            </div>
            <div class="section-title row-desktop center-desktop row-mobile center-mobile">
                <img src="assets/img/title_graphicElement.svg" alt="">
                <h2 class="ultra blue-gradient-text-mobile blue-gradient-text-desktop">intervenants</h2>
            </div>
            <div class="content row-desktop col-mobile">
                <div class="logo">
                    <img src="assets/img/logo_cyberTour.svg" alt="">
                </div>
                <div class="speakers-container row-desktop col-mobile">
                    <div class="speaker center-mobile">
                        <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Bertrand Meyer</h4>
                        <p>Créateur du langage Eiffel</p>
                    </div>
                    <div class="speaker center-mobile">
                        <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Damien Bancal</h4>
                        <p>Fondateur de Zataz</p>
                    </div>
                    <div class="speaker center-mobile">
                        <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Roberto Cascella</h4>
                        <p>CTO at European Cyber Security Organisation (ECSO)</p>
                    </div>
                    <div class="speaker center-mobile">
                        <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Jean-François Junger</h4>
                        <p>Chef d’unité adjoint d’unité Cyber
                            au sein de l’Union européenne</p>
                    </div>
                    <div class="speaker center-mobile">
                        <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Jean-Paul Laborde</h4>
                        <p>Ancien secrétaire général
                            des Nations Unis</p>
                    </div>

                    <div class="speaker center-mobile">
                        <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Général Marc Watin-Augouard</h4>
                        <p>Co-fondateur du FIC</p>
                    </div>
                    <div class="speaker center-mobile">
                        <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Alain Bauer</h4>
                        <p>Professeur de criminologie</p>
                    </div>
                    <div class="speaker center-mobile">
                        <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Laurent Verdier</h4>
                        <p>Directeur général de
                            <a href="https://cybermalveillance.gouv.fr">cybermalveillance.gouv.fr</a>
                        </p>
                    </div>

                    <div class="speaker center-mobile">
                        <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Baptiste Robert</h4>
                        <p>Fondateur de Predicta Lab</p>
                    </div>
                    <div class="speaker center-mobile">
                        <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Fabien Lecoq</h4>
                        <p>CTSO Sopra Steria</p>
                    </div>
                    <div class="speaker center-mobile">
                        <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Nicolas Arpagian</h4>
                        <p>Vice président de HeadMind Partners</p>
                    </div>
                    <div class="speaker center-mobile">
                        <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Nicolas Brochot</h4>
                        <p>Délégué régional d’Orange Occitanie</p>
                    </div>
                    <div class="speaker center-mobile">
                        <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Yves Clément</h4>
                        <p>Responsable développement marché entreprises chez Groupama d’Oc</p>
                    </div>
                    <div class="speaker center-mobile">
                        <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Caroline De Rubiana</h4>
                        <p>Directrice de Cyber’Occ</p>
                    </div>
                    <div class="speaker center-mobile">
                        <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Christophe Fleury</h4>
                        <p>Délégué adjoint à la sécurité numérique pour l’Occitanie à l’ANSSI </p>
                    </div>
                    <div class="speaker center-mobile">
                        <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Stéphane Barret</h4>
                        <p>Fondateur d’Apexi </p>
                    </div>
                    <div class="speaker center-mobile">
                        <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Philippine Soucaze-Suberbielle</h4>
                        <p>Juriste en propriété intellectuelle au cabinet Loyve Avocats </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team">
        <div class="section-container bg-white col-desktop">
            <div class="section-title row-mobile center-mobile row-desktop center-desktop">
                <img src="assets/img/title_graphicElement.svg" alt="">
                <h2 class="ultra blue-gradient-text-mobile blue-gradient-text-desktop">équipe</h2>
            </div>
            <div class="row-desktop">
                <div class="team-container row-desktop col-mobile center-mobile">
                    <div class="team-card col-mobile center-mobile">
                        <div class="cards-images">
                            <div class="bg-blue-gradient bg-img-blue-gradient"></div>
                            <img src="/assets/img/Martin.webp" alt="">
                        </div>
                        <div class="team-member-infos col-mobile center-mobile">
                            <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Martin Venzal</h4>
                            <p>En charge des relations
                                institutionnelles</p>
                            <div class="contact">
                                <img src="assets/img/mail_picto.svg" alt="Pictogramme enveloppe mail"> <a
                                        href="mailto:m.venzal@projet-x.org">m.venzal@projet-x.org</a>
                            </div>
                            <div class="contact">
                                <img src="assets/img/phone_picto.svg" alt="Pictogramme téléphone"> <a
                                        href="tel:+33616124138">06 16 12 41 38</a>
                            </div>
                        </div>
                    </div>
                    <div class="team-card col-mobile center-mobile">
                        <div class="cards-images">
                            <div class="bg-blue-gradient bg-img-blue-gradient"></div>
                            <img src="/assets/img/Sebastien.webp" alt="">

                        </div>
                        <div class="team-member-infos col-mobile center-mobile">
                            <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Sébastien Bakus</h4>
                            <p>Chef de projet et de
                                développement</p>
                            <div class="contact">
                                <img src="assets/img/mail_picto.svg" alt="Pictogramme enveloppe mail"> <a
                                        href="mailto:s.bakus@projet-x.org">s.bakus@projet-x.org</a>
                            </div>
                            <div class="contact">
                                <img src="assets/img/phone_picto.svg" alt="Pictogramme téléphone"> <a
                                        href="tel:+33778953104">07 78 95 31 04</a>
                            </div>
                        </div>
                    </div>
                    <div class="team-card col-mobile center-mobile">
                        <div class="cards-images">
                            <div class="bg-blue-gradient bg-img-blue-gradient"></div>
                            <img src="/assets/img/Clara.webp" alt="">

                        </div>
                        <div class="team-member-infos col-mobile center-mobile">
                            <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Clara Martin</h4>
                            <p>En charge de la
                                communication</p>
                            <div class="contact">
                                <img src="assets/img/mail_picto.svg" alt="Pictogramme enveloppe mail"> <a
                                        href="mailto:c.martin@projet-x.org">c.martin@projet-x.org</a>
                            </div>
                            <div class="contact">
                                <img src="assets/img/phone_picto.svg" alt="Pictogramme téléphone"> <a
                                        href="tel:+33618297915">06 18 29 79 15</a>
                            </div>
                        </div>
                    </div>
                    <div class="team-card col-mobile center-mobile">
                        <div class="cards-images">
                            <div class="bg-blue-gradient bg-img-blue-gradient"></div>
                            <img src="/assets/img/Samuel.webp" alt="">

                        </div>
                        <div class="team-member-infos col-mobile center-mobile">
                            <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Samuel Cette</h4>
                            <p>En charge des contenus
                                éditoriaux</p>
                        </div>
                    </div>
                    <div class="team-card col-mobile center-mobile">
                        <div class="cards-images">
                            <div class="bg-blue-gradient bg-img-blue-gradient"></div>
                            <img src="/assets/img/JeanChristophe.webp" alt="">

                        </div>
                        <div class="team-member-infos col-mobile center-mobile">
                            <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Jean-Christophe Arguillère</h4>
                            <p>Commissaire de l’évènement</p>
                            <div class="contact">
                                <img src="assets/img/mail_picto.svg" alt="Pictogramme enveloppe mail"> <a
                                        href="mailto:jc.arguillere@projet-x.org">jc.arguillere@projet-x.org</a>
                            </div>
                            <div class="contact">
                                <img src="assets/img/phone_picto.svg" alt="Pictogramme téléphone"> <a
                                        href="tel:+33673000894">06 73 00 08 94</a>
                            </div>
                        </div>
                    </div>
                    <div class="team-card col-mobile center-mobile">
                        <div class="cards-images">
                            <div class="bg-blue-gradient bg-img-blue-gradient"></div>
                            <img src="assets/img/Vivianne.webp" alt="">

                        </div>
                        <div class="team-member-infos col-mobile center-mobile">
                            <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Vivianne Prando</h4>
                            <p>Responsable commercialisation</p>
                            <div class="contact">
                                <img src="assets/img/mail_picto.svg" alt="Pictogramme enveloppe mail"> <a
                                        href="mailto:v.prando@projet-x.org">v.prando@projet-x.org</a>
                            </div>
                            <div class="contact">
                                <img src="assets/img/phone_picto.svg" alt="Pictogramme téléphone"> <a
                                        href="tel:+33652151210">06 52 15 12 10</a>
                            </div>
                        </div>
                    </div>
                    <div class="team-card col-mobile center-mobile">
                        <div class="cards-images">
                            <div class="bg-blue-gradient bg-img-blue-gradient"></div>
                            <img src="/assets/img/Thomas.webp" alt="">

                        </div>
                        <div class="team-member-infos col-mobile center-mobile">
                            <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Thomas Richerol</h4>
                            <p>En charge de la direction
                                artistique</p>
                        </div>
                    </div>
                    <div class="team-card col-mobile center-mobile">
                        <div class="cards-images">
                            <div class="bg-blue-gradient bg-img-blue-gradient"></div>
                            <img src="/assets/img/Clement.webp" alt="">

                        </div>
                        <div class="team-member-infos col-mobile center-mobile">
                            <h4 class="blue-gradient-text-mobile blue-gradient-text-desktop">Clément Gaffié</h4>
                            <p>Chef de Projet</p>
                        </div>
                    </div>
                </div>
                <div class="side-section-title-text blue-gradient-text-mobile blue-gradient-text-desktop mobile-display-none">équipe</div>
            </div>
        </div>
    </section>
<?php include "assets/includes/footer.php" ?>
</main>

<?php include "assets/includes/scripts.php"?>
</body>
</html>