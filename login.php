<?php require "create_table.php" ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <meta name="viewpoint" content="width=device-width">

        <!-- <link rel="stylesheet" href = "style.css" /> -->
        <style><?php include 'style.css'?></style>

    </head>

    <body>

        <!-- <div class="user_info"> -->
        <!-- <div> -->
        <form id="usersInfo" action="sign_in_user.php" method="post">
            <h1>LOGIN</h1>

            <div class="login_form_text">
                <label for="username">Username: </label>
                <input type="text" id="username" name="username">

                <br>
                <br>

                <label for="password">Password: </label>
                <input type="password" id="password" name="password">
                
                <br>
                <br>

                <button type="submit">Log in</button>
            </div>
        </form>
        <!-- </div> -->
        <!-- </div> -->

        

    </body>
</html>