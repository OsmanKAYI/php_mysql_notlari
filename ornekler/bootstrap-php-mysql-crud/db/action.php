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
        $SORGU = $DB->prepare($sql);

        $SORGU->bindParam(':name',  $name);
        $SORGU->bindParam(':email', $email);
        //$SORGU->bindParam(':name',  $_POST['name']);
        //$SORGU->bindParam(':email', $_POST['email']);

        $SORGU->execute();
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
        $SORGU = $DB->prepare($sql);

        $SORGU->bindParam(':id', $id);
        $SORGU->bindParam(':name',  $name);
        $SORGU->bindParam(':email', $email);

        $SORGU->execute();
        echo "User updated";
        header('location: ../index.php');
    }

    if(isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM users WHERE id = :id";
        $SORGU = $DB->prepare($sql);

        $SORGU->bindParam(':id', $id);

        $SORGU->execute();
        echo "User deleted";
        header('location: ../index.php');
    }

?>