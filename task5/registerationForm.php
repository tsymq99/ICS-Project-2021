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
</head>
<body class="text-center">
<form action="registerationFormCheck.php" method="post" onsubmit = "return check()" class="form-signin"  enctype="multipart/form-data">
    <h1 class="h3 mb-3 font-weight-normal">registerationForm</h1>
    <input name='txtUsername'type="text" id="name" class="form-control mb-2" placeholder="input your name" required autofocus>
    <input name='txtEmail'type="email" id="email" class="form-control mb-2" placeholder="input your Email" required>
    <input name='txtAddress'type="text" id="address" class="form-control mb-2" placeholder="input your Address" required>
    <input name='txtDateOfBirth'type="date" id="birthday" class="form-control mb-2"  required>
    <input name='txtPassword' type="password" id="pwd" class="form-control mb-2" placeholder="password" required>
    <input name='txtconfirmPassword'type="password" id="pwd2" class="form-control mb-2" placeholder="cornfirm password" required>
    <input name="upload" class=" btn btn-lg btn-primary btn-block" type="submit" value="Sign  up">
</form>
<script type="text/javascript">
    function check(){
        }
        var pwd = document.getElementById("pwd").value;
        var pwd2  = document.getElementById("pwd2").value;
        if(pwd != pwd2){
            alert("The two passwords are not the same, please re-enter");
            return false;
        }
        return true;
    }
</script>
</html>

