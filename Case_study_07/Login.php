<?php
$correct_username = "rojen";
$correct_password = "qweqwe";

if (isset($_POST['submit'])) {
    $input_username = $_POST['userName'];
    $input_password = $_POST['userPassword'];

    if ($input_username === $correct_username && $input_password === $correct_password) {
        header("Location: successfully.php");
    } else {
        echo ("<h2>Login Fail. Please try again.</h2>");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>..:Login:..</title>
</head>
<body>

<?php
?>

    <form method="post" action="">
        <label>Username</label><br>
        <input type="text" name="userName" required><br>
        
        <label>Password</label><br>
        <input type="password" name="userPassword" required><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>