<?php
    if(isset($_POST['submit'])) {
        include_once 'db.inc.php';
        $vardas = mysqli_real_escape_string($conn, $_POST['vardas']);
        $pavarde = mysqli_real_escape_string($conn, $_POST['pavarde']);
        $imone = mysqli_real_escape_string($conn, $_POST['imone']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $uzsakymas = mysqli_real_escape_string($conn, $_POST['uzsakymas']);


        if (empty($vardas) || empty($pavarde) || empty($email) || empty($uzsakymas)) {
            header("Location: ../kontaktai.php?kontaktai=empty");
            exit();
          } else {
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../kontaktai.php?kontaktai=invalidemail");
                    exit();
                } else {
                    $sql = "INSERT INTO klientai (vardas, pavarde, imone, email, uzsakymas)
                    VALUES ('$vardas', '$pavarde', '$imone', '$email', '$uzsakymas');";
                    mysqli_query($conn, $sql);
                    header("Location: ../confirmation.php");
                    exit();
                    }
                }
        } else {
        header("Location: ../kontaktai.php");
        exit();
        }
