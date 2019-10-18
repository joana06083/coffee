
@extends('home.secret')
@section('head')
@endsection
@section('content')

<span style=" font-family:Microsoft JhengHei;">
  {{-- suppliers --}}
    <div style="margin:10px 5px">
      <a href="/home/secret/suppliers/create" class="btn btn-md btn-success pull-right">
        <span class="glyphicon glyphicon-plus"></span>新增
      </a>
      <a href="/home/secret/suppliers/show" class="btn btn-xs btn-info">
        <span class="glyphicon glyphicon-plus"></span>廠商一覽
      </a>
    </div>
 
</span>   

@endsection