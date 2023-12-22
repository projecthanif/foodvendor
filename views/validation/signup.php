<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/form_styles.css" />
    <title>sign up</title>
</head>

<body>
    <nav>
        <ul class="navbar">
            <li>
                <a href="/" class="nav-link"></a>
            </li>
            <div class="left">
                <li>
                    <a href="/auth/login" class="nav-link">Login</a>
                </li>
                <li>
                    <a href="/auth/signup" class="nav-link">Sign Up</a>
                </li>
            </div>
        </ul>
    </nav>
    <main>
        <section class="body three">
            <div class="body-right two">
                <h1 class="h1-text two">sign up.</h1>
                <p class="para">You already have an account?
                    <a href="/auth/login" class="a-link">Log in</a>
                </p>
            </div>
            <div class="body-left two">
                <div class="card two">
                    <form action="#" method="post" class="form">
                        <label for="username">User Name</label>
                        <input type="text" name="name" id="">
                        <label for="number">Number</label>
                        <input type="number" name="number" id="">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="">
                        <input type="submit" value="Register" class="form-btn">
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>

</html>