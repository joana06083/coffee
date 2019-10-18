
@extends('home.secret')
@section('head')
@endsection
@section('content')

{{-- 公告 --}}

 <span style="font-family:Microsoft JhengHei;">
    <?php
    $db = new PDO("mysql:host=localhost;dbname=coffee;port=3306", "root", "");
    $db->exec("set names utf8");
    $result = $db->query("SELECT * FROM `purchasemasters` WHERE `pur_demand` LIKE '2019/10/23'");  
    ?>  
    {{--  --}}
    <?php  while($row = $result->fetch()){ ?>
  
    <div role="main" class="container">
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">進貨單-尚未到貨</h6>
    
      
      <div class="media text-muted pt-3">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <a class="d-block text-gray-dark">建檔人員：<?php echo "{$row['em_id']}";?></a>
          </p>
      </div>
        
        <table class="table" style="">
          <thead>			
            <tr>			  	  
              <th>進貨單號</th>			 
              <th>建檔日期</th>			  
              <th>預計到貨/需求日</th>			  
              <th>實際到貨日</th>
              <th>物流單號</th>
              <th>廠商統編</th>
              <th>寄送地址</th>
              <th>連結</th>
            </tr>		  
          </thead>	      
          <tbody>			
            <tr>			  
              <td><?php echo "{$row['pur_shipmentnumber']}";?></td>			 
              <td><?php echo "{$row['pur_date']}";?></td>			  
              <td><?php echo "{$row['pur_demand']}";?></td>			  
              <td><?php echo "{$row['pur_shipped']}";?></td>
              <td><?php echo "{$row['pur_id']}";?></td>
              <td><?php echo "{$row['sup_id']}";?></td>
              <td><?php echo "{$row['pur_address']}";?></td>
              <td>
                <small class="d-block text-right mt-3">
                  <button class="btn btn-success" href="#" contenteditable="true"  spellcheckker="false" onclick="location='/home/secret/purchase/1041397777/edit'">Follow</button>
                </small> 
              </td>
            </tr>			
          </tbody>
        </table>  
        
        </div>
        <?php }$db = null; ?>
        {{--  --}}
        <div class="my-3 p-3 bg-white rounded box-shadow">
          <h6 class="border-bottom border-gray pb-2 mb-0">銷貨單-即將到期</h6>
        
        <?php
          $db = new PDO("mysql:host=localhost;dbname=coffee;port=3306", "root", "");
          $db->exec("set names utf8");
          $result = $db->query("SELECT * FROM `ordermaters`");  
        ?>  
        <?php  while($row = $result->fetch()){ ?>
        <div class="media text-muted pt-3">
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <a class="d-block text-gray-dark">建檔人員：<?php echo "{$row['em_id']}";?></a>
          </p>
        </div>
        <table class="table" style="">
            <thead>			
              <tr>
                <th>銷貨單號 </th>			 
                <th>建檔日期 </th>			  
                <th>預計到貨/需求日</th>			  
                <th>商品出貨日</th>
                <th>物流單號</th>
                <th>客戶編號</th>
                <th>寄送地址</th>
                <th>連結</th>

              </tr>		  
            </thead>	      
            <tbody>			
              <tr>			  
                <td><?php echo "{$row['ordermater_shipmentnumber']}";?></td>			 
                <td><?php echo "{$row['ordermater_date']}";?></td>			  
                <td><?php echo "{$row['ordermater_demand']}";?></td>			  
                <td><?php echo "{$row['ordermater_shipped']}";?></td>
                <td></td>
                <td><?php echo "{$row['cust_id']}";?></td>
                <td><?php echo "{$row['ordermater_address']}";?></td>
                <td>
                  <small class="d-block text-right mt-3">
                    <button class="btn btn-success" href="#" contenteditable="true"  spellcheckker="false"
                     onclick="location='/home/secret/orders/show'" >Follow</button>
                  </small> 
                </td>
              </tr>			
            </tbody>
          </table>  
        </div>
      </div>
      <?php }$db = null; ?>
  </span>
       
@endsection