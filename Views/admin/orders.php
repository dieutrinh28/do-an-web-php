<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furni3dots - Orders</title>
    <link rel="stylesheet" href="../../Public/CSS/header.css">
    <link rel="stylesheet" href="../../Public/CSS/customers-ad.css">

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
        include_once '../do-an-web-php/Views/blocks/header.php'
    ?>

    <div class="container-fluid px-5 w-50">
        <h2 class="mt-5 mb-3">LIST OF ORDER</h2>
        <form class="form-inline my-lg-0">
            <input class="form-control mr-sm-4" type="search" placeholder="Search" aria-label="Search">
            <i class="fas fa-search nav-icon-search"></i>
        </form>
        <table class="mb-5 productlist">
            <thead>
                <tr>
                    <th>
                        <h1>ID</h1>
                    </th>
                    <th>
                        <h1>TIME</h1>
                    </th>
                    <th>
                        <h1>ID USER</h1>
                    </th>
                    <th>
                        <h1>ACTION</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2022-10-08 17:19:46</td>
                    <td>6</td>
                    <td><a href="">See more</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2022-10-08 17:19:46</td>
                    <td>6</td>
                    <td><a href="">See more</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>    

</body>

</html>