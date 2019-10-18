
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

    <!-- bootstrapcdn -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- vue  cdn -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    
    <!-- css樣式 -->
    <link rel="stylesheet" href="../../css/secret.css">

    @yield('head')
</head>

<style type="text/css" scoped></style>

<body>
    {{-- 標題 --}}
    <span style="opacity: 0.9;">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <a class="navbar-brand" href="/home/secret/announcement" style="font-size:200%;">coffee進銷管理系統</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">

                <ul class="navbar-nav">

                    <li class="nav-item" style="font-size:large;">
                        <a class="nav-link" href="#"
                            onclick="location='/home/secret/purchase'"> 
                            進貨管理
                        </a>
                    </li>

                    <li class="nav-item" style="font-size:large;">
                        <a class="nav-link" href="#"
                            onclick="location='/home/secret/orders'"> 
                            銷貨管理
                        </a>
                    </li>
                    
                  <li class="nav-item" style="font-size:large;">
                        <a class="nav-link" href="#"
                            onclick="location='/home/secret/suppliers'"> 
                            廠商管理
                        </a>
                    </li>

                    <li class="nav-item" style="font-size:large;">
                        <a class="nav-link" href="#"
                            onclick="location='/home/secret/customers'"> 
                            顧客管理
                        </a>
                    </li>

                    <li class="nav-item" style="font-size:large;">
                        <a class="nav-link" href="#"
                            onclick="location='/home/secret/products'"> 
                            產品管理
                        </a>
                    </li>
                        
                    <li class="nav-item" style="font-size:large;">
                        <a class="nav-link" href="#"
                            onclick="location='/home/secret/employees'"> 
                            人員帳號管理
                        </a>
                    </li>
                    
                    <span class="navbar-text">
                    </span>

                </ul>

            </div>
        
            <form class="form-inline my-2 my-lg-0" method="post" action="/home/login">
                 @csrf
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">
                 {{-- Welcome!王小美</button> --}}
                 {{-- Welcome!王大明</button> --}}
                 Welcome!張育昇</button>                
                 &nbsp
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" id="logout" name="logout" href="/home/login">
                logout</button>
            </form>
           
        </nav>

    </span>
    @yield('content') 

</body>