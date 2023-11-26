<?php
include("db.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    .login-text {
        float: left;
    }

    .text-main {
        font-size: 50px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        top: 10%;
        left: 8%;
        position: absolute;
    }

    .inputs {
        width: 20%;
        height: 40px;
        border-radius: 15px;
        font-size: 20px;
        background-color: rgb(227, 226, 226);
        border: none;
    }

    ::placeholder {
        padding: 10px;
        font-size: 20px;
    }

    .password {
        position: absolute;
        top: 50%;
        left: 15%;
    }

    .email {
        position: absolute;
        top: 40%;
        left: 15%;
    }

    .log_in_btn {
        position: absolute;
        top: 65%;
        left: 17%;
        width: 250px;
        height: 50px;
        padding: 10px;
        border-radius: 20px;
        border: none;
        background-color: greenyellow;
        transition: 0.3s;
        font-size: 20px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .green_shit {
        float: right;
        width: 50%;
        background-color: greenyellow;
        height: 100vh;
    }

    .sign_up_text {
        color: white;
        position: absolute;
        top: 20%;
        left: 68%;
        font-size: 50px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }

    .sign_up_text_2 {
        position: absolute;
        top: 40%;
        left: 60%;
        font-size: 25px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .sign_up_btn {
        position: absolute;
        top: 65%;
        left: 67%;
        width: 300px;
        padding: 10px;
        border: none;
        border-radius: 20px;
        background-color: white;
        color: black;
        text-align: center;
        transition: 0.3s;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 20px;

    }

    .log_in_btn:hover {
        background-color: rgb(100, 255, 0);
        cursor: pointer;
    }

    .sign_up_btn:hover {
        background-color: rgb(0, 0, 0);
        cursor: pointer;
        color: white;
    }

    .no_acc{
        display: none;
    }


    @media screen and (max-width:800px) {
        .green_shit {
            display: none;
        }

        .inputs {
            width: 75%;
            position: absolute;
            left: 10%;
        }

        .log_in_btn {
            position: absolute;
            left: 24%;
        }

        .no_acc{
            display: flex;
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif ;
            position: absolute;
            top: 69%;
            left: 25%;
            

        }

        a{
            transition: 0.3s;
        }

        a:hover{
            color: greenyellow;
        }
        
    }
</style>

<body>
    <div class="login-text">
        <h1 class="text-main">Login to your account</h1>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <input type="email" name="email" class="inputs email" placeholder="Email" required><br><br>
            <input type="password" name="password" class="inputs password" placeholder="Password" required><br><br>
            <input type="submit" name="submit" class="log_in_btn" value="Log in">


        </form>
        <div class="no_acc">
            <h4>Dont have an acoount - <a href="signup.php">Sign up</a></h4>
        </div>
    </div>
    <div class="green_shit">
        <h1 class="sign_up_text">New Here?</h1>
        <h3 class="sign_up_text_2">Sign up and disover a great amount of new opportunities</h3>
        <a href="signup.php"><input type="submit" class="sign_up_btn" value="Sign up" name="sign_up_btn"></a>

    </div>



</body>

</html>