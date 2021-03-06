
<span style=" font-family:Microsoft JhengHei;">
    @extends('home.secret')
    @section('head')
      <!-- css樣式 -->
      <link rel="stylesheet" href="../../../../css/secret.css">
    @endsection
    @section('content')
    
    <div class="container">

    <form method="post" action="/home/secret/suppliers/{{$sup->sup_id}}" class="form-horizontal">
    @csrf
    @method('PUT')
    <fieldset>


    <!-- Form Name -->
    <br>
      
    <h3 style="text-align:center;margin:20px">修改廠商資料</h3>

    <hr>

    <!-- sup_id-->
    <div style="width:100%;margin-left:370px">
    <div class="form-group">
      <label class="col-md-4 control-label" for="sup_id">廠商統編：</label>  
      <div class="col-md-4">
      <input id="sup_id" name="sup_id" type="text" value="{{$sup->sup_id}}" placeholder="" class="form-control input-md">
        
      </div>
    </div>

    <!-- sup_name-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="sup_name">公司名：</label>  
      <div class="col-md-4">
      <input id="sup_name" name="sup_name" type="text" value="{{$sup->sup_name}}" placeholder="" class="form-control input-md">
      </div>
    </div>

    <!-- sup_email-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="sup_email">Email：</label>  
      <div class="col-md-4">
      <input id="sup_email" name="sup_email" type="text"  value="{{$sup->sup_email}}" placeholder="" class="form-control input-md">
      </div>
    </div>

    <!-- sup_tel-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="sup_tel">電話：</label>  
      <div class="col-md-4">
      <input id="sup_tel" name="sup_tel" type="text" value="{{$sup->sup_tel}}" placeholder="" class="form-control input-md">
      </div>
    </div>

    <!-- sup_address-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="sup_address">地址：</label>  
      <div class="col-md-4">
      <input id="sup_address" name="sup_address" type="text"  value="{{$sup->sup_address}}"  placeholder="" class="form-control input-md">
      </div>
    </div>

    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="okOrCancel"></label>
      <div class="col-md-8">
            <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success" action="/home/secret/suppliers">OK</button>
            <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-danger">Cancel</button>
      </div>
    </div>



    </fieldset>
    </form>


  </div>

</div>
</span>


@endsection