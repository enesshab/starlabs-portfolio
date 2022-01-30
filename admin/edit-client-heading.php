<?php
include 'include/header.php';
?>

<?php
    use Admin\Lib\ClientHeading;
    $clientHeading = new ClientHeading();

    $clientHeading = $clientHeading->get_by_id(1);

    if(isset($_POST['submit_btn'])){

        $title = $_POST['title'];   
        $description = $_POST['description'];

        if (empty($title)){
            $_SESSION['emptyTitle'] = "Please enter title!";
        }

        if (empty($description)){
            $_SESSION['emptyDesc'] = "Please enter descripton!";
        }else{
            $clientHeading->changeTitle($title, $description);
            header('Location: ../index.php#client');
        }
    }

?>

    <main>
        <section class="main-hero edit-hero">
            <div class="edit-form">
                <div class="edit-heading">
                    <p>Edit client headings</p>
                </div>
                
                <form method="post" action="edit-client-heading.php" >
                    <div class="input-group">
                        <input type="text" name="title" class="input-field" placeholder="Title" value="<?php echo $clientHeading->getTitle(); ?>">
                        <?php if (isset($_SESSION['emptyTitle'])): ?>
                            <div class="alert-wrong">
                                <?php
                                   echo $_SESSION['emptyTitle'];
                                   unset($_SESSION['emptyTitle'])
                                ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="input-group">
                        <textarea name="description" rows="10" placeholder="Description" class="input-message"><?php echo $clientHeading->getDescription(); ?></textarea>

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
                        <a href="../index.php#client" class="cancel-btn" class="cancel-btn">Cancel</a>
                        <input type="submit" name="submit_btn" class="submit-btn" value="Submit">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="../assets/js/script.js"></script>
</body>

</html>