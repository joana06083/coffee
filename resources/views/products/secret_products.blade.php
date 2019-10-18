
@extends('home.secret')
@section('head')
@endsection
@section('content')

{{-- products --}}
<span style=" font-family:Microsoft JhengHei;">
<div style="margin:10px 5px">
    <a href="/home/secret/products/create" class="btn btn-md btn-success pull-right">
        <span class="glyphicon glyphicon-plus"></span>新增
    </a>
    <a href="/home/secret/products/show" class="btn btn-xs btn-info">
        <span class="glyphicon glyphicon-plus"></span>產品一覽
    </a>
</div>

</span>  


@endsection
