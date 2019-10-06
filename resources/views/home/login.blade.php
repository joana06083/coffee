<?php 
//session_start
session_start();

//error處理
error_reporting(0); 

//連結資料庫
$db = new PDO("mysql:host=localhost;dbname=coffee;port=3306", "root", "");
$db->exec("set names utf8");

//接收網頁端輸入帳密
$account2= $_POST['account'] ;
$password2 = $_POST['password'];

$result = $db->prepare("SELECT  `em_account`,`em_password` ,`em_name`FROM `employees` where  em_account = account  em_password = password em_name = name lock in share mode"); 

//判斷式

//執行登入動作
if (!isset($_SESSION["membername"]) || ($_SESSION['membername']=="")){
    
    //預設帳號密碼
    if(isset($_POST["account"]) && isset($_POST["password"])){
        
        // 這邊應接收到資料庫帳密
        $account = $account2;
        $password = $password2;
        

      
        //固定帳密版本
        // $account ="joana06083";
        // $pwd = "19940608";


        //對比帳號密碼
        if( ($_POST["account"]==$account) && ($_POST["password"==$password]) )
        {
            $_SESSION["membername"]=$username;
        }   
        
        return view('home.secret');
 
    }
    //執行登出動作
    if(isset($_GET["logut"]) && $_GET["logout"] == "ture")
    {
    unset($_SESSION['membername']);
    return view('home.login');
    }
}



$db = null;



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

    <!-- bootstrap cdn -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     
    <!-- vue  cdn -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    
    <!-- css樣式 -->
    <link rel="stylesheet" href="../../css/login.css">
</head>

<style type="text/css" scoped></style>

<body>

    <!-- logintitle --> 

    <ul class="nav nav justify-content-center">
   
        <li class="nav-item">
            <h2> <a class="nav-link  text-secondary" href="/home/index">Home</a></h2>
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
        
                <form class="form-inlin justify-content-center" id="form" name="form" method="post" action="secret">
                  @csrf
                    <div class="form-group">
                        <label class="sr-only"><h3>Account</h3> </label>
                        <input type="text" name="account" id="account" class="form-control"  placeholder="Enter Your Account">
                    </div>
                    <div class="form-group">
                        <label class="sr-only">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password">
                    </div>
                  
                    <button type="submit" class="btn btn-secondary" name="membername" id="membername" value="登入">Login</button>
                    <button type="reset" class="btn btn-secondary" name="btnReset" id="btnReset" value="重設"  href="/home/login">Reset</button>

                    </td>
            
                </form>

            </div>

        </div>

        </div>

        </div>

        </div>

        </section>
    </body>
    <script>

    </script>
</html>

備份檔