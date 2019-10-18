<?php 
//session_start
session_start();

//error處理
error_reporting(0); 

// test-start

//連結資料庫
$db = new PDO("mysql:host=localhost;dbname=coffee;port=3306", "root", "");
$db->exec("set names utf8");

//接收網頁端輸入帳密
$postaccount= $_POST['account'] ;
$postpassword = $_POST['password'];

$result = $db->prepare("SELECT  `em_account`,`em_password`,`em_name` FROM `employees` where  em_account = :account ;em_password = :password  ;em_name = :name lock in share mode"); 

// test-end

//判斷式

//執行登入動作
if (!isset($_SESSION["membername"]) || ($_SESSION['membername']=="")){
    
    //預設帳號密碼
    if(isset($_POST["account"]) && isset($_POST["password"])){
        
        // 這邊應接收到資料庫帳密
        // $account = $postaccount;
        // $password = $postpassword;
        

      
        //固定帳密版本
        $account ="joana06083";
        $password = "19940608";


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
    <span style=" font-family:Microsoft JhengHei;">
    <!-- logintitle --> 

    <ul class="nav nav justify-content-center">
   
        <li class="nav-item">
            <h1> <a class="nav-link  text-secondary" href="/home/index">首頁</a></h1>
        </li>  
 
        <li class="nav-item">
            <h1> <a class="nav-link  text-secondary">|</a></h1>
        </li>
     
        <li class="nav-item">
            <h1><a class="nav-link  text-secondary"  href="/home/secret">會員頁</a></h1>           
        </li>
       
    </ul>
    <!--logintitle  -->

    <hr  style="margin:20px 500px">

    <!-- 帳號密碼輸入 -->


        <div id="cover-caption">

        <div id="container" class="container">

        <div class="row text-white">

        <div class="col-sm-6 offset-sm-3 text-left">

            <div class="info-form">
        
                <form class="form-inlin justify-content-right" id="form" name="form" method="post" action="secret"
                data-toggle="validator" role="form" >
                  @csrf
                    <div class="form-group" style="color:#666666;"> 
                        <label><h3>帳號</h3> </label>
                        <input type="text"  id="account" name="account" class="form-control"  placeholder="輸入您的帳號"
                        required>
                    </div>

                    <div class="form-group" style="color:#666666;">
                        <label><h3>密碼</h3></label>
                        <input type="password"  id="password" name="password" class="form-control"  placeholder="輸入您的密碼" required>
         
                    </div>
                  

                    <div class="form-group" style="margin-left:175px">

                        <button type="submit" class="btn btn-lg btn-success pull-right"
                        name="membername" id="membername" value="登入"  href="">登入</button>

                        <button type="reset" class="btn btn-lg btn-danger pull-right"
                        name="btnReset" id="btnReset" value="重設"   href="" onclick="location='/home/login'">重置</button>
                    </div>
          
                </form>

            </div>

        </div>

        </div>

        </div>

        </div>

    </body>
    
    </span> 
    <script>
 
    </script>
</html>