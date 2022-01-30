<?php
include 'include/header.php';
?>

<?php
    use Admin\Lib\Work;
    $work = new Work();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $work = $work->get_by_id($id);
    }

    if(isset($_POST['submit_btn'])){

        $id = $_POST['id'];
        $title = $_POST['title'];
        $link = $_POST['link'];   

        if (empty($title)){
            $_SESSION['emptyTitle'] = "Please enter title!";
        }
        if (empty($link)){
            $_SESSION['emptyLink'] = "Please enter project link!";
        }
        else{
            if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ""){
                if($_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/png"){
                        if($_FILES['image']['type'] == "image/png"){
                            $filename = uniqid('WORK_').".png";
                        }else if($_FILES['image']['type'] == "image/jpeg"){
                            $filename = uniqid('WORK_').".jpg";
                        }
                        move_uploaded_file($_FILES['image']['tmp_name'], "../assets/img/".$filename);
                        $work->editWork($id, $title, $link, $filename);
                        header('Location: ../index.php#my-work');
    
                }else{
                    $_SESSION['wrong'] = "Please upload an image file!";
                }
    
                
            }else{
                $_SESSION['emptyImage'] = "Please select an image!";
            }
            
        }
    }

    if(isset($_POST['delete_btn'])){
        $id = $_POST['id'];
        if($work->delete($id)){
            header('Location: ../index.php#my-work');
        }else{
            $_SESSION['wrong'] = "Failed to delete user!";
            header('Location: edit-work.php');
        }
        
    }

?>

    <main>
        <section class="main-hero edit-hero">
            <div class="edit-form">
                <div class="edit-heading">
                    <p>Edit footer links</p>
                </div>
                
                <form method="post" action="edit-work.php" enctype="multipart/form-data">
                    <?php if (isset($_SESSION['wrong'])): ?>
                        <div class="alert-wrong">
                            <?php
                            echo $_SESSION['wrong'];
                            unset($_SESSION['wrong'])
                            ?>
                        </div>
                    <?php endif ?>
                    <input hidden type="text" name="id" id="" value="<?php echo $work->getId(); ?>">

                    <div class="input-group">
                        <input type="text" name="title" class="input-field" placeholder="Title" value="<?php echo $work->getTitle(); ?>">
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
                        <input type="text" name="link" class="input-field" placeholder="Link" value="<?php echo $work->getLink(); ?>">
                        <?php if (isset($_SESSION['emptyLink'])): ?>
                            <div class="alert-wrong">
                                <?php
                                   echo $_SESSION['emptyLink'];
                                   unset($_SESSION['emptyLink'])
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
                        <div>
                            <a href="../index.php#my-work" class="cancel-btn" class="cancel-btn">Cancel</a>
                            <input type="submit" name="delete_btn" class="delete-btn" value="Delete">
                        </div>
                        <input type="submit" name="submit_btn" class="submit-btn" value="Submit">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="../assets/js/script.js"></script>
</body>

</html>