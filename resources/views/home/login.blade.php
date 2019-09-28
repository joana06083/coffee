<?php 

//session_start
session_start();

//error處理
error_reporting(0); 

//連結資料庫
use App\Employees;

//接收網頁端輸入帳密

$account2= $_POST['account'] ;
$account2 = $_POST['password'];

//判斷式

//執行登入動作

if (!isset($_SESSION["account"]) || ($_SESSION["account"]=="")){
    //預設帳號密碼
    if(isset($_POST["account"]) && isset($_POST["password"])){
        
        // 這邊應接收到資料庫帳密
        $account = $emp->$em_account;
        $pwd = $emp->$em_password;

        //固定帳密版本
        // $account ="joana06083";
        // $pwd = "19940608";


        //對比帳號密碼
        if( ($_POST["account2"]==$account) && ($_POST["password2"]) )
        {
            $_SESSION["em_name"]=$username;
        }   
        return view('home.secret');
    }
    //執行登出動作
    if(isset($_GET["logut"]) && $_GET["logout"] == "ture"){
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
    <title>Document</title>
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
    <!--  檢查是否為登入 尚未登入顯示登入表單 -->
    <?php  if(!isset($_SESSION["membername"]) || ($_SESSION["membername"]==""))  {?>
    
    <!-- logintitle --> 
  
    <ul class="nav nav justify-content-center">
   
        <li class="nav-item">
            <h2> <a class="nav-link  text-secondary" name="btnOK" id="btnOK"  href="/home/login">Login</a></h2>
        </li>  
      
        <li class="nav-item">
            <h2> <a class="nav-link  text-secondary"  href="/home/login">Logout</a></h2>
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
        
                <form class="form-inlin justify-content-center" id="form" name="form" method="post" action=" home/login">
                    @csrf
                    <div class="form-group">
                        <label class="sr-only"><h3>Username</h3> </label>
                        <input type="text" name="account" id="account" class="form-control"  placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label class="sr-only">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-secondary" name="membername" id="membername" value="登入" href="/home/secret">Login</button>
                    <button type="reset" class="btn btn-secondary" name="btnReset" id="btnReset" value="重設"  href="/home/login">Reset</button>

                    </td>
            
                </form>

            </div>


        </div>

        </div>

        </div>

        </div>

        </section>

    <!-- 登入成功顯示 -->
    <?php } else{ ?>
         
    <ul class="nav nav justify-content-center">
        <li class="nav-item">
            <h2> <a class="nav-link  text-secondary" href="index.php?btnHome=1" >Logout</a></h2>
        </li>
    
        <li class="nav-item">
            <h2> <a class="nav-link  text-secondary">|</a></h2>
        </li>
     
        <li class="nav-item">
            <h2><a class="nav-link  text-secondary" href="secret.php">MemberOnly</a></h2>           
        </li>
       
    </ul>

    <!-- 登入成功帳號 紀錄-->
    <ul class="nav nav justify-content-center">

        <li class="nav-item">
            <h2><a class="nav-link  text-secondary" href="#"><?php echo $_SESSION["membername"] ?></a></h2>           
        </li>
       
    </ul>

    <?php }?>
    <!-- page -->

</body>