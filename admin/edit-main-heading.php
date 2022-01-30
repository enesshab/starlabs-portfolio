<?php
include 'include/header.php';
?>

<?php
    use Admin\Lib\MainHeading;
    $mainHeading = new MainHeading();

    $mainHeading = $mainHeading->get_by_id(1);

    if(isset($_POST['submit_btn'])){

        $smallTitle = $_POST['smallTitle'];
        $bigTitle = $_POST['bigTitle'];   
        $description = $_POST['description'];

        if (empty($smallTitle)){
            $_SESSION['emptySTitle'] = "Please enter second title!";
        }
        if (empty($bigTitle)){
            $_SESSION['emptyBTitle'] = "Please enter main title!";
        }
        if (empty($description)){
            $_SESSION['emptyDesc'] = "Please enter descripton!";
        }else{
            if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ""){
                if($_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/png"){
                        if($_FILES['image']['type'] == "image/png"){
                            $filename = uniqid('MAIN_').".png";
                        }else if($_FILES['image']['type'] == "image/jpeg"){
                            $filename = uniqid('MAIN_').".jpg";
                        }
                        move_uploaded_file($_FILES['image']['tmp_name'], "../assets/img/".$filename);
                        $mainHeading->changeTitle($smallTitle, $bigTitle, $description, $filename);
                        header('Location: ../index.php#');
    
                }else{
                    $_SESSION['wrong'] = "Please upload an image file!";
                }
    
                
            }else{
                $_SESSION['emptyImage'] = "Please select an image!";
            }
            
        }
    }

?>

    <main>
        <section class="main-hero edit-hero">
            <div class="edit-form">
                <div class="edit-heading">
                    <p>Edit footer links</p>
                </div>
                
                <form method="post" action="edit-main-heading.php" enctype="multipart/form-data">
                <?php if (isset($_SESSION['wrong'])): ?>
                            <div class="alert-wrong">
                                <?php
                                   echo $_SESSION['wrong'];
                                   unset($_SESSION['wrong'])
                                ?>
                            </div>
                        <?php endif ?>
                    <div class="input-group">
                        <input type="text" name="smallTitle" class="input-field" placeholder="Small Title" value="<?php echo $mainHeading->getSmallTitle(); ?>">
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
                        <input type="text" name="bigTitle" class="input-field" placeholder="Big Title" value="<?php echo $mainHeading->getBigTitle(); ?>">
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
                        <textarea name="description" rows="10" placeholder="Description" class="input-message"><?php echo $mainHeading->getDescription(); ?></textarea>

                        <?php if (isset($_SESSION['emptyDesc'])): ?>
                            <div class="alert-wrong">
                                <?php
                                   echo $_SESSION['emptyDesc'];
                                   unset($_SESSION['emptyDesc'])
                                ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="input-group" >
                        <input type="file" name="image" class="input-field" accept="image/png,image/jpeg" ?>
                        <?php if (isset($_SESSION['emptyImage'])): ?>
                            <div class="alert-wrong">
                                <?php
                                   echo $_SESSION['emptyImage'];
                                   unset($_SESSION['emptyImage'])
                                ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="input-group input-buttons">
                        <a href="../index.php#" class="cancel-btn" class="cancel-btn">Cancel</a>
                        <input type="submit" name="submit_btn" class="submit-btn" value="Submit">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="../assets/js/script.js"></script>
</body>

</html>