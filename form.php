<!DOCTYPE html>
<html>

<head></head>

<body>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                echo "<p>This is a GET request.</p>\n";
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $zip = $_POST['zip'];

                foreach ($_POST as $key => $vale) {
                        echo "<p> Key: $key, Value: $vale </p>";
                }
        }
        ?>
</body>

</html>