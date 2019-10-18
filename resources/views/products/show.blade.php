
@extends('home.secret')
@section('head')
  <!-- css樣式 -->
  <link rel="stylesheet" href="../../../css/secret.css">
@endsection
@section('content')

{{-- products --}}
<span style=" font-family:Microsoft JhengHei;">
<div style="margin:10px 5px">
    <a href="/home/secret/products/create" class="btn btn-md btn-success pull-right">
        <span class="glyphicon glyphicon-plus"></span>新增
    </a>
</div>

<div class="card-deck">
    
        @foreach ($productsList as $pro)
        <div class="card container" > 
            
        <img class="card-img-top img-thumbnail" src='../../../img/{{$pro->pro_photo}}'  alt="Card image cap">
            <div class="card-body">                       
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">序號：{{$pro->pro_id}}</li>
                    <li class="list-group-item">品名：<br>
                                                {{$pro->pro_name}}</li>
                    <li class="list-group-item">單位：{{$pro->pro_unit}}</li>
                    <li class="list-group-item">售價：{{$pro->pro_price}}</li>
                </ul>
                
                <form  style="margin:10px;margin-left:20px" method="post" action="/home/secret/products/{{$pro->pro_id}}">   
                    <a href="/home/secret/products/{{$pro->pro_id}}/edit" style="margin:5px;width:40%;"  class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span>修改</a> | 
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-xs btn-danger" style="margin:5px;width:40%;"><span class="glyphicon glyphicon-remove"  action="/home/secret/products"></span> 刪除</button>
                </form>
            </div>
            
        </div>
        @endforeach
</div>
</span>  
{{-- products --}}

@endsection
