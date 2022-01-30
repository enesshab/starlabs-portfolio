<?php
include 'include/header.php';
?>

<?php
    use Admin\Lib\AboutHeading;
    $aboutHeading = new AboutHeading();

    $aboutHeading = $aboutHeading->get_by_id(1);

    if(isset($_POST['submit_btn'])){

        $bigTitle = $_POST['bigTitle'];   
        $smallTitle = $_POST['smallTitle'];
        $description = $_POST['description'];

        if (empty($bigTitle)){
            $_SESSION['emptyBTitle'] = "Please enter main title!";
        }
        if (empty($smallTitle)){
            $_SESSION['emptySTitle'] = "Please enter second title!";
        }
        if (empty($description)){
            $_SESSION['emptyDesc'] = "Please enter descripton!";
        }else{
            $aboutHeading->changeTitle($bigTitle, $smallTitle, $description);
            header('Location: ../index.php#about-me');
        }
    }

?>

    <main>
        <section class="main-hero edit-hero">
            <div class="edit-form">
                <div class="edit-heading">
                    <p>Edit about headings</p>
                </div>
                
                <form method="post" action="edit-about-heading.php" >
                    <div class="input-group">
                        <input type="text" name="bigTitle" class="input-field" placeholder="Big Title" value="<?php echo $aboutHeading->getBigTitle(); ?>">
                        <?php if (isset($_SESSION['emptyBTitle'])): ?>
                            <div class="alert-wrong">
                                <?php
                                   echo $_SESSION['emptyBTitle'];
                                   unset($_SESSION['emptyBTitle'])
                                ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="input-group">
                        <input type="text" name="smallTitle" class="input-field" placeholder="Small Title" value="<?php echo $aboutHeading->getSmallTitle(); ?>">
                        <?php if (isset($_SESSION['emptySTitle'])): ?>
                            <div class="alert-wrong">
                                <?php
                                   echo $_SESSION['emptySTitle'];
                                   unset($_SESSION['emptySTitle'])
                                ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="input-group">
                        <textarea name="description" rows="10" placeholder="Description" class="input-message"><?php echo $aboutHeading->getDescription(); ?></textarea>

                        <?php if (isset($_SESSION['emptyDesc'])): ?>
                            <div class="alert-wrong">
                                <?php
                                   echo $_SESSION['emptyDesc'];
                                   unset($_SESSION['emptyDesc'])
                                ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="input-group input-buttons">
                        <a href="../index.php#about-me" class="cancel-btn" class="cancel-btn">Cancel</a>
                        <input type="submit" name="submit_btn" class="submit-btn" value="Submit">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="../assets/js/script.js"></script>
</body>

</html>