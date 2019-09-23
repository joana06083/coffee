
@extends('home.secret')
@section('head')
@endsection
@section('content')

<span>	
    <?php 

    $db = new PDO("mysql:host=localhost;dbname=coffee;port=3306", "root", "");
    $db->exec("set names utf8");
    $result = $db->query("select * from product");
    header("Content-Type: image/jpg"); 
    
    ?>
    
    <?php while ($row = $result->fetch()) {?>
    
    <div class="card-deck ">
    
        <div class="card col-md-6 container" > 
            <img class="card-img-top img-thumbnail" src='../../img/<?php echo "{$row['pro_photo']}"; ?>'  alt="Card image cap">
            <div class="card-body ">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo "ID：{$row['pro_id']}";?></li>
                    <li class="list-group-item"><?php echo "ProductName：{$row['pro_name']}";?></li>
                    <li class="list-group-item"><?php echo "Price:{$row['pro_price']}";?></li>
                    <li class="list-group-item"><?php echo "Unit：{$row['pro_unit']}";?></li>
                </ul>
            </div>
            
        </div>
    
    </div>
    
    <?php  } $db = null; ?>    
  
</span>

@endsection
