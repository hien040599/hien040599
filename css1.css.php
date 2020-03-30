
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
