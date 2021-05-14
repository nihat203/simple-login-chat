<?php
session_start();
$username = "";
$password = "";
$errors = "";
$pass1 = "";
$pass2 = "";
$db = mysqli_connect('localhost', 'root', '', 'users');
if (isset($_POST['login']))
{
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if (empty($password))
        $errors = "Password is required";
    if (empty($username))
        $errors = "Username is required";
    if (empty($errors))
    {
        $password = md5($password);
        if (mysqli_num_rows(mysqli_query($db, "SELECT * FROM users WHERE username='$username' AND password='$password'")) == 1)
        {
            $_SESSION['username'] = $username;
            header('location: index.php');
        }
        else
            $errors = "Wrong username or password";
    }
}
if (isset($_POST['reg']))
{
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $pass1 = mysqli_real_escape_string($db, $_POST['pass1']);
    $pass2 = mysqli_real_escape_string($db, $_POST['pass2']);
    if ($pass1 != $pass2)
        $errors = "Two passwords don't match";
    if (empty($pass1))
        $errors = "Password is required";
    if (empty($username))
        $errors = "Username is required";
    $user = mysqli_fetch_assoc(mysqli_query($db, "SELECT * FROM users WHERE username='$username' LIMIT 1"));
    if ($user)
        if ($user['username'] == $username)
            $errors = "Username already exists";
    if (empty($errors))
    {
        $password = md5($pass1);
        mysqli_query($db, "INSERT INTO users (username, password) VALUES('$username', '$password') ");
        $_SESSION['username'] = $username;
        header('location: index.php');
    }
}
?>