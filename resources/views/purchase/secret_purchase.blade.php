<?php

$db = new PDO("mysql:host=localhost;dbname=coffee;port=3306", "root", "");
$db->exec("set names utf8");
$result = $db->query("SELECT * FROM `purchase`");
$resultlist = $db->query("SELECT * FROM `purchaselist`");

?> 

@extends('home.secret')
@section('head')
@endsection
@section('content')

<span style=" font-family:Microsoft JhengHei;">
  {{--  --}}
    <div style="margin:10px 5px">
        <form method="post" action=""> 
            <a href="" class="btn btn-md btn-success pull-right">
                <span class="glyphicon glyphicon-plus"></span>新增
            </a>|
            
            <a href="" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span>修改</a> | 
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"  action=""></span> 刪除</button>
        
        </form>
    </div>

  {{-- purchase --}}
  <?php  while($row = $result->fetch()){ ?>
    <table class="table">
      <thead>
          <tr>
            <th scope="col">進貨單號：  
              <?php echo "{$row['pur_id']}";?>
            </th>
            <th scope="col">建檔日期：
              <?php echo "{$row['pur_date']}";?>
            </th>
            <th scope="col">到貨/需求日：
              <?php echo "{$row['pur_demand']}";?>
            </th>
            <th scope="col">商品出貨日：
              <?php echo "{$row['pur_shipped']}";?>
            </th>
          </tr>
          <tr>
            <th scope="col">物流單號：
              <?php echo "{$row['pur_shipmentnumber']}";?>
            </th>
            <th scope="col">廠商統編：
              <?php echo "{$row['sup_id']}";?>
            </th>
            <th scope="col">寄送地址：
              <?php echo "{$row['pur_address']}";?>
            </th>
            <th scope="col">建檔人員：
              <?php echo "{$row['em_id']}";?>
            </th>
          </tr>
      </thead>
      <tbody>
        
      </tbody>
  </table>

  {{-- purchaselist --}}
  

</span>   
<?php }$db = null; ?>  


@endsection