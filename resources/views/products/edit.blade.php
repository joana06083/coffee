<!DOCTYPE html>
<html lang="en">
<head>
  <title>coffee進銷管理系統</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<form method="post" action="/home/secret/products/{{$pro->pro_id}}" class="form-horizontal">
@csrf
@method('PUT')

<fieldset>

<!-- Form Name -->
<legend>Products Data</legend>

<!-- pro_id-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pro_id">序號：</label>  
  <div class="col-md-4">
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
  <div class="col-md-4">
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

</body>
</html>