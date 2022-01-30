<?php
    include 'lib/Database.php';
    include 'lib/User.php';
    include 'lib/MainHeading.php';
    include 'lib/AboutHeading.php';
    include 'lib/AboutSkills.php';
    include 'lib/MyworkHeading.php';
    include 'lib/ClientHeading.php';
    include 'lib/ContactHeading.php';
    include 'lib/FooterLinks.php';
    include 'lib/Work.php';
    include 'lib/ClientSay.php';
    include 'lib/Contact.php';
    
    if(!isset($_SESSION['id'])){
        header("Location: ../admin-login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Dashboard - Portfolio</title>
</head>

<body>
    <header class="header">
        <a class="logo" href="index.html">
            Portfo<span>lio</span>
        </a>
        <nav class="navbar">
            <ul>
                <li><a href="../index.php#">Home</a></li>
                <li><a href="../index.php#about-me">About</a></li>
                <li><a href="../index.php#my-work">My Work</a></li>
                <li><a href="../index.php#contact">Contact</a></li>
                <?php if(isset($_SESSION['id'])):?>
                    <li><a href="messages.php">Messages</a></li>
                <?php endif?>
                <?php if(isset($_SESSION['id'])):?>
                    <li><a class="logout-btn" href="logout.php">Logout</a></li>
                <?php endif?>
            </ul>
        </nav>
        <a class="menu"><i class="fas fa-bars"></i></a>
    </header>
