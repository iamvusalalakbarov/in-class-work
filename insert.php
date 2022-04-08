<?php

if (isset($_POST["submit"])) {
    if ($_POST["password"] == $_POST["passwordConfirm"]) {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = $db->prepare(
            "INSERT INTO users SET
            fname = ?,
            lname = ?,
            email = ?,
            password = ?"
        );

        $insert = $query->execute([$fname, $lname, $email, $password]);
    } else {
        echo "<script>alert('Passwords are not same. Please try again.')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form method="POST">
        <h1>Registration</h1>

        <div class="name">
            <input type="text" name="fname" placeholder="First Name" required>
            <input type="text" name="lname" placeholder="Last Name" required>
        </div>

        <div class="e-mail">
            <input type="email" name="email" placeholder="E-mail Address" required>
        </div>

        <div class="password">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="passwordConfirm" placeholder="Confirm">
        </div>

        <input type="hidden" name="submit" value="1">

        <button type="submit">Register</button>
    </form>
</body>

</html>