
@extends('home.secret')
@section('head')
  <!-- css樣式 -->

  <link rel="stylesheet" href="../../../../css/secret.css">

@endsection
@section('content')

  <span style=" font-family:Microsoft JhengHei;">
    <div class="container">

    <form method="post" action="/home/secret/customers/{{$cust->cust_id}}" class="form-horizontal">
    @csrf
    @method('PUT')
   
    <!-- Form Name -->
    <br>
    
    <h3 style="text-align:center;margin:20px">顧客資料修改</h3>

    <hr>
  
    <!-- cust_id-->
    <div style="width:100%;margin-left:370px">
    <div class="form-group">
      <label class="col-md-4 control-label" for="cust_id">顧客編號：</label>  
      <div class="col-md-4">
      <input id="cust_id" name="cust_id" type="text" value="{{$cust->cust_id}}" placeholder="" class="form-control input-md">
        
      </div>
    </div>

    <!-- cust_name-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="cust_name">顧客姓名：</label>  
      <div class="col-md-4">
      <input id="cust_name" name="cust_name" type="text" value="{{$cust->cust_name}}" placeholder="" class="form-control input-md">
      </div>
    </div>

    <!-- cust_email-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="cust_email">Email：</label>  
      <div class="col-md-4">
      <input id="cust_email" name="cust_email" type="text" value="{{$cust->cust_email}}" placeholder="" class="form-control input-md">
      </div>
    </div>

    <!-- cust_tel-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="cust_tel">電話：</label>  
      <div class="col-md-4">
      <input id="cust_tel" name="cust_tel" type="text"  value="{{$cust->cust_tel}}"  placeholder="" class="form-control input-md">
      </div>
    </div>

    <!-- cust_address-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="cust_address">地址：</label>  
      <div class="col-md-4">
      <input id="cust_address" name="cust_address" type="text" value="{{$cust->cust_address}}" placeholder="" class="form-control input-md">
      </div>
    </div>

    <!-- em_id-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="em_id">員工編號：</label>  
      <div class="col-md-4">
      <input id="em_id" name="em_id" type="text" value="{{$cust->em_id}}"  placeholder="" class="form-control input-md">
        
      </div>
    </div>

    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="okOrCancel"></label>
      <div class="col-md-8">
            <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success" action="/home/secret/customers">OK</button>
            <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-danger">Cancel</button>
      </div>
    </div>



    </fieldset>
    </form>



  </div>

</div>
</span>
@endsection