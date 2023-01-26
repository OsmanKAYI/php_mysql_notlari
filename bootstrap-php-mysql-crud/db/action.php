<?php
    include('connection.php');

    //print_r($_POST); die();

    if(isset($_POST['create'])) {
        if(!isset($_POST['name']) || empty($_POST['name'])) {
            echo "Name is required";
            die();
        }

        if(!isset($_POST['email']) || empty($_POST['email'])) {
            echo "Email is required";
            die();
        }

        $name  = $_POST['name'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':name',  $name);
        $stmt->bindParam(':email', $email);
        //$stmt->bindParam(':name',  $_POST['name']);
        //$stmt->bindParam(':email', $_POST['email']);

        $stmt->execute();
        echo "User created";
        header('location: ../index.php');
    }

    if(isset($_POST['update'])) {
        if(!isset($_POST['name']) || empty($_POST['name'])) {
            echo "Name is required"; die();
        }

        if(!isset($_POST['email']) || empty($_POST['email'])) {
            echo "Email is required"; die();
        }

        $name  = $_POST['name'];
        $email = $_POST['email'];

        $id = $_POST['id'];
        $sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name',  $name);
        $stmt->bindParam(':email', $email);

        $stmt->execute();
        echo "User updated";
        header('location: ../index.php');
    }

    if(isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();
        echo "User deleted";
        header('location: ../index.php');
    }

?>