<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="../css/secret.css">
    @yield('head')
</head>

<style type="text/css" scoped></style>

<body>
    <span style=" font-family:Microsoft JhengHei;">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <a class="navbar-brand" href="secret.php">coffee進銷存管理系統</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="#"
                            onclick="location='/home/secret/'"> 
                            進貨管理
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"
                            onclick="location='/home/secret/'"> 
                            銷貨管理
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#"
                            onclick="location='/home/secret/products'"> 
                            產品管理
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"
                            onclick="location='/home/secret/'"> 
                            廠商管理
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"
                            onclick="location='/home/secret/'"> 
                            人員帳號管理
                        </a>
                    </li>
                    
                    <span class="navbar-text">
                    </span>

                </ul>

            </div>
            <form class="form-inline my-2 my-lg-0" method="get" action="">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Welcome! 王小美</button>
                &nbsp
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" id="logout" name="logout" href="#">
                logout</button>
            </form>
        </nav>

    </span>
    @yield('content')
</body>

</html>