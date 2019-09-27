<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>coffee進銷存管理系統</title>
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

    <!-- logintitle --> 
  
    <ul class="nav nav justify-content-center">
   
        <li class="nav-item">
            <h2> <a class="nav-link  text-secondary" name="btnOK" id="btnOK" href="">Login</a></h2>
        </li>  
      
        <li class="nav-item">
            <h2> <a class="nav-link  text-secondary" href="">Logout</a></h2>
        </li>
    
        <li class="nav-item">
            <h2> <a class="nav-link  text-secondary">|</a></h2>
        </li>
     
        <li class="nav-item">
            <h2><a class="nav-link  text-secondary" href="secret.php">MemberOnly</a></h2>           
        </li>
       
    </ul>
    <!--logintitle  -->
    
    <!-- submit -->
    <section id="cover">

        <div id="cover-caption">

        <div id="container" class="container">

        <div class="row text-white">

        <div class="col-sm-6 offset-sm-3 text-center">

            <div class="info-form">
           
                <form class="form-inlin justify-content-center" id="form" name="form" method="POST" action="#">
                    
                    <div class="form-group">
                        <label class="sr-only"><h3>Username</h3> </label>
                        <input type="text" name="account" id="account"   class="form-control" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label class="sr-only">Password</label>
                        <input type="Password" name="pwd" id="pwd" class="form-control" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-secondary" name="btnOK" 
                    id="btnOK" value="登入" onclick="javascript:location='/home/secret'">
                        Login</button>
                    <button type="reset" class="btn btn-secondary" name="btnReset" id="btnReset" value="重設">
                        Reset</button>

                    </td>
             
                </form>

            </div>


        </div>

        </div>

        </div>

        </div>

    </section>

 <!-- submit -->

</body>

<div class="container">
  @foreach ($employeeList as $emp)

    <h1>{{$emp->em_account}}</h1>
    <h1>{{$emp->em_password}}</h1>

    <form method="post" action="/home/login/{{$emp->em_id}}"> 
        <a href="/home/login/{{$emp->em_id}}/add" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-pencil"></span>新增</a> |
        <a href="/home/login/{{$emp->em_id}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span>修改</a> | 
            @csrf
            @method('DELETE')
        <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> 刪除</button>
    </form>
    @endforeach
  </table>
</div>

</body>
</html>
