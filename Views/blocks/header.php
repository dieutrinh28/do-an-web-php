<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allcarta - Login</title>
    <link rel="stylesheet" href="../../Public/CSS/header.css">
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- link font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Alertify JS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
</head>

<body>
    <div class="container-fluid header">
        <nav class="navbar navbar-expand-lg">
            <div class="navbar-logo" href="#">
                <img src="../../Assets/logo.png" alt="">
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo URL ?>/home">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?php echo URL ?>/productlist">PRODUCT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URL ?>/cart">CART</a>
                    </li>
                </ul>
                <form class="form-inline my-lg-0">
                    <input class="form-control mr-sm-3" type="search" placeholder="Search" aria-label="Search">
                    <i class="fas fa-search nav-icon-search"></i>
                </form>
                <div class="avt">
                    <img src="../../Assets/img/sofa-1-1.jpg" alt="">
                </div>
            </div>
        </nav>
    </div>
</body>

</html>