<!DOCTYPE html>
<html>
    <head>
        <title>Login Error</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="MyStyle.css">
    </head>
    <body>
        <div class="login-box">
            <h2>Profile</h2>
            Welcome <?php echo $_POST["name"]; ?><br>
            Your email address is: <?php echo $_POST["password"]; ?>

            <form>
                <button>Logout</button>
            </form> 
        </div>
    </body>
</html>
