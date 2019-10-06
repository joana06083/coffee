
@extends('home.secret')
@section('head')
@endsection
@section('content')

{{-- 公告 --}}
 <span style="font-family:Microsoft JhengHei;">
   {{--  --}}
    <div role="main" class="container">
      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">進貨單-即將到期</h6>
      <?php
        $db = new PDO("mysql:host=localhost;dbname=coffee;port=3306", "root", "");
        $db->exec("set names utf8");
        $result = $db->query("SELECT * FROM `purchase`");  
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
              <th>進貨單號： </th>			 
              <th>建檔日期：</th>			  
              <th>到貨/需求日：</th>			  
              <th>商品出貨日：</th>
              <th>物流單號：</th>
              <th>廠商統編：</th>
              <th>寄送地址：</th>
            </tr>		  
          </thead>	      
          <tbody>			
            <tr>			  
              <td><?php echo "{$row['pur_id']}";?></td>			 
              <td><?php echo "{$row['pur_date']}";?></th>			  
              <td><?php echo "{$row['pur_demand']}";?></th>			  
              <td><?php echo "{$row['pur_shipped']}";?></th>
              <td><?php echo "{$row['pur_shipmentnumber']}";?></th>
              <td><?php echo "{$row['sup_id']}";?></th>
              <td><?php echo "{$row['pur_address']}";?></th>
            </tr>			
          </tbody>
        </table>  
        <small class="d-block text-right mt-3">
          <a href="#" contenteditable="true" spellcheckker="false">Follow</a>
        </small>
        </div>
        <?php }$db = null; ?>
        {{--  --}}
        <div class="my-3 p-3 bg-white rounded box-shadow">
          <h6 class="border-bottom border-gray pb-2 mb-0">銷貨單-即將到期</h6>
        
        <?php
          $db = new PDO("mysql:host=localhost;dbname=coffee;port=3306", "root", "");
          $db->exec("set names utf8");
          $result = $db->query("SELECT * FROM `ordermater`");  
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
                <th>銷貨單號： </th>			 
                <th>建檔日期： </th>			  
                <th>到貨/需求日：</th>			  
                <th>商品出貨日：</th>
                <th>物流單號：</th>
                <th>客戶編號：</th>
                <th>寄送地址：</th>
              </tr>		  
            </thead>	      
            <tbody>			
              <tr>			  
                <td><?php echo "{$row['ordermater_id']}";?></td>			 
                <td><?php echo "{$row['ordermater_date']}";?></td>			  
                <td><?php echo "{$row['ordermater_demand']}";?></td>			  
                <td><?php echo "{$row['ordermater_shipped']}";?></td>
                <td><?php echo "{$row['ordermater_shipmentnumber']}";?></td>
                <td><?php echo "{$row['cust_id']}";?></td>
                <td><?php echo "{$row['ordermater_address']}";?></td>
              </tr>			
            </tbody>
          </table>  
          <small class="d-block text-right mt-3">
              <a href="#" contenteditable="true" spellcheckker="false">Follow</a>
          </small>
        </div>
      </div>
      <?php }$db = null; ?>
  </span>
       
@endsection