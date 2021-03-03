<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./image/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon_io/favicon-16x16.png">
    <title>Account</title>
    <link rel="stylesheet" href="sass/pages/auth.css" />
</head>

<body>
    <div class="cont">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form sign-in">
            <h2>Welcome back,</h2>
            <label>
                <span>Email</span>
                <input type="email" name="email" />
            </label>
            <label>
                <span>Password</span>
                <input type="password" />
            </label>
            <p class="forgot-pass">Forgot password?</p>
            <input type="submit" value="Sign In" class="submit">
            <button type="button" class="fb-btn">Connect with <span>facebook</span></button>
        </form>

        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                    <h2>Want Burger?</h2>
                    <p>Sign up and Have our great amount of delicious Burgers!</p>
                </div>
                <div class="img__text m--in">
                    <h2>Already Burger Fan?</h2>
                    <p>If you already has an account, just sign in. Our burgers have missed you!</p>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form sign-up">
                <h2>Its time to try something new...</h2>
                <label>
                    <span>Name</span>
                    <input type="text" name="name" />
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="email" />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="pass" />
                </label>
                <input type="submit" value="Sign Up" class="submit">
                <button type="button" class="fb-btn">Join with <span>facebook</span></button>
            </form>
            <h1 style="position: absolute;-index: 1;bottom: 5%;">

                <?php
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $pass = $_POST["password"];
                    echo $name;
                ?>
            </h1>
        </div>
    </div>
    <script src="./scripts/auth.js"></script>
</body>

</html>