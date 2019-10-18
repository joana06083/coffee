<span style=" font-family:Microsoft JhengHei;">
  @extends('home.secret')
  @section('head')
    <!-- css樣式 -->
    <link rel="stylesheet" href="../../../css/secret.css">
  @endsection
  @section('content')

  <form method="post" action="/home/secret/purchase" class="form-horizontal-hover"  style="font-size:large; margin:10px 10px">
    @csrf
    {{-- 功能鍵 --}}
    <div class="form-group">
      <label class="col-md-4 control-label" for="okOrCancel"></label>
      <div class="col-md-8">
        <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success"
          action="/home/secret/purchase">OK</button>|
          
        <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-danger"
          action="/home/secret/purchase">Cancel</button>
      </div>
    </div>
    <br>
    {{-- Purchasemasters --}}
    <div class="form-group">

    <a class="col-md-4 control-label" for="pur_shipmentnumber">進貨單號：</a>
    <input id="pur_shipmentnumber" name="pur_shipmentnumber" value="" style="margin:0px 10px" type="text" placeholder="">

    <a class="col-md-4 control-label" for="pur_date">建檔日期：</a>
    <input id="pur_date" name="pur_date" value="" style="margin:0px 10px" type="text" placeholder="">

    <a class="col-md-4 control-label" for="pur_demand">預計到貨/需求日：</a>
    <input id="pur_demand" name="pur_demand" value="" style="margin:0px 10px" type="text" placeholder="">

    <a class="col-md-4 control-label" for="pur_shipped">實際到貨日:</a>
    <input id="pur_shipped" name="pur_shipped" value="" style="margin:0px 10px" type="text" placeholder="">

    <a class="col-md-4 control-label" for="pur_id">物流單號：</a>
    <input id="pur_id" name="pur_id" value="" style="margin:0px 10px" type="text" placeholder="">

    <br>
    <br>

    <a class="col-md-4 control-label" for="sup_id">廠商統編：</a>
    <input id="sup_id" name="sup_id" value="" style="margin:0px 10px" type="text" placeholder="">

    <a class="col-md-4 control-label" for="pur_address">寄送地址：</a>
    <input id="pur_address" name="pur_address" value="" style="margin:0px 10px" type="text" placeholder="">

    <a class="col-md-4 control-label" for="em_id">建檔人員：</a>
    <input id="em_id" name="em_id" value="" style="margin:0px 10px" type="text" placeholder="">

    </div>

  <!-- Purchaselists-->
    <table class="table table-bordered table-hover" style="font-size:large;">
      <thead>
        <th style=" display: none;">單號</th>
        <th>序號</th>
        <th>產品編號</th>
        <th>價格</th>
        <th>數量</th>
        <th>單位</th>
        <th>折扣</th>
        <th>小計</th>
      </thead>
      <tbody> 
        <tr> 
          <td style="display: none"><input id="pur_id" name="pur_id" value="1041397777" type="text" ></td>
          <td><input id="1" name="1" value="1" type="text" style="text-align:center ;width:100px;" readonly="readonly"></td>
          <td><input id="pro_id" name="pro_id" value="" type="text"></td>
          <td><input id="prime_costs" name="prime_costs" value="" type="text"></td>
          <td><input id="purlist_amount" name="purlist_amount" value="" type="text"></td>
          <td><input id="prime_unit" name="prime_unit" value="" type="text"></td>
          <td><input id="purlist_discount" name="purlist_discount" value="" type="text"></td>
          <td><input id="purlist_total" name="purlist_total" value="" type="text"></td>
        </tr>

      </tbody>
    </table>
    <script type="text/javascript">
    function total(){
      
    }
    
    </script>
  </form>


 
</span>


@endsection