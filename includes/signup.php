<?php include 'includes/server.php'?>
<?php
session_start();

// variable declaration
$username = "";
$email = "";
$errors = array();
$_SESSION['success'] = "";

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // form validation: ensure that the form is correctly filled
    if (empty($username)) {array_push($errors, "Username is required");}
    if (empty($fullname)) {array_push($errors, "Full Name is required");}
    if (empty($email)) {array_push($errors, "Email is required");} else {
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Invalid email format");
        }
    }

    if (empty($password_1)) {array_push($errors, "Password is required");}

    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    $sql_check_username = "SELECT * FROM users WHERE username='$username'";
    $sql_check_email = "SELECT * FROM users WHERE email='$email'";
    $res_check_username = mysqli_query($db, $sql_check_username);
    $res_check_email = mysqli_query($db, $sql_check_email);
    if (mysqli_num_rows($res_check_username) > 0) {array_push($errors, "Sorry... username already taken");}
    if (mysqli_num_rows($res_check_email) > 0) {array_push($errors, "Sorry... email already taken");}

    // register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1); //encrypt the password before saving in the database
        $query = "INSERT INTO users (fullname, username, email, password)
					  VALUES('$fullname', '$username', '$email', '$password')";
        mysqli_query($db, $query);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }

}

// ...
