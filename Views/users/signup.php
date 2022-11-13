<body>
    <!-- header -->
    <?php
    include_once '../blocks/header.php';
    ?>
    <!-- body -->
    <div class="container signup my-5">
        <h4 class="text-center mb-4">Sign up</h4>
        <form>

            <?php //include('../do-an-web-php/Models/errors.php'); 
            ?>

            <p>Full name</p>
            <input type="text" class="form-control" name="name" placeholder="Full name">
            <p>Phone number</p>
            <input type="text" class="form-control" name="phoneNum" placeholder="Phone number">

            <p>Address</p>

            <input type="text" class="form-control" name="address" placeholder="Address">
            <p>User name</p>
            <input type="text" class="form-control" name="username" placeholder="User name">
            <p>E-mail</p>

            <input type="text" class="form-control" name="email" placeholder="E-mail">
            <p>Password</p>
            <input type="password" class="form-control" name="password" placeholder="Password">
            <p>Confirm password</p>
            <input type="password" class="form-control" name="confirmPass" placeholder="Confirm password">
            <div class="d-flex mt-4 w-50 mx-auto">
                <button class="btn btn-signup w-50" type="submit" name="submit">SIGN UP</button>
                <button class="btn btn-signin w-50" type="submit" name="submit">SIGN IN</button>
            </div>
        </form>
    </div>

    <!--Footer-->
    <?php
    include_once '../blocks/footer.php';
    ?>
</body>