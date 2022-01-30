<?php
include 'admin/lib/Database.php';
include 'admin/lib/User.php';
include 'admin/lib/MainHeading.php';
include 'admin/lib/AboutHeading.php';
include 'admin/lib/AboutSkills.php';
include 'admin/lib/MyworkHeading.php';
include 'admin/lib/ClientHeading.php';
include 'admin/lib/ContactHeading.php';
include 'admin/lib/FooterLinks.php';
include 'admin/lib/Work.php';
include 'admin/lib/ClientSay.php';
include 'admin/lib/Contact.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?php echo $title?></title>
</head>

<body>
    <header class="header">
        <a class="logo" href="index.php">
            Portfo<span>lio</span>
        </a>
        <nav class="navbar">
            <ul>
                <li><a href="index.php#">Home</a></li>
                <li><a href="index.php#about-me">About</a></li>
                <li><a href="index.php#my-work">My Work</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                <?php if(isset($_SESSION['id'])):?>
                    <li><a href="admin/messages.php">Messages</a></li>
                <?php endif?>
                <?php if(isset($_SESSION['id'])):?>
                    <li><a class="logout-btn" href="admin/logout.php">Logout</a></li>
                <?php endif?>
            </ul>
        </nav>
        <a class="menu"><i class="fas fa-bars"></i></a>
    </header>