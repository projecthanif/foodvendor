<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/form_styles.css">
    <title>Login</title>
</head>

<body>

    <main>
        <div class="container-form">
            <form action="user_verify.php" method="post" name="myForm">
                <div class="card">
                    <div class="card-head">
                        <h1 class="card-text" id="title">
                            Login
                        </h1>
                    </div>
                    <div class="card-body">
                        <legend>
                            <label for="email">
                                Email :
                                <input type="email" name="email" id="email" placeholder="Email">
                            </label>
                            <label for="password">Password :
                                <input type="password" name="password" id="password" placeholder="Password" autocomplete="none">
                            </label>
                            <input type="hidden" name="referer" value="<?= $_SERVER['HTTP_REFERER'] ?>">
                            <input type="submit" value="Login" id="submit" class="btn" onsubmit="validate()">
                        </legend>
                        <p class="register">
                            You don't have an account we got you covered register <a href="user_Register.php">here</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
