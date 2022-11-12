<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furni3dots - Customer</title>
    <link rel="stylesheet" href="../do-an-web-php/Public/CSS/header.css">
    <link rel="stylesheet" href="../do-an-web-php/Public/CSS/customers-ad.css">

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
        include_once ("../do-an-web-php/Views/blocks/header.php");
    ?>

    <div class="container-fluid px-5">
        <h2 class="mt-5 mb-3">LIST OF CUSTOMER</h2>
        <form class="form-inline my-lg-0">
            <input class="form-control mr-sm-4" type="search" name = "keyword" placeholder="Search" aria-label="Search">
            <i class="fas fa-search nav-icon-search" name = "submit"></i>
        </form>
        <table class="mb-5 productlist">
            <thead>
                <tr>
                    
                    <th>
                        <h1>FULLNAME</h1>
                    </th>
                    <th>
                        <h1>PHONE</h1>
                    </th>
                    <th>
                        <h1>ADDRESS</h1>
                    </th>
                    <th>
                        <h1>EMAIL</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
            </tr>
        <?php   
        // require_once("./do-an-web-php/Controllers/UserController.php");
        // $controller = new UserController();
        // $controller->invoke();


        if (empty($users)) {
            echo "ko tim thay ket qua";
        } else {
            foreach ($users as $user) {
                echo "
                <tr>
                <td><a href = 'index.php?userid=" . $user->getName() . "'>" . $user->getName() . "</a></td>
                <td>" . $user->getPhoneNum() . "</td>
                <td>".$user->getAddress()."</td>
                <td>" . $user->getEmail() . "</td>
                </tr>
                ";
            }
        }

        ?>
            </tbody>
        </table>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>    

</body>

</html>