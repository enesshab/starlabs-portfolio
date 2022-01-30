<?php

use Admin\Lib\MainHeading;
use Admin\Lib\AboutHeading;
use Admin\Lib\AboutSkills;
use Admin\Lib\ClientHeading;
use Admin\Lib\ClientSay;
use Admin\Lib\Contact;
use Admin\Lib\ContactHeading;
use Admin\Lib\MyworkHeading;
use Admin\Lib\Work;

$title = "Portfolio";
include 'include/header.php';

?>
    <main>
        <section class="main-hero">
            <?php
                $mainTitles = new MainHeading();
                $mainTitles = $mainTitles->get_by_id(1);
            ?>
            <img class="background-img" src="assets/img/123.svg" alt="home-image">

            <div class="main-photo">
                <img src="assets/img/<?php echo $mainTitles->getFilename()?>" alt="home-image">
            </div>
            
            <div class="main-text">
                    <h2><?php echo $mainTitles->getSmallTitle()?></h2>
                    <h1><?php echo $mainTitles->getBigTitle()?></h1>
                    <p><?php echo $mainTitles->getDescription()?></p>
                    <a class='button' href='#my-work'>My Work</a>
                </div>
            <?php
                if(isset($_SESSION['id'])){
                    echo "<a href='admin/edit-main-heading.php' class='edit-btn'><i class='far fa-edit'></i></a>";
                }
            ?>
            
        </section>

        <section class="about-me" id="about-me">
            <div class="about-me-text">
                <?php
                    $aboutTitles = new AboutHeading();
                    $aboutTitles = $aboutTitles->get_by_id(1);

                ?>
                <div class='about-me-text'>
                    <h1><?php echo $aboutTitles->getBigTitle()?></h1>
                    <h3><?php echo $aboutTitles->getSmallTitle()?></h3>
                    <p><?php echo $aboutTitles->getDescription()?></p>
                    <?php
                        if(isset($_SESSION['id'])){
                            echo "<a href='admin/edit-about-heading.php' class='edit-btn'><i class='far fa-edit'></i></a>";
                        }   
                    ?>
                </div>
        </section>

        <section class="about-me-container">
            <div class="about-me-skills">
                <?php
                    $aboutSkills = new AboutSkills();
                    foreach($aboutSkills->get_all() as $aboutSkill){
                        echo "<div class='about-card'>";
                            echo "<i class='fas fa-pen-nib'></i>";
                            echo "<h2 class='about-me-card-title'>".$aboutSkill->getTitle()."</h2>";
                            echo "<p class='about-me-card-desc'>".$aboutSkill->getDescription()."</p>";
                            echo "<h3 class='about-me-tools-title'>Tools:</h3>";
                            echo "<p class='about-me-tools-desc'>".$aboutSkill->getTools()."</p>";
                            if(isset($_SESSION['id'])){
                                echo "<a href='admin/edit-about-skills.php?id=".$aboutSkill->getId()."' class='edit-btn'><i class='far fa-edit'></i></a>";
                            }
                        echo "</div>";
                        
                    }
                ?>
            </div>
        </section>

        <section class="my-work" id="my-work">
            <?php
                $myworkTitles = new MyworkHeading();
                $myworkTitles = $myworkTitles->get_by_id(1)
            ?>
            <div class="my-work-text">
                <h1>
                    <?php echo $myworkTitles->getTitle()?>
                </h1>
                <p>
                    <?php echo $myworkTitles->getDescription()?>
                </p>   
                <?php
                    if(isset($_SESSION['id'])){
                        echo "<a href='admin/edit-mywork-heading.php' class='edit-btn'><i class='far fa-edit'></i></a>";
                    }
                ?>            
            </div>
            

            <div class="portfolio-container">
                <?php
                    $works = new Work();
                    foreach($works->get_all() as $work){
                        echo "<div class='work-container'>";
                            echo "<a href='".$work->getLink()."' class='flip-box'>";
                                echo "<div class='flip-box-inner'>";
                                    echo "<div class='flip-box-front'>";
                                        echo "<img src='assets/img/".$work->getFilename()."'>";
                                        echo "<div class='front-title'>";
                                            echo "<p>".$work->getTitle()."</p>";
                                        echo "</div>";
                                    echo "</div>";
                                    echo "<div class='flip-box-back'>";
                                        echo "<h2>".$work->getTitle()."</h2>";
                                        echo "<p>Visit Website</p>";
                                    echo "</div>";
                                echo "</div>";
                            echo "</a>";

                            if(isset($_SESSION['id'])){
                                echo "<a href='admin/edit-work.php?id=".$work->getId()."' class='edit-btn'><i class='far fa-edit'></i></a>";
                            }
                        echo "</div>";
                        
                    }
                ?>
            <?php
                if(isset($_SESSION['id'])){
                    echo "<a href='admin/add-work.php' class='edit-btn'><i class='far fa-plus-square'></i></a>";
                }
            ?>
        </section>

        <section class="client" id="client">
            <?php
                $clientTitles = new ClientHeading();
                $clientTitles = $clientTitles->get_by_id(1)
            ?>
             <div class='client-heading'>
                <h1><?php echo $clientTitles->getTitle()?></h1>
                <p><?php echo $clientTitles->getDescription()?></p>
                <?php
                    if(isset($_SESSION['id'])){
                        echo "<a href='admin/edit-client-heading.php' class='edit-btn'><i class='far fa-edit'></i></a>";
                    }
                ?>
            </div>

            <div class="client-container">
                <?php
                    $clientSays = new ClientSay();
                    foreach($clientSays->get_all() as $clientSay){
                        echo "<div class='client-card'>";
                            echo "<div class='client-img'>";
                                echo "<img src='assets/img/".$clientSay->getFilename()."' alt='Client Photo'>";
                            echo "</div>";
                            echo "<div class='client-text'>";
                                echo "<h2>".$clientSay->getName()."</h2>";
                                echo "<p>".$clientSay->getDescription()."</p>";
                            echo "</div>";
                            if(isset($_SESSION['id'])){
                                echo "<a href='admin/edit-client-says.php?id=".$clientSay->getId()."' class='edit-btn'><i class='far fa-edit'></i></a>";
                            }
                        echo "</div>";
                        
                    }
                ?>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="contact-form">
                <?php
                    $contactTitles = new ContactHeading();
                    $contactTitles = $contactTitles->get_by_id(1);
                ?>
                <div class='contact-heading'>
                    <h1><?php echo $contactTitles->getTitle()?></h1>
                    <p><?php echo $contactTitles->getDescription()?></p>
                    <?php
                        if(isset($_SESSION['id'])){
                            echo "<a href='admin/edit-contact-heading.php' class='edit-btn'><i class='far fa-edit'></i></a>";
                        }
                    ?>
                </div>
                
                <?php
                if(isset($_POST['contact_btn'])){
                    $contact = new Contact();
                
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];
                
                    if (empty($name)){
                        $_SESSION['emptyName'] = "Please enter name!";
                    }
                    if (empty($email)){
                        $_SESSION['emptyEmail'] = "Please enter email!";
                    }
                    if (empty($message)){
                        $_SESSION['emptyDesc'] = "Please enter description!";
                    }
                    if(!empty($name) && !empty($email) && !empty($message)){
                        if($contact->insertMessage($name, $email, $message)){
                            $_SESSION['success'] = "Thank you for getting in touch!";
                          }
                          else{
                            $_SESSION['fail'] = "Something went wrong! Please try again!";
                          }
                    }
                }
                ?>

                <form action="index.php#contact" method="post">
                    <?php if (isset($_SESSION['fail'])): ?>
                        <div class="alert-fail">
                            <?php
                            echo $_SESSION['fail'];
                            unset($_SESSION['fail'])
                            ?>
                        </div>
                    <?php endif ?>
                    <?php if (isset($_SESSION['success'])): ?>
                        <div class="alert-success">
                            <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success'])
                            ?>
                        </div>
                    <?php endif ?>
                    <div class="input-group">
                        <input type="text" name="name" class="input-field" placeholder="Name" value="<?php if(isset($name)){echo $name;}?>">

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
                        <input type="email" name="email" class="input-field" placeholder="Email" value="<?php if(isset($email)){echo $email;}?>">

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
                        <textarea name="message" id="" rows="10" placeholder="Message" class="input-message"><?php if(isset($message)){echo $message;}?></textarea>

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
                        <input type="submit" name="contact_btn" class="submit-btn" value="Submit">
                    </div>
                </form>
            </div>
        </section>

    </main>
<?php
include 'include/footer.php';
?>
