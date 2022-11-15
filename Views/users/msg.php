<?php

if (isset($_GET['msg'])) {
    if ($_GET['msg'] == "true") {
        echo "
         <script>
         alert('Register successfully')
        </script>
        ";
    } else if ($_GET['msg'] == "invalid_input_data") {
        echo " 
        <script>
         alert('please check your input again')
        </script>
        
       ";
    } else if ($_GET['msg'] == "") {
        echo " 
        <script>
         alert('Đăng nhập thành công!')
        </script>
        
       ";
    } else if ($_GET['msg'] == "account_has_been_exist") {
        echo " 
        <script>
         alert('This account has been exist')
        </script>
        
        ";
    } else if ($_GET['msg'] == "false") {
        echo "
         <script>
         alert('Wrong username or password! Please check again')
        </script>
        ";
        
    }
     else if ($_GET['msg'] == "out") {
        echo "
         <script>
         alert('Đăng xuất thành công!')
        </script>
        ";
        
    }
}

?>
