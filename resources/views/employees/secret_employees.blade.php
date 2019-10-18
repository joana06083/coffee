
@extends('home.secret')
@section('head')
@endsection
@section('content')

<span style=" font-family:Microsoft JhengHei;">
  {{-- employees --}}
  
    <div style="margin:10px 5px">
          <a href="/home/secret/employees/create" class="btn btn-md btn-success pull-right">
              <span class="glyphicon glyphicon-plus"></span>新增
          </a>
          <a href="/home/secret/employees/show" class="btn btn-xs btn-info">
            <span class="glyphicon glyphicon-plus"></span>員工帳號一覽
          </a>
    </div>

</span>   
 


@endsection
