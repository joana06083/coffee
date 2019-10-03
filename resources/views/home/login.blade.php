<?php 
//session_start
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>coffee進銷管理系統</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- css樣式 -->
    <link rel="stylesheet" href="../css/login.css">
</head>

<style type="text/css" scoped></style>

<body>

    <!-- 標題 -->   
    
    <!-- logintitle --> 
  
    <ul class="nav nav justify-content-center">
   
        <li class="nav-item">
            <h2> <a class="nav-link  text-secondary" name="btnOK" id="btnOK"  href="/home/index">Home</a></h2>
        </li>  
        <li class="nav-item">
            <h2> <a class="nav-link  text-secondary">|</a></h2>
        </li>
        <li class="nav-item">
            <h2> <a class="nav-link  text-secondary"  href="/home/login">Login</a></h2>
        </li>
    
        <li class="nav-item">
            <h2> <a class="nav-link  text-secondary">|</a></h2>
        </li>
     
        <li class="nav-item">
            <h2><a class="nav-link  text-secondary"  href="/home/secret">MemberOnly</a></h2>           
        </li>
       
    </ul>
    <!--logintitle  -->
    
    <!-- 帳號密碼輸入 -->
    <section id="cover">

        <div id="cover-caption">

        <div id="container" class="container">

        <div class="row text-white">

        <div class="col-sm-6 offset-sm-3 text-center">

            <div class="info-form">
        
                <form class="form-inlin justify-content-center" id="form" name="form" method="post" action="home/login">
                    @csrf
                    <div class="form-group">
                        <label class="sr-only"><h3>Username</h3> </label>
                        <input type="text" name="account" id="account" class="form-control"  placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label class="sr-only">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
                  
                    <button type="submit" class="btn btn-secondary" name="membername" id="membername" value="登入" onclick="ShowValue()">Login</button>
                    <button type="reset" class="btn btn-secondary" name="btnReset" id="btnReset" value="重設"  href="/home/login">Reset</button>

                    </td>
            
                </form>

            </div>


        </div>

        </div>

        </div>

        </div>

        </section>
        <script language="javascript">
                function ShowValue(){
                　var account=document.getElementById("account").value;
                　var pwd=document.getElementById("password").value;
                  alert(account);
                　alert(pwd);
                }
        </script>

</body>