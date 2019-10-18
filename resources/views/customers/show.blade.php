
<span style=" font-family:Microsoft JhengHei;">
  @extends('home.secret')
  @section('head')
    <!-- css樣式 -->
    <link rel="stylesheet" href="../../../css/secret.css">
  @endsection
  @section('content')

  {{-- customers --}}
    <div style="margin:10px 5px">
          <a href="/home/secret/customers/create" class="btn btn-md btn-success pull-right">
              <span class="glyphicon glyphicon-plus"></span>新增
          </a>
    </div>
    <table class="table table-hover">
      <thead>
          <tr>
            <th scope="col">顧客編號</th>
            <th scope="col">姓名</th>
            <th scope="col">email</th>
            <th scope="col">電話</th>
            <th scope="col">地址</th>
            <th scope="col">負責人員</th>
            <th scope="col">修改/刪除</th>
          </tr>
      </thead>

          @foreach ($customersList as $cust)
          
        <tbody>
          <tr>
              <td>{{$cust->cust_id}}</td>
              <td>{{$cust->cust_name}}</td>
              <td>{{$cust->cust_email}}</td> 
              <td>{{$cust->cust_tel}}</td>
              <td>{{$cust->cust_address}}</td>
              <td>{{$cust->em_id}}</td>         
              <td> 
              <form method="post" action="/home/secret/customers/{{$cust->cust_id}}">   
                      <a href="/home/secret/customers/{{$cust->cust_id}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span>修改</a> | 
                          @csrf
                          @method('DELETE')
                      <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"  action="/home/secret/customers"></span> 刪除</button>
                </form>
              </td> 
        @endforeach
          </tr>

        </tbody>

  </table>

</span>   
 


@endsection