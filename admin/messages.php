<?php
include 'include/header.php';
?>


    <main>
        <section class="messages-hero">
            <div class="messages-table">
                <div class="messages-heading">
                    <p>Messages</p>
                </div>
                <table>
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
                    <thead>
                        <tr>
                            <th></th>
                            <th>Time</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            use Admin\Lib\Contact;
                            $contact = new Contact();
                            $i=1;
                            foreach ($contact->get_all() as $c){
                                echo "<tr>";
                                    echo "<td>".$i."</td>";
                                    echo "<td>".$c->getTime()."</td>";
                                    echo "<td>".$c->getName()."</td>";
                                    echo "<td>".$c->getEmail()."</td>";
                                    echo "<td>".$c->getMessage()."</td>";
                                    echo "<td><a href='delete-message.php?id=".$c->getId()."'><i class='fas fa-trash-alt'></i></a></td>";
                                    $i++;
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    <script src="../assets/js/script.js"></script>
</body>

</html>