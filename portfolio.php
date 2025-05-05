<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Includes shared metadata and stylesheet links -->
    <?php include 'src/component/head.php'; ?>
</head>

<body>

    <div id="liens"></div>

    <!-- Include the main navigation bar -->
    <?php include 'src/component/navbar.php' ?>

    <!-- 
    ==============
    HEADER SECTION
    ==============
    -->
    <header class="header">
        <div class="text">
            <span class="badge-web">Développeur web</span>
            <h1>Jessy Frachisse</h1>
            <p>
                Sites web modernes et dynamiques avec PHP/Symfony et CSS/Bootstrap. <br>
                Maîtrise l'intégration, les API REST, le debug et la gestion de bases de données.
            </p>

            <!-- Social and external links -->
            <nav class="social-icon">
                <a href="https://github.com/TolMen" target="_blank" title="GitHub"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/jessyfrachisse/" target="_blank" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="public/assets/files/CVJessy.png" target="_blank" title="CV"><i class="fa-solid fa-file-lines"></i></a>
                <a href="tel:+33667689169" title="Téléphonez-moi"><i class="fa-solid fa-phone-volume"></i></a>
                <a href="#contact" title="Contactez-moi"><i class="fa-solid fa-comment"></i></a>
            </nav>
        </div>
        <div id="skills"></div>
    </header>

    <!-- 
    ==============
    SKILLS SECTION
    ==============
    -->
    <div class="boxSkill">
        <h2 class="titleSkill">Mes skills</h2>
        <div class="skillGrid">

            <!-- Programming Languages -->
            <div class="skillCol">
                <h3>Langages</h3>
                <div class="iconGroup">
                    <span title="PHP 8.2"><i class="fa-brands fa-php"></i></span>
                    <span title="SQL"><i class="fa-solid fa-database"></i></span>
                    <span title="CSS3"><i class="fa-brands fa-css3-alt"></i></span>
                </div>
            </div>

            <!-- Frameworks & Libraries -->
            <div class="skillCol">
                <h3>Frameworks</h3>
                <div class="iconGroup">
                    <span title="Symfony 7"><i class="fa-brands fa-symfony"></i></span>
                    <span title="Bootstrap 5.3"><i class="fa-brands fa-bootstrap"></i></span>
                </div>
            </div>

            <!-- Other Skills -->
            <div class="skillCol">
                <h3>Autres</h3>
                <div class="iconGroup">
                    <span title="Travail en équipe"><i class="fa-solid fa-people-group"></i></span>
                    <span title="Gestion base de donnée"><i class="fa-solid fa-server"></i></span>
                    <span title="Modèle MVC"><i class="fa-solid fa-diagram-project"></i></span>
                </div>
            </div>

        </div>
        <div id="projets"></div>
    </div>

    <!-- 
    ================
    PROJECTS SECTION
    ================
    -->
    <div class="boxProject">
        <h2 class="sectiontitle">Mes projets</h2>
        <div class="boxCard">

            <!-- Project 1 : BHE -->
            <article class="artCard">
                <img src="public/assets/imgProjetBHE.jpg" alt="Image de mon projet BHE" class="imgCard">
                <div class="dataCard">
                    <h2 class="titleCard">Black Hole Evénements</h2>
                    <span class="badgeProject">PHP</span>
                    <span class="badgeProject">SQL</span>
                    <span class="bioCard">Site vitrine réalisé de A à Z pour une entreprise d'audiovisuelle à Riom.</span>
                    <a href="#" class="buttonCard">Voir la démo</a>
                </div>
            </article>

            <!-- Project 2 : Civilipédia -->
            <article class="artCard">
                <img src="public/assets/imgProjetCivilipedia.jpg" alt="Image de mon projet Civilipédia" class="imgCard">
                <div class="dataCard">
                    <h2 class="titleCard">Civilipédia</h2>
                    <span class="badgeProject">PHP</span>
                    <span class="badgeProject">Equipe</span>
                    <span class="bioCard">Projet scolaire d'un wiki collaboratif autour des grandes civilisations.</span>
                    <a href="#" class="buttonCard">Voir la démo</a>
                </div>
            </article>

            <!-- Project 3 : FanSite -->
            <article class="artCard">
                <img src="public/assets/imgProjetCiteOr.jpg" alt="Image de mon projet FanSite" class="imgCard">
                <div class="dataCard">
                    <h2 class="titleCard">FanSite - Cité D'or</h2>
                    <span class="badgeProject">PHP</span>
                    <span class="bioCard">FanSite sur une œuvre marquante, pour un projet scolaire.</span>
                    <a href="#" class="buttonCard">Voir la démo</a>
                </div>
            </article>

        </div>
        <div id="contact"></div>
    </div>

    <!-- 
    ====================
    CONTACT FORM SECTION
    ====================
    -->
    <div class="boxMainContact">

        <div class="boxContact">
            <h2>Contactez-moi</h2>

            <!-- Contact Form -->
            <form method="POST" id="contactFrom" action="src/control/ContactControl/contactControl.php">

                <!-- Identity Fields -->
                <div class="boxIdentity">
                    <div class="inputBox inputBoxIdentity">
                        <input type="text" id="name" name="name" minlength="2" maxlength="15" pattern="[A-Za-z-]{2,15}" required />
                        <span>Nom complet</span>
                        <i></i>
                    </div>
                    <div class="inputBox inputBoxIdentity">
                        <input type="email" id="email" name="email" required />
                        <span>Email</span>
                        <i></i>
                    </div>
                </div>

                <!-- Subject Field -->
                <div class="inputBox inputBoxOther full-width margeBottom">
                    <input type="text" id="subject" name="subject" minlength="2" required />
                    <span>Objet</span>
                    <i></i>
                </div>

                <!-- Message Field -->
                <div class="inputBox inputBoxOther full-width">
                    <textarea id="message" name="message" minlength="5" required></textarea>
                    <span class="spanTextarea">Message</span>
                </div>

                <!-- Submit Button -->
                <input type="submit" name="envoi" value="Envoyer">
            </form>
        </div>
    </div>

    <!--    
    ================
    FOOTER & SCRIPTS
    ================
    -->

    <!-- Footer content -->
    <?php include 'src/component/footer.php' ?>

    <!-- JS Bundle: Bootstrap & dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>