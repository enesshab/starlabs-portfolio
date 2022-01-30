<?php
include 'include/header.php';
?>

<?php
    use Admin\Lib\ClientSay;
    $clientSays = new ClientSay();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $clientSays = $clientSays->get_by_id($id);
    }

    if(isset($_POST['submit_btn'])){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];   

        if (empty($name)){
            $_SESSION['emptyName'] = "Please enter name!";
        }
        if (empty($description)){
            $_SESSION['emptyDesc'] = "Please enter description!";
        }
        else{
            if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ""){
                if($_FILES['image']['type'] == "image/jpeg" || $_FILES['image']['type'] == "image/png"){
                        if($_FILES['image']['type'] == "image/png"){
                            $filename = uniqid('CLIENT_').".png";
                        }else if($_FILES['image']['type'] == "image/jpeg"){
                            $filename = uniqid('CLIENT_').".jpg";
                        }
                        move_uploaded_file($_FILES['image']['tmp_name'], "../assets/img/".$filename);
                        $clientSays->changeSay($id, $name, $description , $filename);
                        header('Location: ../index.php#client');
    
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
                    <p>Edit client says</p>
                </div>
                
                <form method="post" action="edit-client-says.php" enctype="multipart/form-data">
                    <?php if (isset($_SESSION['wrong'])): ?>
                        <div class="alert-wrong">
                            <?php
                            echo $_SESSION['wrong'];
                            unset($_SESSION['wrong'])
                            ?>
                        </div>
                    <?php endif ?>
                    <input hidden type="text" name="id" id="" value="<?php echo $clientSays->getId(); ?>">

                    <div class="input-group">
                        <input type="text" name="name" class="input-field" placeholder="Title" value="<?php echo $clientSays->getName(); ?>">
                        <?php if (isset($_SESSION['emptyName'])): ?>
                            <div class="alert-wrong">
                                <?php
                                   echo $_SESSION['emptyName'];
                                   unset($_SESSION['emptyName'])
                                ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="input-group">
                        <textarea name="description" rows="10" placeholder="Description" class="input-message"><?php echo $clientSays->getDescription(); ?></textarea>
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