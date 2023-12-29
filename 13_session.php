<!-- Sessions are a way to store information (in variables) to be used across multiple pages.
Unlike cookies, sessions are stored in a server. -->


<?php
session_start();
    if(isset($_POST['submit'])){
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];


        if($username == 'Jack' && $password == 'password'){
            $_SESSION['username'] = $username;
            header('Location: /PHPCrash/extras/dashboard.php');
        } else {
            echo "Incorrect login";
        }
    }


?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="POST">
    <div>
        <label for="username">username </label>
        <input type="text" name="username" />
    </div>
    <div>
        <label for="password">Password </label>
        <input type="password" name="password" />
    </div>
    <input type="submit" name="submit" value="Submit" />
</form>