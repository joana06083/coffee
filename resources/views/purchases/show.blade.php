<span style=" font-family:Microsoft JhengHei;">
@extends('home.secret')
@section('head')
    <!-- css樣式 -->
    <link rel="stylesheet" href="../../../css/secret.css">
@endsection
@section('content')

{{-- 功能鍵 --}}
<a style="margin:10px 5px 5px 10px" href="/home/secret/purchase/create" class="btn btn-md btn-success pull-right">
  <span class="glyphicon glyphicon-plus">新增</span>
</a>
<hr>
@foreach ($purchasemasters as $purmaster)

<div style="margin:10px 10px">
<form method="post" action="/home/secret/purchase/{{$purmaster->pur_id}}"> 

    <a href="/home/secret/purchase/{{$purmaster->pur_id}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span>修改</a> |
      @csrf
      @method('DELETE')
    <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove" action="/home/secret/purchase"></span>
    刪除</button>
  </form>
</div>

{{-- Purchasemasters --}}
<form method="post" action="/home/secret/purchase" class="form-horizontal-hover"  style="font-size:large; margin:10px 10px">
    @csrf
    進貨單號：<input readonly="readonly" value="{{$purmaster->pur_shipmentnumber}}" style="margin:0px 10px">

    建檔日期：<input readonly="readonly" value="{{$purmaster->pur_date}}" style="margin:0px 10px">

    預計到貨/需求日：<input readonly="readonly" value="{{$purmaster->pur_demand}}" style="margin:0px 10px">

    實際到貨日：<input readonly="readonly" value="{{$purmaster->pur_shipped}}" style="margin:0px 10px">

    物流單號：<input readonly="readonly"value="{{$purmaster->pur_id}}" style="margin:0px 10px">
    <br>
    <br>
    廠商統編：<input readonly="readonly" value="{{$purmaster->sup_id}}" style="margin:0px 10px">
   
    寄送地址：<input readonly="readonly"style="width:300px;" value="{{$purmaster->pur_address}}" style="margin:0px 10px">

    建檔人員：<input readonly="readonly" value="{{$purmaster->em_id}}" style="margin:0px 10px">

</form>
@endforeach
<br>
@foreach ($purchaselists as $pur)
    <form method="post" action="/home/secret/purchase" class="form-horizontal" style="display: none">
      <table class="table table-bordered table-hover" style="font-size:large;">
        <thead>
          {{-- <th>單號</th> --}}
          <th>序號</th>
          <th>產品編號</th>
          <th>價格</th>
          <th>數量</th>
          <th>單位</th>
          <th>折扣</th>
          <th>小計</th>
        </thead> 
        
        <tbody>
          {{-- <td><input value="{{$pur->pur_id}}"></td> --}}
          <td><input value="1"></td>      
          <td><input value="{{$pur->pro_id}}"></td>
          <td><input value="{{$pur->prime_costs}}"></td>
          <td><input value="{{$pur->purlist_amount}}"></td>
          <td><input value="{{$pur->prime_unit}}"></td>
          <td><input value="{{$pur->purlist_discount}}"></td>
          <td><input value="{{$pur->purlist_total}}"></td>
        </tbody>
      </table>

    </form>
    @endforeach
   



@endsection