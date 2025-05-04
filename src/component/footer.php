<!-- Footer section -->
<footer class="bg-light text-dark py-4 custom-footer">
    <div class="container text-center">

        <!-- Copyright text with dynamic year -->
        <p class="mb-0">
            &copy;
            <?php
            // Set timezone to Paris and display the current year
            date_default_timezone_set("Europe/Paris");
            echo date("Y");
            ?>
            Jessy | Tous les droits sont réservés. <br />
        </p>

        <!-- Social media and CV links -->
        <nav class="social-icon">
            <a href="https://github.com/TolMen" target="_blank" title="GitHub">
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="https://www.linkedin.com/in/jessyfrachisse/" target="_blank" title="LinkedIn">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
            <a href="public/assets/files/CVJessy.png" target="_blank" title="CV">
                <i class="fa-solid fa-file-lines"></i>
            </a>
        </nav>

    </div>
</footer>