<?php

class checkLogin
{
    function loginWithDBData() {
        require_once ('../config.php');
        require_once ('../src/clean.php');
        $clean = new clean();

        try {
            require_once ('../src/DBconnect.php');

            $sql = "SELECT username, password FROM users WHERE username = :USER";
            $statement = $connection->prepare($sql);
            $tmpUser = ($clean->form_validation($_POST['Username']));
            $statement->bindParam(':USER', $tmpUser, PDO::PARAM_STR);
            $statement->execute();
            $result = $statement->fetchAll();

            foreach($result as $row => $rows) {
                $username = $rows['username'];
                $pwd = $rows['password'];

                if (($_POST['Username'] == $username) && ($_POST['Password'] == $pwd)) {
                    $_SESSION['Username'] = $username;
                    $_SESSION['Active'] = true;
                    header("location:index.php");
                    exit;
                } else {
                    echo 'Incorrect Username or Password';
                }
            }
        } catch (Exception $e) {
            echo '<div class="messages-error">Error Logging in: ' . $e->getMessage() . '</div>';
        }
    }
}