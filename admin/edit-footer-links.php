<?php
include 'include/header.php';
?>

<?php
    use Admin\Lib\FooterLinks;
    $footerLinks = new FooterLinks();

    $footerLinks = $footerLinks->get_by_id(1);

    if(isset($_POST['submit_btn'])){

        $facebook = $_POST['facebook'];
        $twitter = $_POST['twitter'];   
        $linkedin = $_POST['linkedin'];
        $dribbble = $_POST['dribbble'];


        if (empty($facebook)){
            $_SESSION['emptyFacebook'] = "Please enter your facebook link!";
        }
        if (empty($twitter)){
            $_SESSION['emptyTwitter'] = "Please enter your twitter link!";
        }
        if (empty($linkedin)){
            $_SESSION['emptyLinkedin'] = "Please enter your linkedin link!";
        }
        if (empty($dribbble)){
            $_SESSION['emptyDribbble'] = "Please enter your dribbble link!";
        }
        else{
            $footerLinks->changeLink($facebook, $twitter, $linkedin, $dribbble);
            header('Location: ../index.php#footer');
        }
    }

?>

    <main>
        <section class="main-hero edit-hero">
            <div class="edit-form">
                <div class="edit-heading">
                    <p>Edit footer links</p>
                </div>
                
                <form method="post" action="edit-footer-links.php" >
                    <div class="input-group">
                        <input type="text" name="facebook" class="input-field" placeholder="Facebook Link" value="<?php echo $footerLinks->getFacebook(); ?>">
                        <?php if (isset($_SESSION['emptyFacebook'])): ?>
                            <div class="alert-wrong">
                                <?php
                                   echo $_SESSION['emptyFacebook'];
                                   unset($_SESSION['emptyFacebook'])
                                ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="input-group">
                        <input type="text" name="twitter" class="input-field" placeholder="Twitter Link" value="<?php echo $footerLinks->getTwitter(); ?>">
                        <?php if (isset($_SESSION['emptyTwitter'])): ?>
                            <div class="alert-wrong">
                                <?php
                                   echo $_SESSION['emptyTwitter'];
                                   unset($_SESSION['emptyTwitter'])
                                ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="input-group">
                        <input type="text" name="linkedin" class="input-field" placeholder="Linkedin Link" value="<?php echo $footerLinks->getLinkedin(); ?>">
                        <?php if (isset($_SESSION['emptyLinkedin'])): ?>
                            <div class="alert-wrong">
                                <?php
                                   echo $_SESSION['emptyLinkedin'];
                                   unset($_SESSION['emptyLinkedin'])
                                ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="input-group">
                        <input type="text" name="dribbble" class="input-field" placeholder="Dribble Link" value="<?php echo $footerLinks->getDribbble(); ?>">
                        <?php if (isset($_SESSION['emptyDribbble'])): ?>
                            <div class="alert-wrong">
                                <?php
                                   echo $_SESSION['emptyDribbble'];
                                   unset($_SESSION['emptyDribbble'])
                                ?>
                            </div>
                        <?php endif ?>
                    </div>
                    
                    <div class="input-group input-buttons">
                        <a href="../index.php#footer" class="cancel-btn" class="cancel-btn">Cancel</a>
                        <input type="submit" name="submit_btn" class="submit-btn" value="Submit">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="../assets/js/script.js"></script>
</body>

</html>