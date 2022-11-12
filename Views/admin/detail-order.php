<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furni3dots - Detail Order</title>
    <link rel="stylesheet" href="../../Public/CSS/header.css">
    <link rel="stylesheet" href="../../Public/CSS/product-ad.css">

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
        include_once 'header.php'
    ?>

    <div class="container-fluid px-5 w-75">
        <h2 class="mt-5 mb-3">DETAIL ORDER</h2>
        <table class="mb-5 productlist">
            <thead>
                <tr>
                   
                    <th>
                        <h1>ID ORDER</h1>
                    </th>
                    <th>
                        <h1>ID PRODUCT</h1>
                    </th>
                    <th>
                        <h1>PRICE</h1>
                    </th>
                    <th>
                        <h1>QUANTITY</h1>
                    </th>
                    <th>
                        <h1>DISCOUNT</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
            if (empty($detail)) {
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