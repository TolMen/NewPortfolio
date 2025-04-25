<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'src/component/head.php'; ?>
</head>

<body>

    <div id="top"></div>

    <!-- Navigation bar inclusion -->
    <?php include 'src/component/navbar.php' ?>

    <header class="header">
        <div class="text">
            <span class="badge-web">Web developer</span>
            <h1>Jessy</h1>
            <p>Sites web modernes et dynamiques avec PHP/Symfony et CSS/Bootstrap. <br> Rigoureux et efficace, je maîtrise l'intégration, les API REST, le debug et la gestion de bases de données.</p>
        </div>
    </header>


    <div class="main-container">
















        <!-- Contact Form -->
        <div class="box">
            <form method="POST" id="contactFrom" action="src/control/ContactControl/contactControl.php">
                <h2>Contactez-nous</h2>

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
    </div>







    <!-- Footer inclusion -->
    <?php include 'src/component/footer.php' ?>

    <!-- Link to JavaScript scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>