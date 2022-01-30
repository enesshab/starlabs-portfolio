<?php include('include/header.php');
?>

<?php
    use Admin\Lib\Contact;
    $deleteContact = new Contact();

    if (isset($_GET['id'])) {
        $contactid = $_GET['id'];
        $deleteContact->delete($contactid);
        if($deleteContact->delete($contactid)){
            $_SESSION['success'] = "Message deleted successfully!";
            header('Location: messages.php');
        }else{
            $_SESSION['fail'] = "Failed to delete message!";
            header('Location: messages.php');
        }
    }
?>