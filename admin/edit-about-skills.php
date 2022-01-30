<?php
include 'include/header.php';
?>

<?php
    use Admin\Lib\AboutSkills;
    $aboutSkills = new AboutSkills();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $aboutSkills = $aboutSkills->get_by_id($id);
    }
    

    if(isset($_POST['submit_btn'])){

        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];   
        $tools = $_POST['tools'];

        if (empty($title)){
            $_SESSION['emptyTitle'] = "Please enter title!";
        }
        if (empty($description)){
            $_SESSION['emptyDesc'] = "Please enter descripton!";
        }
        if (empty($tools)){
            $_SESSION['emptyTools'] = "Please enter tools!";
        }else{
            $aboutSkills->changeTitle($id, $title, $description, $tools);
            header('Location: ../index.php#about-me');
        }
    }

?>

    <main>
        <section class="main-hero edit-hero">
            <div class="edit-form">
                <div class="edit-heading">
                    <p>Edit about skills</p>
                </div>
                
                <form method="post" action="edit-about-skills.php" >
                    <input hidden type="text" name="id" id="" value="<?php echo $aboutSkills->getId(); ?>">
                    <div class="input-group">
                        <input type="text" name="title" class="input-field" placeholder="Title" value="<?php echo $aboutSkills->getTitle(); ?>">
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
                        <input type="text" name="tools" class="input-field" placeholder="Tools" value="<?php echo $aboutSkills->getTools(); ?>">
                        <?php if (isset($_SESSION['emptyTools'])): ?>
                            <div class="alert-wrong">
                                <?php
                                   echo $_SESSION['emptyTools'];
                                   unset($_SESSION['emptyTools'])
                                ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="input-group">
                        <textarea name="description" rows="10" placeholder="Description" class="input-message"><?php echo $aboutSkills->getDescription(); ?></textarea>

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