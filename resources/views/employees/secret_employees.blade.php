
@extends('home.secret')
@section('head')
@endsection
@section('content')

{{-- employees --}}
<table class="table table-hover">
    <div>
        <a href="/home/secret/employees/create" class="btn btn-md btn-success pull-right">
            <span class="glyphicon glyphicon-plus"></span>新增
        </a>
    </div>
    <thead>
        <tr>
          <th scope="col">員工編號：</th>
          <th scope="col">帳號：</th>
          <th scope="col">密碼：</th>
          <th scope="col">姓名：</th>
          <th scope="col">email：</th>
          <th scope="col">電話：</th>
          <th scope="col">地址：</th>
          <th scope="col">修改/刪除</th>
        </tr>
    </thead>

        @foreach ($employeesList as $emp)
        
      <tbody>
        <tr>
            <td>{{$emp->em_id}}</td>
            <td>{{$emp->em_account}}</td>
            <td>{{$emp->em_password}}</td>
            <td>{{$emp->em_name}}</td>
            <td>{{$emp->em_email}}</td> 
            <td>{{$emp->em_tel}}</td>
            <td>{{$emp->em_address}}</td>           
            <td> 
             <form method="post" action="/home/secret/employees/{{$emp->em_id}}">   
                    <a href="/home/secret/employees/{{$emp->em_id}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span>修改</a> | 
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"  action="/home/secret/employees"></span> 刪除</button>
              </form>
            </td> 
      @endforeach
        </tr>

      </tbody>

</table>

  
  @endsection