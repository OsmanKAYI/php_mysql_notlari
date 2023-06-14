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
        $KOMUT = $DB->prepare($sql);

        $KOMUT->bindParam(':name',  $name);
        $KOMUT->bindParam(':email', $email);
        //$KOMUT->bindParam(':name',  $_POST['name']);
        //$KOMUT->bindParam(':email', $_POST['email']);

        $KOMUT->execute();
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
        $KOMUT = $DB->prepare($sql);

        $KOMUT->bindParam(':id', $id);
        $KOMUT->bindParam(':name',  $name);
        $KOMUT->bindParam(':email', $email);

        $KOMUT->execute();
        echo "User updated";
        header('location: ../index.php');
    }

    if(isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM users WHERE id = :id";
        $KOMUT = $DB->prepare($sql);

        $KOMUT->bindParam(':id', $id);

        $KOMUT->execute();
        echo "User deleted";
        header('location: ../index.php');
    }

?>