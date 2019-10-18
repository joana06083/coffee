 

<span style=" font-family:Microsoft JhengHei;">
    @extends('home.secret')
    @section('head')
      <!-- css樣式 -->
      <link rel="stylesheet" href="../../../css/secret.css">
    @endsection
    @section('content')
    
  {{-- employees --}}
  
    <div style="margin:10px 5px">
          <a href="/home/secret/employees/create" class="btn btn-md btn-success pull-right">
              <span class="glyphicon glyphicon-plus"></span>新增
          </a>
      </a>
    </div>
    {{-- style="display:none" --}}
    <table class="table table-hover">
      <thead>
          <tr>
            <th scope="col">員工編號</th>
            <th scope="col">帳號</th>
            <th scope="col">密碼</th>
            <th scope="col">部門</th>
            <th scope="col">姓名</th>
            <th scope="col">email</th>
            <th scope="col">電話</th>
            <th scope="col">地址</th>
            <th scope="col">修改/刪除</th>
          </tr>
      </thead>

          @foreach ($employeesList as $emp)
          
        <tbody>
          <tr>
              <td>{{$emp->em_id}}</td>    
              <td>{{$emp->em_account}}</td>
              <td>{{$emp->em_password}}</td>
              <td>{{$emp->d_name}}</td>
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

</span>   
 


@endsection
