<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <h1>userlist</h1>
    <form method="get" action="">
        <input type="text" name="keyword"/>
        <input type="submit" value="search"/>
    </form>

    <table border="1">
        <tr>
            <th>User name</th>
            <th>Password</th>
            <th>Email</th>
            <th>Address</th>
            <th>action</th>
        </tr>
        <?php
        if(empty($users))
        {
            echo "ko tim thay ket qua";

        }
        else{

            foreach ($users as $user) {
                echo "
                <tr>
                <td><a href = 'index.php?username=" . $user->getusername() . "'>" . $user->getusername() . "</a></td>
                <td>".$user->getpassword()."</td>
                <td>" . $user->getemail() . "</td>
                <td>" . $user->getaddress() . "</td>
            
                
                </tr>
                ";
            }
        }
        ?>
    </table>

</body>

</html>