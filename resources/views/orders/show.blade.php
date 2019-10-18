<span style=" font-family:Microsoft JhengHei;">
  @extends('home.secret')
  @section('head')
      <!-- css樣式 -->
      <link rel="stylesheet" href="../../../css/secret.css">
  @endsection
  @section('content')
  
  {{-- 功能鍵 --}}
  <a style="margin:10px 5px 5px 10px" href="/home/secret/orders/create" class="btn btn-md btn-success pull-right">
    <span class="glyphicon glyphicon-plus">新增</span>
  </a>
  <hr>
  @foreach ($ordermaters as $ordm)
  
  <div style="margin:10px 10px">
  <form method="post" action="/home/secret/orders/{{$ordm->ordermater_id}}"> 
  
      <a href="/home/secret/orders/{{$ordm->ordermater_id}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span>修改</a> |
        @csrf
        @method('DELETE')
      <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove" action="/home/secret/orders"></span>
      刪除</button>
    </form>
  </div>
  
  {{-- Purchasemasters --}}
  <form method="post" action="/home/secret/orders" class="form-horizontal-hover"  style="font-size:large; margin:10px 10px">
      @csrf
      銷貨單號：<input readonly="readonly" value="{{$ordm->ordermater_shipmentnumber}}" style="margin:0px 10px">
  
      建檔日期：<input readonly="readonly" value="{{$ordm->ordermater_date}}" style="margin:0px 10px">
  
      預計到貨/需求日：<input readonly="readonly" value="{{$ordm->ordermater_demand}}" style="margin:0px 10px">
  
      商品出貨日：<input readonly="readonly" value="{{$ordm->ordermater_shipped}}" style="margin:0px 10px">
  
      物流單號：<input readonly="readonly"value="" style="margin:0px 10px">
      <br>
      <br>
      客戶編號：<input readonly="readonly" value="{{$ordm->cust_id}}" style="margin:0px 10px">
     
      寄送地址：<input readonly="readonly"style="width:300px;" value="{{$ordm->ordermater_address}}" style="margin:0px 10px">
  
      建檔人員：<input readonly="readonly" value="{{$ordm->em_id}}" style="margin:0px 10px">
  
  </form>
  @endforeach
  <br>
  @foreach ($orderlists as $ord)
      <form method="post" action="/home/secret/orders" class="form-horizontal" style="display: none">
        <table class="table table-bordered table-hover" style="font-size:large;">
          <thead>
            <th>單號</th>
            <th>序號</th>
            <th>產品編號</th>
            <th>價格</th>
            <th>數量</th>
            <th>單位</th>
            <th>折扣</th>
            <th>小計</th>
          </thead> 
          
          <tbody>
            <td><input value="{{$ord->ordermater_id}}"></td>
            <td><input value="1"></td>      
            <td><input value="{{$ord->pro_id}}"></td>
            <td><input value="{{$ord->pro_price}}"></td>
            <td><input value="{{$ord->orderlist_amount}}"></td>
            <td><input value="{{$ord->prime_unit}}"></td>
            <td><input value="{{$ord->orderlist_discount}}"></td>
            <td><input value="{{$ord->order_total}}"></td>
          </tbody>
        </table>
  
      </form>
      @endforeach
     
  
  
  
  @endsection