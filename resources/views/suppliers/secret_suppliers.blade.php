
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
    </div>
    <table class="table table-hover">
      <thead>
          <tr>
            <th scope="col">廠商統編：</th>
            <th scope="col">公司名：</th>
            <th scope="col">email：</th>
            <th scope="col">電話：</th>
            <th scope="col">地址：</th>
            <th scope="col">修改/刪除</th>
          </tr>
      </thead>

          @foreach ($suppliersList as $sup)
          
        <tbody>
          <tr>
              <td>{{$sup->sup_id}}</td>
              <td>{{$sup->sup_name}}</td>
              <td>{{$sup->sup_email}}</td> 
              <td>{{$sup->sup_tel}}</td>
              <td>{{$sup->sup_address}}</td>       
              <td> 
              <form method="post" action="/home/secret/suppliers/{{$sup->sup_id}}">   
                      <a href="/home/secret/suppliers/{{$sup->sup_id}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span>修改</a> | 
                          @csrf
                          @method('DELETE')
                      <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"  action="/home/secret/suppliers"></span> 刪除</button>
                </form>
              </td> 
        @endforeach
          </tr>

        </tbody>

  </table>

</span>   
 


@endsection