<?php
$title = "Login - Portfolio";
include 'include/header.php';
use Admin\Lib\User;
if(isset($_SESSION['id'])){
    header("Location: index.php");
    exit();
}
?>

<?php
$user = new User();

if (isset($_POST['submit_btn'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($email)){
      $_SESSION['emptyEmail'] = "Please enter Email!";
  }
  if (empty($password)){
      $_SESSION['emptyPassword'] = "Please enter Password!";
  }

  if(!empty($email) && !empty($password)){
      $user->login($email, $password);
  }
}

?>


    <main>
        <section class="main-hero login-hero">
            <div class="login-form">
                <div class="login-heading">
                    <p>Login to Dashboard</p>
                </div>
                
                <form action="admin-login.php" method="post">
                    <?php if (isset($_SESSION['wrong'])): ?>
                        <div class="alert-wrong">
                            <?php
                                echo $_SESSION['wrong'];
                                unset($_SESSION['wrong'])
                            ?>
                        </div>
                    <?php endif ?>
                    <div class="input-group">
                        <input type="email" name="email" class="input-field" placeholder="Email">
                        <?php if (isset($_SESSION['emptyEmail'])): ?>
                            <div class="alert-wrong">
                                <?php
                                   echo $_SESSION['emptyEmail'];
                                   unset($_SESSION['emptyEmail'])
                                ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" class="input-field" placeholder="Password">
                        <?php if (isset($_SESSION['emptyPassword'])): ?>
                            <div class="alert-wrong">
                                <?php
                                   echo $_SESSION['emptyPassword'];
                                   unset($_SESSION['emptyPassword'])
                                ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="input-group">
                        <input type="submit" name="submit_btn" class="submit-btn" value="Submit">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="assets/js/script.js"></script>
</body>

</html>