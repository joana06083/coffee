
@extends('home.secret')
@section('head')
@endsection
@section('content')

{{-- products --}}
<div>
    <a href="/home/secret/products/create" class="btn btn-md btn-success pull-right">
        <span class="glyphicon glyphicon-plus"></span>新增
    </a>
</div>
<div class="card-deck">
    
        @foreach ($productsList as $pro)
        <div class="card col-6 .col-sm-3 container" > 
            
        <img class="card-img-top img-thumbnail" src='../../img/{{$pro->pro_photo}}'  alt="Card image cap">
            <div class="card-body">                       
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">序號：{{$pro->pro_id}}</li>
                    <li class="list-group-item">品名：{{$pro->pro_name}}</li>
                    <li class="list-group-item">單位：{{$pro->pro_unit}}</li>
                    <li class="list-group-item">售價：{{$pro->pro_price}}</li>
                </ul>
                <form method="post" action="/home/secret/products/{{$pro->pro_id}}">   
                    <a href="/home/secret/products/{{$pro->pro_id}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span>修改</a> | 
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"  action="/home/secret/products"></span> 刪除</button>
                </form>
            </div>
            
        </div>
        @endforeach
</div>
    
{{-- products --}}

@endsection
