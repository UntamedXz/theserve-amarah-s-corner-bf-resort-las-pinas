<?php
session_start();
require_once './includes/database_conn.php';

if (isset($_POST['register'])) {
    $username = mysqli_escape_string($conn, $_POST['username']);
    $email = mysqli_escape_string($conn, $_POST['email']);
    $password = mysqli_escape_string($conn, $_POST['password']);

    if (empty($username) && empty($email) && empty($password)) {
        $_SESSION['status'] = "no input";
        echo '<script>
            window.location.replace("register.php");
        </script>';
    } else if (empty($username)) {
        $_SESSION['status'] = "no username";
        echo '<script>
            window.location.replace("register.php");
        </script>';
    } else if (empty($email)) {
        $_SESSION['status'] = "no email";
        echo '<script>
        window.location.replace("register.php");
    </script>';
    } else if (empty($password)) {
        $_SESSION['status'] = "no password";
        echo '<script>
        window.location.replace("register.php");
    </script>';
    } else {
        $check = mysqli_query($conn, "SELECT * FROM customers WHERE email = '$email'");

        if (mysqli_num_rows($check) > 0) {
            $_SESSION['status'] = "Email already exist!";
            echo '<script>
                window.location.replace("register.php");
            </script>';
        } else {
            $insert = mysqli_query($conn, "INSERT INTO customers VALUES ('', '$username', '$email', '$password')");
            if($insert) {
                $_SESSION['status'] = "Registered Successfully!";
                echo '<script>
                    window.location.replace("register.php");
                </script>';
            } else {
                $_SESSION['status'] = "Something went wrong!";
                echo '<script>
                    window.location.replace("register.php");
                </script>';
            }
        }
    }
}
