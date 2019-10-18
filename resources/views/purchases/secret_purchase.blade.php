
@extends('home.secret')
@section('head')

<script language="javascript">

    // function ChangeDisabled(){
    // 　
    // // 　document.getElementById('TetstText').disabled=false;　// 變更欄位為可用
    
    // 　document.getElementById('TetstText').disabled=true;　// 變更欄位為禁用
        
    
    // }
</script>

@endsection
@section('content')
{{-- 功能鍵 --}}

<div style="margin:10px 10px">

<form method="post" action="/home/secret/purchase"> 
    <a href="/home/secret/purchase/create" class="btn btn-md btn-success pull-right" >
      <span class="glyphicon glyphicon-plus"></span>新增
    </a>|
    <a href="/home/secret/purchase/show" class="btn btn-xs btn-info">
      <span class="glyphicon glyphicon-plus"></span>訂單一覽
    </a>
  
    </form>
</div>

{{-- Purchasemasters --}}
<form method="post" action="/home/secret/purchase" class="form-horizontal-hover"  style="font-size:large; margin:10px 10px">
    @csrf

    進貨單號：<input disabled="disabled" value="">

    建檔日期：<input disabled="disabled" value="" style="margin:0px 10px">

    預計到貨/需求日：<input disabled="disabled"  value="" style="margin:0px 10px">

    實際到貨日：<input  disabled="disabled" value="" style="margin:0px 10px">

    物流單號：<input  disabled="disabled" value="" style="margin:0px 10px">
    <br>
    <br>
    廠商統編：<input  disabled="disabled"  value="" style="margin:0px 10px">
   
    寄送地址：<input  disabled="disabled" style="width:300px;" value="" style="margin:0px 10px">

    建檔人員：<input  disabled="disabled" value="" style="margin:0px 10px">

</form>

<br>

<!-- Purchaselists-->


<form method="post" action="/home/secret/purchase" class="form-horizontal">
  <table class="table table-bordered table-hover" style="font-size:large;">
    <thead>
      <th>序號</th>
      <th>產品編號</th>
      <th>價格</th>
      <th>數量</th>
      <th>單位</th>
      <th>折扣</th>
      <th>小計</th>
    </thead> 
    
    <tbody>
      <td><input  disabled="disabled" value=""></td>      
      <td><input  disabled="disabled" value=""></td>
      <td><input  disabled="disabled" value=""></td>
      <td><input  disabled="disabled" value=""></td>
      <td><input  disabled="disabled" value=""></td>
      <td><input  disabled="disabled" value=""></td>
      <td><input  disabled="disabled" value=""></td>
    </tbody>
  </table>
</form>

@endsection