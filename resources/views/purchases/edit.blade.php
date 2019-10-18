<span style=" font-family:Microsoft JhengHei;">
    @extends('home.secret')
    @section('head')
    
        <!-- css樣式 -->
        <link rel="stylesheet" href="../../../../css/secret.css">
    @endsection
    @section('content')
    
    <form method="post" action="/home/secret/purchase/{{$purmaster->pur_id}}" class="form-horizontal-hover"  
      style="font-size:large; margin:20px 10px">
    @csrf
    @method('PUT')
       <!-- Button (Double) -->
       <div class="form-group">
          <label class="col-md-4 control-label" for="okOrCancel"></label>
          <div class="col-md-8">
                <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success" action="/home/secret/purchase">OK</button>
                <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-danger">Cancel</button>
          </div>
        </div>
        <div class="form-group">
      {{-- Purchasemasters --}}
      進貨單號：<input value="{{$purmaster->pur_shipmentnumber}}"  style="margin:0px 10px">

      建檔日期：<input value="{{$purmaster->pur_date}}" style="margin:0px 10px">

      預計到貨/需求日：<input value="{{$purmaster->pur_demand}}" style="margin:0px 10px">

      實際到貨日:<input value="{{$purmaster->pur_shipped}}" style="margin:0px 10px">

      物流單號：<input value="{{$purmaster->pur_id}}"style="margin:0px 10px">
      <br>
      <br>
      廠商統編：<input value="{{$purmaster->sup_id}}" style="margin:0px 10px">
    
      寄送地址：<input style="width:300px;" value="{{$purmaster->pur_address}}" style="margin:0px 10px">

      建檔人員：<input  value="{{$purmaster->em_id}}" style="margin:0px 10px">

    </div>

    <br>
   
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


 
</span>

@endsection