<?php
session_start();
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['name']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $name = validate($_POST['name']);
    $pass = validate($_POST['password']);
    $image = $_POST['image'];
    if (empty($email)) {
        header("Location: index.php?rerror=Email is required");
        exit();
    } else if (empty($name)) {
        header("Location: index.php?rerror=The Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?rerror=Password is required");
        exit();
    } else {
        $q = "SELECT * FROM users where email ='$email'";

        $result = mysqli_query($conn, $q);
        $row = mysqli_num_rows($result);

        if ($row == 1) {
            header("Location: index.php?rerror=The Email You Enterd Is Already Registered ,Please Try Another");
            exit();
        } else {
            $add = "Insert Into users (email , name , password ,image) values ('$email' , '$name', '$pass' ,'$image')";
            mysqli_query($conn, $add);
            header("Location: index.php?rs=Sucssifuly Registered !");
            exit();
        }
    }
}
