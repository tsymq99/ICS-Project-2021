
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/html.css">
    <script src="css/bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="css/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <style>
    </style>
</head>
<body class="text-center">
<form action="loginFormCheck.php" method="post" onsubmit = "return check()" class="form-signin"  enctype="multipart/form-data">
<!--    <form action="zhuce_insert.php" method="post" onsubmit = "return check()">-->
    <h1 class="h3 mb-3 font-weight-normal">LoginForm</h1>
    <input name='txtEmail' type="email" id="email" class="form-control mb-2" placeholder="input your Email" required>
    <input name='txtPassword' type="password" id="pwd" class="form-control mb-2" placeholder="password" required>
    <label for="">Verification code：</label>
    <input type="text" name="captcha"  class="form-control mb-2" />
    <img src="code.php" alt="" id="code_img"/>
    <a href="#" id="change">I can't see it. Change it</a>
    <input name="upload" class=" btn btn-lg btn-primary btn-block" type="submit" value="login">
    <a href="updatingpasswordForm.php">change password</a> &nbsp &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp  <a href="registerationForm.php">register</a>
</form>
<script type="text/javascript">
    var change = document.getElementById("change");
    var img = document.getElementById("code_img");


    change.onclick = function(){
        img.src = "code.php?t="+Math.random(); //增加一个随机参数，防止图片缓存
        return false; //阻止超链接的跳转动作

    }
</script>
</html>
