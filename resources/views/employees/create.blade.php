
<span style=" font-family:Microsoft JhengHei;">
  @extends('home.secret')
  @section('head')
    <!-- css樣式 -->
    <link rel="stylesheet" href="../../../css/secret.css">
  @endsection
  @section('content')

    
    <div class="container">

    <form method="post" action="/home/secret/employees" class="form-horizontal">
        @csrf
    <fieldset>

    <!-- Form Name -->
    <br>
    
    <h3 style="text-align:center;margin:20px">新增人員帳號</h3>

    <hr>
    <!-- em_id-->
    <div style="width:100%;margin-left:370px">
    <div class="form-group">
      <label class="col-md-4 control-label" for="em_id">員工編號：</label>  
      <div class="col-md-4">
      <input id="em_id" name="em_id" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>

    <!-- em_account-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="em_account">帳號：</label>  
      <div class="col-md-4">
      <input id="em_account" name="em_account" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>

    <!--em_password-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="em_password">密碼：</label>  
      <div class="col-md-4">
      <input id="em_password" name="em_password" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>

    <!-- d_name-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="d_name">部門：</label>  
      <div class="col-md-4">
      <input id="d_name" name="d_name" type="text" placeholder="" class="form-control input-md">
        
      </div>
    </div>

    <!-- em_name-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="em_name">姓名：</label>  
      <div class="col-md-4">
      <input id="em_name" name="em_name" type="text" placeholder="" class="form-control input-md">
      </div>
    </div>

    <!-- em_email-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="em_email">Email：</label>  
      <div class="col-md-4">
      <input id="em_email" name="em_email" type="text" placeholder="" class="form-control input-md">
      </div>
    </div>

    <!-- em_tel-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="em_tel">電話：</label>  
      <div class="col-md-4">
      <input id="em_tel" name="em_tel" type="text" placeholder="" class="form-control input-md">
      </div>
    </div>

    <!-- em_address-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="em_address">地址：</label>  
      <div class="col-md-4">
      <input id="em_address" name="em_address" type="text" placeholder="" class="form-control input-md">
      </div>
    </div>

    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="okOrCancel"></label>
      <div class="col-md-8">
            <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success" action="/home/secret/employees">OK</button>
            <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-danger">Cancel</button>
      </div>
    </div>



    </fieldset>
    </form>

    </div>

    </div>
  </span>


  @endsection