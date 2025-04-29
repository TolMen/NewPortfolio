<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'src/component/head.php'; ?>
</head>

<body>

    <div id="liens"></div>

    <!-- Navigation bar inclusion -->
    <?php include 'src/component/navbar.php' ?>

    <header class="header">
        <div class="text">
            <span class="badge-web">Développeur web</span>
            <h1>Jessy Frachisse</h1>
            <p>Sites web modernes et dynamiques avec PHP/Symfony et CSS/Bootstrap. <br> Maîtrise l'intégration, les API REST, le debug et la gestion de bases de données.</p>
            <nav class="social-icon">
                <a href="https://github.com/TolMen" target="_blank" title="GitHub"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/jessyfrachisse/" target="_blank" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="public/assets/files/CVJessy.png" target="_blank" title="CV"><i class="fa-solid fa-file-lines"></i></a>
                <a href="#contact" title="Contactez-moi"><i class="fa-solid fa-comment"></i></a>
            </nav>
        </div>
    </header>

    <div class="boxSkills" style="height: 50vh; display: flex; justify-content: center; align-items: center;"> blablabla
        
        <div id="projets"></div>
    </div>

    <div class="boxProject">
        <h2 class="sectiontitle">Mes projets</h2>
        <div class="boxCard">
            <article class="artCard">
                <img src="public/assets/imgProjetBHE.jpg" alt="Image de mon projet BHE" class="imgCard">
                <span class="badge-web">En cours de création</span>

                <div class="dataCard">
                    <h2 class="titleCard">Black Hole Evénements</h2>
                    <span class="bioCard">Site vitrine réalisé de A à Z pour une entreprise d'audiovisuelle à Riom.</span>
                    <a href="#" class="buttonCard">En savoir plus</a>
                </div>
            </article>

            <article class="artCard">
                <img src="public/assets/imgProjetCivilipedia.jpg" alt="Image de mon projet Civilipédia" class="imgCard">
                <span class="badge-web">PHP</span>
                <span class="badge-web b2">MVC</span>

                <div class="dataCard">
                    <h2 class="titleCard">Civilipédia</h2>
                    <span class="bioCard">Projet scolaire d'un wiki collaboratif autour des grandes civilisations.</span>
                    <a href="#" class="buttonCard">En savoir plus</a>
                </div>
            </article>

            <article class="artCard">
                <img src="public/assets/imgProjetCiteOr.jpg" alt="Image de mon projet FanSite" class="imgCard">
                <span class="badge-web">PHP</span>

                <div class="dataCard">
                    <h2 class="titleCard">FanSite - Cité D'or</h2>
                    <span class="bioCard">FanSite sur une œuvre marquante, pour un projet scolaire.</span>
                    <a href="#" class="buttonCard">En savoir plus</a>
                </div>
            </article>
        </div>
    </div>




    <!-- Contact Form -->
    <div class="boxContact" id="contact">
        <h2>Contactez-nous</h2>
        <form method="POST" id="contactFrom" action="src/control/ContactControl/contactControl.php">

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

            <div class="inputBox inputBoxOther full-width margeBottom">
                <input type="text" id="subject" name="subject" minlength="2" required />
                <span>Objet</span>
                <i></i>
            </div>

            <div class="inputBox inputBoxOther full-width">
                <textarea id="message" name="message" minlength="5" required></textarea>
                <span class="spanTextarea">Message</span>
            </div>

            <input type="submit" name="envoi" value="Envoyer">
        </form>
    </div>








    <!-- Footer inclusion -->
    <?php include 'src/component/footer.php' ?>

    <!-- Link to JavaScript scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>