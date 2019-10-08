<?php

$db = new PDO("mysql:host=localhost;dbname=coffee;port=3306", "root", "");
$db->exec("set names utf8");
$result = $db->query("SELECT * FROM `ordermater`");

?>

@extends('home.secret')
@section('head')
@endsection
@section('content')

{{-- 功能鍵 --}}
<div style="margin:10px 5px">
  <form method="post" action="/home/secret/order/id">   
    <a href="/home/secret/order/create" class="btn btn-md btn-success pull-right">
      <span class="glyphicon glyphicon-plus"></span>新增
    </a>|
    <a href="/home/secret/order/id/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span>修改</a> |
      @csrf
      @method('DELETE')
    <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove" action=""></span>
    刪除</button>
  </form>
</div>

{{-- purchase --}}
<form method="post" action="/home/secret/order" class="form-horizontal"  style="font-size:large; margin:10px 10px">
    @csrf
    <?php  while($row = $result->fetch()){ ?>

    銷貨單號：<input value="<?php echo "{$row['ordermater_id']}";?>" style="margin:0px 10px">

    建檔日期：<input value="<?php echo "{$row['ordermater_date']}";?>"  style="margin:0px 10px">

    到貨/需求日：<input value="<?php echo "{$row['ordermater_demand']}";?>" style="margin:0px 10px">

    商品出貨日：<input value="<?php echo "{$row['ordermater_shipped']}";?>" style="margin:0px 10px">
    
    物流單號：<input value="<?php echo "{$row['ordermater_shipmentnumber']}";?>" style="margin:0px 10px">
    <br>
    <br>
    客戶編號：<input value="<?php echo "{$row['cust_id']}";?>" style="margin:0px 10px">

    寄送地址：<input style="width:300px;" value="<?php echo "{$row['ordermater_address']}";?>" style="margin:0px 10px">

    建檔人員：<input value="<?php echo "{$row['em_id']}";?>" style="margin:0px 10px">

</form>
<?php }$db = null; ?>
<br>
{{-- purchaselist --}}

<form method="post" action="/home/secret/purchase" class="form-horizontal">
  <table class="table table-bordered table-hover"  style="font-size:large;">
    <thead>
      <th>序號</th>
      <th>產品編號</th>
      <th>品名</th>
      <th>價格</th>
      <th>數量</th>
      <th>單位</th>
      <th>折扣</th>
      <th>小計</th>
    </thead> 
    <tbody>
      <td><input value="1"></td>
      <td><input value="A"></td>
      <td><input value="咖啡豆"></td>
      <td><input></td>
      <td><input value="300"></td>
      <td><input value="1"></td>
      <td><input value="1"></td>
      <td><input value="1"></td>
    </tbody>
  </table>
</form>


@endsection