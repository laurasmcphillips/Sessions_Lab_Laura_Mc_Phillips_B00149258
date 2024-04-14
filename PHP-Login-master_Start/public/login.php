<?php require_once('../template/header_login.php'); ?>
<link rel="stylesheet" type="text/css" href="../css/signin.css">
    <title>Sign in</title>
</head>

<?php
require_once ('config.php'); // This is where the username and password are currently stored (hardcoded in variables)


/* Check if login form has been submitted */
/* isset — Determine if a variable is declared and is different than
NULL*/
if(isset($_POST['Submit'])) {
    require_once '../src/checkLogin.php';
    $CheckLogin = new CheckLogin();
    $CheckLogin->loginWithDBData();
}
?>

<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" >Username</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>
        <h4 class="my-3">Or register today!</h4>
        <a href="register.php" <button class="button" type="submit">Register</button></a>
    </form>
</div>
</body>
</html>
