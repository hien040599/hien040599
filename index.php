
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="nbproject/css.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="CSS/1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="main.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Oxygen');
        body{
    margin: 0;
    padding: 0;
    font-family: 'Oxygen', sans-serif;
    letter-spacing: 1px;
}
section{
    width: 100%;
    height: 100vh;
    background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ-jv7pUH95WypZ7LG6QrcPHR2mh-WXnlo7a_CU8kNGZ_Vjm8kH&usqp=CAU);
    background-size: 10%;
}
.container{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 700px;
    height: 350px;
    background: rgba(103, 58, 183, 0.7);
}
.container .form_content, .container .login_form{
    position: relative;
    width: 50%;
    height: 350px;
    float: left;
    box-sizing: border-box;
}
.container .form_content{
/*    padding: 40px;*/
    color: #fff;
    background-image: url(https://png.pngtree.com/png-clipart/20190520/original/pngtree-business-male-icon-vector-png-image_4187852.jpg);
    background-size: 100%;
    background-repeat: no-repeat;
}
.container .form_content a{
    display: inline-block;
    padding: 10px 20px;
    color: #fff;
    background: #ff0057;
    border-radius: 25px;
    text-decoration: none;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container .login_form{
    background: #fff;
    height: 380px;
    top: -15px;
    box-shadow: -20px 0 15px rgba(0, 0, 0, 0.2);
    padding: 30px;
}
.container .login_form h1{
    color: #262626;
}
.container .login_form input{
    display: block;
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    margin-bottom: 20px;
    border: 2px solid #ccc;
    border-radius: 25px;
    outline: none;
    font-size: 15px;
}
.container .login_form input:hover{
    border: 2px solid #673ab7;
}
.container .login_form input[type="submit"]{
    color: #fff;
    background: #673ab7;
    font-size: 16px;
    transition: 0.5s;
}
.container .login_form input[type="submit"]:hover{
    background: #ff0057;
    border: 2px solid #ff0057;
}
.container .login_form a{
    text-decoration: none;
    font-weight: bold;
}
    </style>
</head>
<body>
    <section>
        <div class="container">
            <div class="form_content">

            </div>
            <div class="login_form">
                <h1>Sign In</h1>
                <form action="index1.php"  method="POST" >
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