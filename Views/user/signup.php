<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Furni3dots - Sign up</title>
        <link rel="stylesheet" href="../do-an-web-php/Public/CSS/header.css">
        <link rel="stylesheet" href="../do-an-web-php/Public/CSS/signup.css">
        <link rel="stylesheet" href="../do-an-web-php/Public/CSS/footer.css">
        <!-- link bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
         <!-- link owl carousel -->
        <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
        <!-- link icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
        <!-- link font -->
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- header -->
        <?php
            include_once '../do-an-web-php/Views/blocks/header.php';
        ?>
        <!-- body -->
        <div class="container signup my-5">
            <h4 class="text-center mb-4">Sign up</h4>
            <form>
                <?php //include('../do-an-web-php/Models/errors.php'); ?>
                <input type="text" class="form-control" name="name" placeholder="Full name">
                <input type="text" class="form-control" name="phoneNum" placeholder="Phone number">
                <input type="text" class="form-control" name="address" placeholder="Address">
                <input type="text" class="form-control" name="username" placeholder="User name">
                <input type="text" class="form-control" name="email" placeholder="E-mail">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <input type="password" class="form-control" name="confirmPass" placeholder="Confirm password">
                <div class="d-flex mt-4 w-50 mx-auto">
                    <button class="btn btn-signup w-50" type="submit" name="submit">SIGN UP</button>
                    <button class="btn btn-signin w-50" type="submit" name="submit">SIGN IN</button>
                </div>
            </form> 
        </div>

        <!--Footer-->      
        <?php
            include_once '../do-an-web-php/Views/blocks/footer.php';
        ?>

        <!-- link bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    </body>
</html>