<footer>
        <section class="footer-section" id="footer">
            <h1>Portfo<span>lio</span></h1>
            <?php
                use Admin\Lib\FooterLinks;

                $footerTitles = new FooterLinks();
                $footerTitles = $footerTitles->get_by_id(1);
            ?>
            <div class="footer-icons">
                <a href="<?php echo $footerTitles->getFacebook()?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="<?php echo $footerTitles->getTwitter()?>" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="<?php echo $footerTitles->getLinkedin()?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="<?php echo $footerTitles->getDribbble()?>" target="_blank"><i class="fab fa-dribbble"></i></a>
                <?php
                    if(isset($_SESSION['id'])){
                        echo "<a href='admin/edit-footer-links.php' class='edit-btn'><i class='far fa-edit'></i></a>";
                    }
                ?>
            </div>
            <p>
                Enes Shabani &copy; Copyright 2022
            </p>
        </section>
    </footer>
    <script src="assets/js/script.js"></script>
</body>

</html>