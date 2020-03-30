<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
<style>
/**{
    margin:0;
    padding:0;
    border:none;
    font-family: 'Open Sans', sans-serif;
}
body {
    overflow: hidden;
    background-color: #ededed;
}
.to {
    display: grid;
    grid-template-columns: repeat(12,1fr);
    grid-template-rows: minmax(100px,auto);
}
 
.form {
    border: 1px solid #80808000;
    grid-column: 6/9;
    grid-row: 3;
    height: 470px;
    width: 292px;
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    border-radius: 15px;
    box-shadow: 0px 0px 14px 0px grey;
    background-color: white;
}
h2 {
    margin-top: 50px;
    margin-bottom: 30px;
}
i.fa fa-user {
    display: block;
    margin-bottom: 500px;
    font-size: 30px;
}
 
label {
    margin-left: -126px;
    display: block;
    font-weight: lighter;
 
}
input{
    display: block;
    border-bottom: 2px solid #00BCD4;
    margin-top: 6px;
    margin-bottom: 10px;
    outline-style: none;
}
input[type="text"] {
    padding: 5px;
    width: 70%;
}
 
input#submit {
    padding: 7px;
    width: 50%;
    border-radius: 10px;
    border: none;
    position: absolute;
    bottom: 10px;
    cursor: pointer;
    background: linear-gradient(to right, #fc00ff, #00dbde);
}
input#submit:hover{
 
    background: linear-gradient(to right, #fc466b, #3f5efb); 
}*/

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
    background: url(bg.jpg);
    background-size: cover;
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
/*button {
  border: none;
  background: #00d2d3;
  cursor: pointer;
  border-radius: 3px;
  padding: 6px;
  width: 200px;
  color: white;
  margin-left: 25px;
  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
4px 2px;
}*/
.img10{
   width: 100%;
    height: 350px;
}
.add1{
    background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 6px 2px;
  cursor: pointer;
  border-radius: 12px;
}
</style>
    </head>
    <body>
        <form action="check.php" method="POST">
            <h1>LOGIN</h1>
            <input type="text" placeholder="username" required="" name="txtuser">
            <input type="password" placeholder="password" required="" name="txtpass">
            <button type="submit" name="btnsubmit">submit</button>
        </form>
    </body>
</html>-->
<!--<html>
    <head>
        <title>Đăng kí</title>
        <link rel="stylesheet" href="CSS/1.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i|Noto+Sans:400,400i,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <link href="nbproject/css.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
   
    <body>
        <div class="to">
            <div class="form">
                 
                <h2>LOGIN</h2>
                
             <i class="fa fa-user fa-4x" aria-hidden="true"></i>
                <form action="check.php" method="POST">
                <label style="margin-left: 1px;">Username</label>
                <input type="text" name="txtuser">
                <label style="margin-left: 1px;">Password</label>
                <input type="password" name="txtpass">    
                <button  type="submit" name="btnsubmit">Login</button>
                </form>
         
            </div> 
        </div>
    </body>
</html>-->
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
