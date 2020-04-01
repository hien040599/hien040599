<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->





<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="nbproject/css.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="CSS1.css.php">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
     
    <script src="main.js"></script>
    
</head>
<body>
    <section>
        <div class="container">
            <div class="form_content">
<!--                <i class="fa fa-user fa-5x" aria-hidden="true"></i>-->
                <img class="img10" src="https://png.pngtree.com/png-clipart/20190520/original/pngtree-business-male-icon-vector-png-image_4187852.jpg" alt="image"/>
            </div>
            <div class="login_form">
                <h1>Sign In</h1>
                <form action="index123.php"  method="POST" >
                    <input type="text" name="txtuser" required="" placeholder="Username">
                    <input type="password" name="txtpass" required="" placeholder="Password">
                    <input type="submit" name="btnsubmit" value="Login">
                </form>
                <a href="#">Forget Password</a>
            </div>
        </div>
    </section>
</body>
</html>
