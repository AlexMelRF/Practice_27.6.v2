<?php

$msg = $_SESSION['message'] ?? null;
$auth = $_SESSION['auth'] ?? null;
$token = hash('gost-crypto', random_int(0,999999));
$_SESSION["CSRF"] = $token;

if ($auth)
    header('Location: index.php?url=profile');

?>

<form action="libraries/signin.php" method="POST">
    <label>Log in</label>
    <input type="text" name="login" placeholder="Please, input your login here">
    <label>Password</label>
    <input type="password" name="password" placeholder="Please, input your password here">
    <input type="hidden" name="token" value="<?= $token ?>">
    <label>Remember me <input type="checkbox" name="remember"></label>
    <button type="submit">Submit</button>
    <p>
        <a href="index.php?url=signup">Sign up</a>
    </p>
    <?php
                
    if ($msg)
        echo '<p class="msg">'.$msg.'</p>';
    unset($_SESSION['message']);
                
    ?>
</form>

