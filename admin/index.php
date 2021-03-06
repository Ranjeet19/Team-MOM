

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>


</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;

    }

    body {
        background: rgba(0, 255, 255, 0.034);
        font-family: helvetica;

    }

    .container {
        background: lightblue;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: 350px;
        width: auto;
        padding: 10px 30px;

        margin: 0 auto;
        border-radius: 5px;
        box-shadow: 0px 5px 5px green;
    }

    .logo_img {
        height: 50px;
        width: 50px;
        border-radius: 50%;
        float: left;
        margin-top: -37px;
        margin-left: 120px;
    }

    .login {
        position: relative;
        height: 350px;
        width: 300px;
        background: whitesmoke;
        margin-top: 25px;
        box-shadow: 0px 5px 5px green;
        border-radius: 5px;
    }


    h3 {
        cursor: none;
        font-size: 40px;
        text-align: center;
        font-family: 'itim', cursive;
        color: lightblue;
        margin-top: 0px;
    }

    form {
        margin-top: 35px;
    }

    .inputs {
        border: none;
        width: 60%;
        padding: 10px;

        background: transparent;
        border: solid 1px blueviolet;
        margin: 10px 50px;
        position: relative;
        cursor: pointer;
        border-radius: 5px;
        outline: none;

    }

    .submit {
        align-items: center;
        padding: 8px;
        border: none;
        background: rgb(79, 228, 79);
        color: rgba(0, 0, 0, 0.493);
        font-size: 18px;
        font-style: bold;
        border-radius: 5px;
        justify-content: center;
        margin: 20px 0px 0px 110px;
        cursor: pointer;
        font-family: 'itim', cursive;
    }

    .submit:hover {
        background: rgb(120, 240, 120);
        color: blueviolet;
        transition: all 1s;

    }

    footer {
        font-size: 11px;
        color: black;
        display: flex;
        flex-direction: end;
        margin-bottom: 0px;
        margin: 50px 50px;
        font-family: 'itim', cursive;
    }
</style>



<body>

    <div class="container">

        <img class="logo_img" src="../img/moma.jpg">

        <div class="login">

            <h3>LogIn</h3>
            <hr>
            <form method="POST" action="login.php">
                <input type="text" class="inputs" name="usernames" placeholder="Enter Usernames" required/><br>
                <input class="inputs" type="password" name="passwords" placeholder="Enter Password " required/>
                <br>
                <input class="submit" type="submit" name="submit">

            </form>

  

            <footer class="reg">Don't have any account yet? <a href="#"> Register</a></footer>
        </div>

    </div>

</body>

</html>