<?php

                if (isset($_POST['username'])) {

                    $username = $_POST['username'];
                    echo $username;
                    $password = $_POST['password'];
                    echo $password;
                    $nhi = $_POST['NHI'];
                    echo $nhi;
                    
                }
       ?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="cssforindex/index.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet"> 
    </head>
    <body>
        <div class = "inputs">
            <img src="medical.svg" alt="medical symbol" class ="svg ">
            <form action="Sofa/Sofa.php" method="post" id="form">
                <div class ="label1">  First Name : 
                    <input type= "text" name="username" id="username" placeholder="Username ..." required> 
                </div>
                <br>
                <div class ="labe2"> Last Name :  
                    <input type= "password" name="password" id="password" placeholder="Password ..." required> 
                </div>
                <br>
                <div class ="label3">  NHInum... : 
                    <input type= "text" name="NHI" pattern="[A-Z]{3}[0-9]{4}" id= "NHI" placeholder="NHI ..." required> 
                </div>
                <br> 
                <button id="button_login" value="login" type ="submit">Login</button>
                <p id="notice"></p>
            </form>
        </div>

        <script type="text/javascript">
            const form = document.getElementById('form');

            form.addEventListener('submit', e => {
                e.preventDefault();

                const username = document.getElementById('username').value;
                const password = document.getElementById('password').value;
                const nhi = document.getElementById('NHI').value;
        
                const old_username = "john";
                const old_password = "doe";
                const old_nhi = "ABC1234";

                if(!username && !password && !nhi) {
                    document.getElementById('notice').innerHTML = 'your login information is undefined';
                } else if (username !== old_username && password !== old_password && nhi !== old_nhi ) {
                    document.getElementById('notice').innerHTML = 'your login information is invalid';
                } else {
                    form.submit();
                }                
            });
        </script>
    </body>
</html>