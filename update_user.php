<?php
    session_start();
    require_once './database/conn.php';
 
    if (isset($_POST['update'])) {
        if ($_POST['firstname'] != "" && $_POST['lastname'] != "" && $_POST['username'] != "" && $_POST['password'] != "") {
            try {
                $id = $_POST['id'];
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $username = $_POST['username'];
                $password = $_POST['password'];

                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "UPDATE `member` SET `firstname` = ?, `lastname` = ?, `username` = ?, `password` = ? WHERE `id` = ?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$firstname, $lastname, $username, $password, $id]);

                $_SESSION['message'] = array("text" => "User successfully updated.", "alert" => "info");
                $conn = null;
                header('location: user_management.php');
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        } else {
            echo "
                <script>alert('Please fill up all the required fields!')</script>
                <script>window.location = 'edit_user.php?id=".$_POST['id']."'</script>
            ";
        }
    }
?>