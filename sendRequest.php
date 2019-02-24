<?php
require 'db.php';

$data = $_POST;
  if($data['InputName']==''){

  }else{
    if($data['InputDescription']==''){

    }else{
      if( isset($data['InputName']) ){
      $tourrequest = R::dispense('requests');
      $tourrequest->customer_name = $data['InputName'];
      $tourrequest->customer_email = $data['InputEmail'];
      $tourrequest->customer_phone = $data['InputPhone'];
      $tourrequest->customer_description = $data['InputDescription'];
      R::store($tourrequest);
  }
}
}
