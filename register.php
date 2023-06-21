<?php
    session_start();
    require_once './database/conn.php';
 
    if (isset($_POST['register'])) {
        if ($_POST['firstname'] != "" && $_POST['lastname'] != "" && $_POST['username'] != "" && $_POST['password'] != "") {
            try {
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $username = $_POST['username'];
                $password = $_POST['password'];

                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO `member` (`firstname`, `lastname`, `username`, `password`) VALUES (?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$firstname, $lastname, $username, $password]);

                $_SESSION['message'] = array("text" => "User successfully created.", "alert" => "info");
                $conn = null;
                header('location: login.php');
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        } else {
            echo "
                <script>alert('Please fill up all the required fields!')</script>
                <script>window.location = 'registration.php'</script>
            ";
        }
    }
?>
