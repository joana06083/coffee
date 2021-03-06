
@extends('home.secret')
@section('head')
  <!-- css樣式 -->

  <link rel="stylesheet" href="../../../../css/secret.css">

@endsection
@section('content')


    <div class="container">

    <form method="post" action="/home/secret/products/{{$pro->pro_id}}" class="form-horizontal">
    @csrf
    @method('PUT')

    <fieldset>

    <!-- Form Name -->
    <br>
    
    <h3 style="text-align:center;margin:20px">修改產品資料</h3>

    <hr>
    
    <!-- pro_id-->
    <div style="width:100%;margin-left:370px">
    <div class="form-group">
      <label class="col-md-4 control-label" for="pro_id">序號：</label>  
      <div class="col-md-4" >
      <input id="pro_id" name="pro_id" value="{{$pro->pro_id}}" type="text" placeholder="" class="form-control input-md"> 
      </div>
    </div>

    <!-- pro_name-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="pro_name">品名：</label>  
      <div class="col-md-4">
      <input id="pro_name" name="pro_name" value="{{$pro->pro_name}}" type="text" placeholder="" class="form-control input-md">
      </div>
    </div>

    <!--pro_unit-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="pro_unit">單位：</label>  
      <div class="col-md-4" >
      <input id="pro_unit" name="pro_unit" value="{{$pro->pro_unit}}" type="text" placeholder="" class="form-control input-md">
      </div>
    </div>

    <!-- pro_price-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="pro_price">售價：</label>  
      <div class="col-md-4">
      <input id="pro_price" name="pro_price" value="{{$pro->pro_price}}" type="text" placeholder="" class="form-control input-md"> 
      </div>
    </div>

    <!-- pro_photo --> 
    <div class="form-group">
      <label class="col-md-4 control-label" for="pro_photo">Photo：</label>
      <div class="col-md-4">
        <input id="pro_photo" name="pro_photo" value="{{$pro->pro_photo}}.jpg" class="input-file" type="file">
      </div>
    </div>

    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="okOrCancel"></label>
      <div class="col-md-8">
            <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success"  action="/home/secret/products">OK</button>
            <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-danger">Cancel</button>
      </div>
    </div>



    </fieldset>
    </form>


    </div>
    </div>
</span>


@endsection