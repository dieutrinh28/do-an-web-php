
<body>
    <?php

    include_once("../blocks/header.php");

    ?>
    <div class="container login mt-5">
        <h4 class="text-center">Login</h4>

        <form class="w-50 mx-auto" method="post">
            <div class="form-group">
                <?php

                require_once("../../Controllers/LoginController.php");
                $controller = new UserController();
                $controller->invoke();



                ?>
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
                <button class="btn btn-signin w-50" type="submit" name="submitLogin">SIGN IN</button>
                <button class="btn btn-signup w-50" type="submit" name="submitLogout">SIGN UP</button>


            </div>


        </form>

    </div>
    <?php

    include_once("../blocks/footer.php");

    ?>
</body>

</html>