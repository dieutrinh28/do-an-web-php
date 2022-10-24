<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furni3dots - Login</title>
    <link rel="stylesheet" href="../Public/CSS/header.css">
    <link rel="stylesheet" href="../Public/CSS/login.css">
    <link rel="stylesheet" href="../Public/CSS/footer.css">

    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include_once './blocks/header.php'
    ?>
    <div class="container login mt-5">
        <h4 class="text-center">Login</h4>
        <form class="w-50 mx-auto">
            <div class="form-group">
                <p class="form-text">User name</p>
                <input type="text" class="form-control" name="username" placeholder="Ex: Bich Ngan" required autocomplete>
                <p class="form-text mt-3">Password</p>
                <input type="password" class="form-control" name="password" placeholder="password" required autocomplete>
            </div>
            <a class="forgot-password d-flex">Forgot password?</a>
            <div class="form-checkbox d-flex">
                <input type="checkbox" name="remember">
                <p>Remember me</p>
            </div>
            <div class="d-flex mt-4">
                <button class="btn btn-signin w-50" type="submit" name="submit">SIGN IN</button>
                <button class="btn btn-signup w-50" type="submit" name="submit">SIGN UP</button>
            </div>
        </form>
    </div>
    <?php
        include_once './blocks/footer.php'
    ?>
</body>

</html>